<?php
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

$nombre = $_SESSION["txtusuario"];
$pass = $_SESSION["txtpassword"];

?>