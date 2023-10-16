<?php
    include("conn.php");
    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "DELETE FROM cliente WHERE id_cliente = '$id'";
        $resultado = mysqli_query($conn, $query);

        if($resultado){
            $_SESSION['mensaje'] = 'Contacto eliminado';
            $_SESSION['mensaje_tipo'] = 'success';
        }else{
            $_SESSION['mensaje'] = 'Proceso fallido';
            $_SESSION['mensaje_tipo'] = 'danger';
        }
        header("Location: crud.php");
    }
?>