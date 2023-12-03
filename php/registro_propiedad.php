<?php
session_start(); // Inicia la sesión

$conn = mysqli_connect("localhost", "root", "", "realty");

if (!$conn) {
    die("No hay conexión: " . mysqli_connect_error());
}

if (isset($_POST['registrar_propiedad'])) {
    $id_usuario = isset($_SESSION['id_usuario']) ? $_SESSION['id_usuario'] : null;

    if ($id_usuario) {
        // Recopila los datos de $_POST
        $propertyData = [
            'titulo' => $_POST['titulo'],
            'pais' => $_POST['pais'],
            'estado' => $_POST['estado'],
            'municipio' => $_POST['municipio'],
            'codigo_postal' => $_POST['codigo_postal'],
            'calle' => $_POST['calle'],
            'colonia' => $_POST['colonia'],
            'numero' => $_POST['numero'],
            'tipo_inmueble' => $_POST['tipo_inmueble'],
            'tipo_contrato' => $_POST['tipo_contrato'],
            'precio' => $_POST['precio'],
            'area' => $_POST['area'],
            'pisos' => $_POST['pisos'],
            'recamaras' => isset($_POST['recamaras']) ? $_POST['recamaras'] : null,
            'banos' => isset($_POST['banos']) ? $_POST['banos'] : null,
            'cocheras' => isset($_POST['cocheras']) ? $_POST['cocheras'] : null,
            'jardin' => isset($_POST['jardin']) ? $_POST['jardin'] : null,
            'jardin_area' => isset($_POST['jardin_area']) && is_numeric($_POST['jardin_area']) ? $_POST['jardin_area'] : (empty($_POST['jardin']) ? 0 : null),
            'piscina' => $_POST['piscina'],
            'descripcion' => $_POST['descripcion']
        ];

        // Validar que se hayan enviado los campos necesarios
        $required_fields = ['titulo', 'pais', 'estado', 'municipio', 'codigo_postal', 'calle', 'colonia', 'numero', 'tipo_inmueble', 'tipo_contrato', 'precio', 'area', 'pisos', 'piscina', 'descripcion'];

        foreach ($required_fields as $field) {
            if (!isset($propertyData[$field]) || empty(trim($propertyData[$field]))) {
                $_SESSION['mensaje'] = "Error al registrar la propiedad: verifique que no haya campos vacíos.";
                $_SESSION['mensaje_tipo'] = "danger";
                header("Location: ../crud-propiedades.php");
                exit();
            }
        }

        // Verificación de rangos permitidos
        if ($propertyData['banos'] < 0 || $propertyData['recamaras'] < 0 || $propertyData['cocheras'] < 0) {
            $_SESSION['mensaje'] = "Error al actualizar la propiedad: datos inválidos.";
            $_SESSION['mensaje_tipo'] = "danger";
            header("Location: ../crud-propiedades.php");
            exit();
        }

        // Consulta SQL con sentencia preparada
        $query = "INSERT INTO propiedades (id_usuario, titulo, pais, estado, municipio, codigo_postal, calle, colonia, numero, tipo_inmueble, tipo_contrato, precio, area, pisos, recamaras, banos, cocheras, jardin, jardin_area, piscina, descripcion) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,COALESCE(?, 0), ?, ?)";

        $stmt = mysqli_prepare($conn, $query);

        if ($stmt) {
            // Ajusta la cadena de definición de tipos
            $types = 'sssssssssssssssssssss';
            $params = [
                &$id_usuario, 
                &$propertyData['titulo'], &$propertyData['pais'], &$propertyData['estado'], 
                &$propertyData['municipio'], &$propertyData['codigo_postal'], &$propertyData['calle'], 
                &$propertyData['colonia'], &$propertyData['numero'], &$propertyData['tipo_inmueble'], 
                &$propertyData['tipo_contrato'], &$propertyData['precio'], &$propertyData['area'], 
                &$propertyData['pisos'], &$propertyData['recamaras'], &$propertyData['banos'], 
                &$propertyData['cocheras'], &$propertyData['jardin'], 
                // Si jardin no está seleccionado, establece jardin_area a 0
                &$propertyData['jardin_area'], 
                &$propertyData['piscina'], &$propertyData['descripcion']
            ];

            call_user_func_array('mysqli_stmt_bind_param', array_merge([$stmt, $types], $params));

            mysqli_stmt_execute($stmt);

            // Verifica si la inserción fue exitosa
            if (mysqli_stmt_affected_rows($stmt) > 0) {
                $_SESSION['mensaje'] = "Propiedad registrada exitosamente.";
                $_SESSION['mensaje_tipo'] = "success";
            } else {
                $_SESSION['mensaje'] = "Error al registrar la propiedad.";
                $_SESSION['mensaje_tipo'] = "danger";
            }

            mysqli_stmt_close($stmt);
        } else {
            // Manejo de errores en la preparación de la consulta
            $_SESSION['mensaje'] = "Error interno al procesar la solicitud.";
            $_SESSION['mensaje_tipo'] = "danger";
        }

        header("Location: ../crud-propiedades.php");
        exit();
    } else {
        // Redirige si id_usuario no está definido en la sesión
        $_SESSION['mensaje'] = 'Error: No se ha iniciado sesión';
        $_SESSION['mensaje_tipo'] = 'danger';
        header("Location: ../login.php");
    }
}
?>