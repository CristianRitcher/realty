<?php
include('conn-vistas.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar que se hayan enviado los campos necesarios
    $required_fields = ['id_propiedad', 'Etitulo', 'Epais', 'Eestado', 'Emunicipio', 'Ecodigo_postal', 'Ecalle', 'Ecolonia', 'Enumero', 'Etipo_inmueble', 'Etipo_contrato', 'Eprecio', 'Earea', 'Episos', 'Erecamaras', 'Ebanos', 'Ecocheras', 'Ejardin', 'Ejardin_area', 'Episcina', 'Edescripcion'];

    $data_complete = true;

    foreach ($required_fields as $field) {
        $field_value = isset($_POST[$field]) ? $_POST[$field] : '';

        if (!isset($field_value) || (empty(trim($field_value)) && $field_value !== '0')) {
            $data_complete = false;
            $_SESSION['mensaje'] = "Error al actualizar la propiedad: verifique que no haya campos vacíos.";
            $_SESSION['mensaje_tipo'] = "danger";
            header("Location: ../crud-propiedades.php");
            exit();
        }
    }

    if ($data_complete) {
        // Datos completos, proceder con el procesamiento en la base de datos
        echo "Datos completos. Procediendo con el procesamiento.<br>";

        // Obtener y sanear los datos del formulario
        $id = trim($_POST['id_propiedad']);
        $titulo = trim($_POST['Etitulo']);
        $pais = trim($_POST['Epais']);
        $estado = trim($_POST['Eestado']);
        $municipio = trim($_POST['Emunicipio']);
        $codigo_postal = trim($_POST['Ecodigo_postal']);
        $calle = trim($_POST['Ecalle']);
        $colonia = trim($_POST['Ecolonia']);
        $numero = trim($_POST['Enumero']);
        $tipo_inmueble = trim($_POST['Etipo_inmueble']);
        $tipo_contrato = trim($_POST['Etipo_contrato']);
        $precio = trim($_POST['Eprecio']);
        $area = trim($_POST['Earea']);
        $pisos = trim($_POST['Episos']);
        $recamaras = trim($_POST['Erecamaras']);
        $banos = trim($_POST['Ebanos']);
        $cocheras = is_numeric($_POST['Ecocheras']) ? trim($_POST['Ecocheras']) : null;
        $jardin = trim($_POST['Ejardin']);
        $jardin_area = trim($_POST['Ejardin_area']);
        $piscina = trim($_POST['Episcina']);
        $descripcion = trim($_POST['Edescripcion']);

        // Verificación de rangos permitidos
        if ($pisos < 0 || $banos < 0 || $recamaras < 0 || $cocheras < 0) {
            $_SESSION['mensaje'] = "Error al actualizar la propiedad: datos inválidos.";
            $_SESSION['mensaje_tipo'] = "danger";
            header("Location: ../crud-propiedades.php");
            exit();
        }

        // Consulta SQL para actualizar la propiedad en la base de datos
        $query = "UPDATE propiedades SET 
        titulo = ?, pais = ?, estado = ?, municipio = ?, codigo_postal = ?,
        calle = ?, colonia = ?, numero = ?, tipo_inmueble = ?,
        tipo_contrato = ?, precio = ?, area = ?, pisos = ?, recamaras = ?,
        banos = COALESCE(?, NULL), cocheras = COALESCE(?, NULL),
        jardin = COALESCE(?, NULL), jardin_area = COALESCE(?, NULL),
        piscina = COALESCE(?, NULL), descripcion = ?
        WHERE id_propiedad = ?";

        // Utiliza sentencias preparadas para prevenir inyección SQL
        $stmt = mysqli_prepare($conn, $query);

        if ($stmt) {
            // Ajusta la cadena de definición de tipos
            mysqli_stmt_bind_param($stmt, 'sssssssssssssssssssss', 
                $titulo, $pais, $estado, $municipio, $codigo_postal, $calle, $colonia, $numero,
                $tipo_inmueble, $tipo_contrato, $precio, $area, $pisos, $recamaras, 
                $banos, $cocheras, $jardin, $jardin_area, $piscina, $descripcion, $id);

            mysqli_stmt_execute($stmt);

            // Verifica si la actualización fue exitosa
            if (mysqli_stmt_affected_rows($stmt) > 0) {
                $_SESSION['mensaje'] = "Propiedad actualizada exitosamente.";
                $_SESSION['mensaje_tipo'] = "success";
            } else {
                $_SESSION['mensaje'] = "Error al actualizar la propiedad.";
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
        echo "Datos incompletos";
    }
}
?>