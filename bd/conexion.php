<?php
//para mostrar letras Ñ y vocales con acentos
header("Content-Type: text/html;charset=utf-8");

//conexion
//$link = mysqli_connect("localhost", "root", "6bLxfawt9VYMpCFV", "iiisi") OR DIE("No se pudo conectar: " .  mysqli_error());
//echo "Conexion exitosa";
//mysqli_select_db($link, "iiisi") OR DIE("ERROR: no se encuentra la base de datos.");
$driver = "mysql";
$host = "localhost";
$user = "root";
$pass = "6bLxfawt9VYMpCFV";
$dbname = "iiisi";
$cnn = new PDO("$driver:host=$host;dbname=$dbname", "$user", "$pass");
if ($cnn) {
    //echo "conectado<br>";
}
?>
