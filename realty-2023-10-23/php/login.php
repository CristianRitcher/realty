<?php

// Inicia la sesión
session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "realty";


$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($conn, "SELECT * FROM administradores WHERE correo = '".$nombre."' and contrasena = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
    $_SESSION["txtusuario"] = $nombre;
	header("Location: ../menu-control.php");
    exit;
}
else if ($nr == 0) 
{
    header("Location: ../login.php");
    exit;
}

$conn->close();

?>
