<?php

include "bd/todos/funciones.php";
$consulta = listarInvestigadores();
echo "<table border = 1>";
echo "<tr><th>ID</th><th>Apellido</th><th>Nombre</th><th>EMail</th></tr>";
while ($registro = $consulta->fetch()) {
    echo "<tr><td>$registro[idUsuario]</td><td>" . utf8_encode($registro[Apellido]) . "</td><td>" . utf8_encode($registro[Nombre]) . "</td><td>" . utf8_encode($registro[EMail]) . "</td></tr><br>";
}
echo "</table>";
?>