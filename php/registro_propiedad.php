<?php
session_start(); // Inicia la sesión

$conn = mysqli_connect("localhost", "root", "", "realty");

if (!$conn) {
    die("No hay conexión: " . mysqli_connect_error());
}
function handleImageUpload($fileInputName, $destinationFolder = '../img/') {
    $uploadedFile = $_FILES[$fileInputName];

    // Generar un nombre único para la imagen
    $uniqueFileName = uniqid('img_') . '_' . time() . '.' . pathinfo($uploadedFile['name'], PATHINFO_EXTENSION);

    $destinationPath = $destinationFolder . $uniqueFileName;

    // Mover el archivo cargado al directorio de destino
    move_uploaded_file($uploadedFile['tmp_name'], $destinationPath);

    return $uniqueFileName;
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
            'descripcion' => $_POST['descripcion'],
            'imagen1' => isset($_POST['imagen1']) ? $_POST['imagen1'] : null,
            'imagen2' => isset($_POST['imagen2']) ? $_POST['imagen2'] : null,
            'imagen3' => isset($_POST['imagen3']) ? $_POST['imagen3'] : null,
            'imagen4' => isset($_POST['imagen4']) ? $_POST['imagen4'] : null,
            'imagen5' => isset($_POST['imagen5']) ? $_POST['imagen5'] : null,
            'imagen6' => isset($_POST['imagen6']) ? $_POST['imagen6'] : null,
            'imagen7' => isset($_POST['imagen7']) ? $_POST['imagen7'] : null,
            'imagen8' => isset($_POST['imagen8']) ? $_POST['imagen8'] : null
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

        $imagen1 = isset($_FILES['imagen1']) ? $_FILES['imagen1'] : null;

        // Verifica si se ha proporcionado una imagen válida
        $imagen1 = isset($_FILES['imagen1']) ? $_FILES['imagen1'] : null;

        if ($imagen1 && $imagen1['error'] === UPLOAD_ERR_OK) {
            $propertyData['imagen1'] = handleImageUpload('imagen1');
        } else {
            // Si no se proporciona imagen, establece el valor como 'Sin imagen'
            $propertyData['imagen1'] = NULL;
        }
        
        $imagen2 = isset($_FILES['imagen2']) ? $_FILES['imagen2'] : null;

        // Verifica si se ha proporcionado una imagen válida
        $imagen2 = isset($_FILES['imagen2']) ? $_FILES['imagen2'] : null;

        if ($imagen2 && $imagen2['error'] === UPLOAD_ERR_OK) {
            $propertyData['imagen2'] = handleImageUpload('imagen2');
        } else {
            // Si no se proporciona imagen, establece el valor como 'Sin imagén'
            $propertyData['imagen2'] = NULL;
        }
        
        $imagen3 = isset($_FILES['imagen3']) ? $_FILES['imagen3'] : null;

        // Verifica si se ha proporcionado una imagen válida
        $imagen3 = isset($_FILES['imagen3']) ? $_FILES['imagen3'] : null;

        if ($imagen3 && $imagen3['error'] === UPLOAD_ERR_OK) {
            $propertyData['imagen3'] = handleImageUpload('imagen3');
        } else {
            // Si no se proporciona imagen, establece el valor como 'Sin imagén'
            $propertyData['imagen3'] = NULL;
        }

        $imagen4 = isset($_FILES['imagen4']) ? $_FILES['imagen4'] : null;

        // Verifica si se ha proporcionado una imagen válida
        $imagen4 = isset($_FILES['imagen4']) ? $_FILES['imagen4'] : null;

        if ($imagen4 && $imagen4['error'] === UPLOAD_ERR_OK) {
            $propertyData['imagen4'] = handleImageUpload('imagen4');
        } else {
            // Si no se proporciona imagen, establece el valor como 'Sin imagén'
            $propertyData['imagen4'] = NULL;
        }

        $imagen5 = isset($_FILES['imagen5']) ? $_FILES['imagen5'] : null;

        // Verifica si se ha proporcionado una imagen válida
        $imagen5 = isset($_FILES['imagen5']) ? $_FILES['imagen5'] : null;

        if ($imagen5 && $imagen5['error'] === UPLOAD_ERR_OK) {
            $propertyData['imagen5'] = handleImageUpload('imagen5');
        } else {
            // Si no se proporciona imagen, establece el valor como 'Sin imagén'
            $propertyData['imagen5'] = NULL;
        }

        $imagen6 = isset($_FILES['imagen6']) ? $_FILES['imagen6'] : null;

        // Verifica si se ha proporcionado una imagen válida
        $imagen6 = isset($_FILES['imagen6']) ? $_FILES['imagen6'] : null;

        if ($imagen6 && $imagen6['error'] === UPLOAD_ERR_OK) {
            $propertyData['imagen6'] = handleImageUpload('imagen6');
        } else {
            // Si no se proporciona imagen, establece el valor como 'Sin imagén'
            $propertyData['imagen6'] = NULL;
        }

        $imagen7 = isset($_FILES['imagen7']) ? $_FILES['imagen7'] : null;

        // Verifica si se ha proporcionado una imagen válida
        $imagen7 = isset($_FILES['imagen7']) ? $_FILES['imagen7'] : null;

        if ($imagen7 && $imagen7['error'] === UPLOAD_ERR_OK) {
            $propertyData['imagen7'] = handleImageUpload('imagen7');
        } else {
            // Si no se proporciona imagen, establece el valor como 'Sin imagén'
            $propertyData['imagen7'] = NULL;
        }

        $imagen8 = isset($_FILES['imagen8']) ? $_FILES['imagen8'] : null;

        // Verifica si se ha proporcionado una imagen válida
        $imagen8 = isset($_FILES['imagen8']) ? $_FILES['imagen8'] : null;

        if ($imagen8 && $imagen8['error'] === UPLOAD_ERR_OK) {
            $propertyData['imagen8'] = handleImageUpload('imagen8');
        } else {
            // Si no se proporciona imagen, establece el valor como 'Sin imagén'
            $propertyData['imagen8'] = NULL;
        }

        // Consulta SQL con sentencia preparada
        $query = "INSERT INTO propiedades (id_usuario, titulo, pais, estado, municipio, codigo_postal, calle, colonia, numero, tipo_inmueble, tipo_contrato, precio, area, pisos, recamaras, banos, cocheras, jardin, jardin_area, piscina, descripcion, imagen1, imagen2, imagen3, imagen4, imagen5, imagen6, imagen7, imagen8) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, COALESCE(?, 0), ?, ?, COALESCE(?, NULL), COALESCE(?, NULL), COALESCE(?, NULL), COALESCE(?, NULL), COALESCE(?, NULL), COALESCE(?, NULL), COALESCE(?, NULL), COALESCE(?, NULL))";

        $stmt = mysqli_prepare($conn, $query);

        if ($stmt) {
            // Ajusta la cadena de definición de tipos
            $types = 'sssssssssssssssssssssssssssss';
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
                &$propertyData['piscina'], &$propertyData['descripcion'], &$propertyData['imagen1'],
                &$propertyData['imagen2'], &$propertyData['imagen3'], &$propertyData['imagen4'],
                &$propertyData['imagen5'], &$propertyData['imagen6'], &$propertyData['imagen7'],
                &$propertyData['imagen8']
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
