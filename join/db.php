<?php
//Configuarcion nesesaria para acceder a la base de datos 
$hostname = "localhost";
$usuariodb = "root";
$passworddb = "";
$dbname = "php_join";

// Generrando la conexion con el servidor
$conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
?>