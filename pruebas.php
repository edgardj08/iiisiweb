<?php
//probando una consulta a la base de datos
$nombre = "Edgard Jose";
$apellido = "Concha Medina";
$consulta = sprintf("SELECT Nombre, Apellido, EMail, NombreUsuario "
        . "FROM usuario WHERE Nombre= '%s' AND Apellido = '%s'", mysql_real_escape_string($nombre), mysql_real_escape_string($apellido));
$resultado = mysql_query($consulta);

if (!$resultado) {
    $mensaje = " <br>Consulta no válida: " . mysql_error();
    $mensaje .= " <br>Consulta completa: " . $consulta;
    die($mensaje);
}

while ($fila = mysql_fetch_assoc($resultado)) {
    echo $fila['Nombre'] . "<br>";
    echo $fila['Apellido'] . "<br>";
    echo $fila['EMail'] . "<br>";
    echo $fila['NombreUsuario'] . "<br>";
}
mysql_free_result($resultado);
//************************************++++++++++++++++++++++++++********************************************




?>


