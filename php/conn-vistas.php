<?php
session_start();
$conn = mysqli_connect("localhost","root","","realty");
if ($conn->connect_error) {
	die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_SESSION["txtusuario"];
$pass = $_SESSION["txtpassword"];

?>