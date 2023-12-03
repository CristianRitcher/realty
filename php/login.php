<?php
// Inicia la sesión
session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "realty";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
	die("No hay conexión: " . mysqli_connect_error());
}

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($conn, "SELECT id_usuario FROM usuarios WHERE correo = '$nombre' AND contrasena = '$pass'");
$nr = mysqli_num_rows($query);

if ($nr == 1) {
	$row = mysqli_fetch_assoc($query);
	$_SESSION["txtusuario"] = $nombre;
	$_SESSION["txtpassword"] = $pass;
	$_SESSION['id_usuario'] = $row['id_usuario'];
	
	$propiedades_query = mysqli_query($conn, "SELECT * FROM propiedades WHERE id_usuario = {$_SESSION['id_usuario']}");
    $propiedades = array();

    // Almacena las propiedades en un array asociativo
    while ($propiedad = mysqli_fetch_assoc($propiedades_query)) {
        $propiedades[] = $propiedad;
    }
   
	// Almacena el array de propiedades en la sesión
    $_SESSION['propiedades'] = $propiedades;

    header("Location: ../menu-control.php");
    exit;

} else {
	header("Location: ../login.php");
	exit;
}

$conn->close();
?>
