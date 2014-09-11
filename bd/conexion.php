<?php
//conexion a la base de datos
//para mostrar letras Ñ y vocales con acentos
//header("Content-Type: text/html;charset=utf-8");
$driver = "mysql";
$host = "localhost";
$user = "root";
$pass = "6bLxfawt9VYMpCFV";
$dbname = "iiisi";
$cnn = new PDO("$driver:host=$host;dbname=$dbname", "$user", "$pass");

?>
