<?php
    include('conn-vistas.php');

    if(isset($_POST['comentar'])){
        if(strlen($_POST['inputComentar']) >=1 ){
            $id = $_GET['id'];
            $comentario = $_POST['inputComentar'];
            
            $query = "UPDATE cliente set comentario = '$comentario' WHERE id_cliente = '$id'";
            $resultado = mysqli_query($conn, $query);

            if($resultado){
                $_SESSION['mensaje'] = 'Comentarios guardados';
                $_SESSION['mensaje_tipo'] = 'success';
            }else{
                $_SESSION['mensaje'] = 'No se guardaron los comentarios';
                $_SESSION['mensaje_tipo'] = 'danger';
            }
            header('Location: ../crud-cliente.php');
        }
    }

    if (isset($_POST['guardar'])) {
        if(strlen($_POST['Enombre'])     >= 1
        && strlen($_POST['Eapellido_1']) >= 1
        && strlen($_POST['Etelefono'])   >= 1){
            $id = $_GET['id'];
            $nombre = trim($_POST['Enombre']);
            $apellido_1 = trim($_POST['Eapellido_1']);
            $apellido_2 = trim($_POST['Eapellido_2']);
            $telefono = trim($_POST['Etelefono']);
            $correo = trim($_POST['Ecorreo']);
      
            $query = "UPDATE cliente set nombre = '$nombre', apellido_1 = '$apellido_1', apellido_2 = '$apellido_2', telefono = '$telefono', correo = '$correo' WHERE id_cliente = '$id'";
            $resultado = mysqli_query($conn, $query);
            
            if($resultado){
                $_SESSION['mensaje'] = 'Actualizacion exitosa';
                $_SESSION['mensaje_tipo'] = 'success';
            }else{
                $_SESSION['mensaje'] = 'Actualizacion fallida';
                $_SESSION['mensaje_tipo'] = 'danger';
            }
            header('Location: ../crud-clientes.php');
        }
    }     
?>
