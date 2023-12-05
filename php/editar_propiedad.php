<?php
include('conn-vistas.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar que se hayan enviado los campos necesarios
    $required_fields = ['id_propiedad', 'Etitulo', 'Epais', 'Eestado', 'Emunicipio', 'Ecodigo_postal', 'Ecalle', 'Ecolonia', 'Enumero', 'Etipo_inmueble', 'Etipo_contrato', 'Eprecio', 'Earea', 'Episos', 'Erecamaras', 'Ebanos', 'Ecocheras', 'Ejardin', 'Ejardin_area', 'Episcina', 'Edescripcion'];

    foreach ($required_fields as $field) {
        if (!isset($_POST[$field]) || empty(trim($_POST[$field])) && $_POST[$field] !== '0') {
            $_SESSION['mensaje'] = "Error al actualizar la propiedad: verifique que no haya campos vacíos.";
            $_SESSION['mensaje_tipo'] = "danger";
            header("Location: ../crud-propiedades.php");
            exit();
        }
    }

    // Datos completos, proceder con el procesamiento en la base de datos
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
    $banos = is_numeric($_POST['Ebanos']) ? trim($_POST['Ebanos']) : null;
    $cocheras = is_numeric($_POST['Ecocheras']) ? trim($_POST['Ecocheras']) : null;
    $jardin = trim($_POST['Ejardin']);
    $jardin_area = trim($_POST['Ejardin_area']);
    $piscina = trim($_POST['Episcina']);
    $descripcion = trim($_POST['Edescripcion']);
    $imagen1 = trim($_POST['Eimagen1']) ? trim($_POST['Eimagen1']) : null;
    $imagen2 = trim($_POST['Eimagen2']) ? trim($_POST['Eimagen2']) : null;
    $imagen3 = trim($_POST['Eimagen3']) ? trim($_POST['Eimagen3']) : null;
    $imagen4 = trim($_POST['Eimagen4']) ? trim($_POST['Eimagen4']) : null;
    $imagen5 = trim($_POST['Eimagen5']) ? trim($_POST['Eimagen5']) : null;
    $imagen6 = trim($_POST['Eimagen6']) ? trim($_POST['Eimagen6']) : null;
    $imagen7 = trim($_POST['Eimagen7']) ? trim($_POST['Eimagen7']) : null;
    $imagen8 = trim($_POST['Eimagen8']) ? trim($_POST['Eimagen8']) : null;

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
        banos = ?, cocheras = ?,
        jardin = ?, jardin_area = ?,
        piscina = ?, descripcion = ?, imagen1 = ?, imagen2 = ?, imagen3 = ?,
        imagen4 = ?, imagen5 = ?, imagen6 = ?, imagen7 = ?, imagen8 = ?
        WHERE id_propiedad = ?";

    // Utiliza sentencias preparadas para prevenir inyección SQL
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        // Ajusta la cadena de definición de tipos
        mysqli_stmt_bind_param($stmt, 'sssssssssssssssssssssssssssss', 
        $titulo, $pais, $estado, $municipio, $codigo_postal, $calle, $colonia, $numero,
        $tipo_inmueble, $tipo_contrato, $precio, $area, $pisos, $recamaras, 
        $banos, $cocheras, $jardin, $jardin_area, $piscina, $descripcion, $imagen1, $imagen2,
        $imagen3, $imagen4, $imagen5, $imagen6, $imagen7, $imagen8, $id);


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
}
?>
