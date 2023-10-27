<?php
    include("conn.php");
    
    if(isset($_POST['btnBuscar'])){
        $buscar = $_POST['inputBuscar'];
        
        if(strlen($buscar) >= 1){
            $query = "SELECT * FROM cliente WHERE nombre LIKE '%$buscar%' OR apellido_1 LIKE '%$buscar%' OR apellido_2 LIKE '%$buscar%' OR correo LIKE '%$buscar%' OR telefono LIKE '%$buscar%'";
        }
        $_SESSION['consulta'] = mysqli_query($conn, $query);
        header("Location: crud.php");
    }
    
    
    
?>
if($llamado >= 0){
            $where = $where." llamado = '$llamado' AND";
        }
        if($contestado >= 0){
            $where = $where." contestado = '$contestado' AND";
        }
        if($interesado >= 0){
            $where = $where." interresado = '$interesado'";
        }

        
        

        $llamado = $_POST['filtroLlamado'];
        $contestado = $_POST['filtroContestado'];
        $interesado = $_POST['filtroInteresado'];

        