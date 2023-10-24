<?php
    include("conn.php");

    if(isset($_POST['registrar'])){
        if(strlen($_POST['nombre'])     >= 1
        && strlen($_POST['apellido_1']) >= 1
        && strlen($_POST['telefono'])   >= 1
        && strlen($_POST['correo'])     >= 1){
            $nombre = trim($_POST['nombre']);
            $apellido_1 = trim($_POST['apellido_1']);
            $apellido_2 = trim($_POST['apellido_2']);
            $telefono = trim($_POST['telefono']);
            $correo = trim($_POST['correo']);
            $query = "INSERT INTO clientes(nombre, apellido_1, apellido_2, correo, telefono, id_agente) VALUES ('$nombre','$apellido_1','$apellido_2','$correo','$telefono', '0000000001')";
            $resultado = mysqli_query($conn, $query);

        }
        if($resultado){
            $_SESSION['mensaje'] = 'Registro exitoso';
            $_SESSION['mensaje_tipo'] = 'success';
        }else{
            $_SESSION['mensaje'] = 'Registro fallido';
            $_SESSION['mensaje_tipo'] = 'danger';
        }

        header("Location: ../crud-clientes.php");
    }
?>