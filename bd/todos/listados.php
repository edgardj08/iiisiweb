<?php

include "bd/todos/funciones.php";
$consulta = listarInvestigadores();
echo "<table border = 1>";
echo "<tr><th>ID</th><th>Apellido</th><th>Nombre</th><th>EMail</th></tr>";
while ($registro = $consulta->fetch()) {
    //echo "$registro[id_genero]".utf8_encode($registro[desc_genero])."<br>";
    echo "<tr><td>$registro[id_genero]</td>" . 
            "<td>" . utf8_encode($registro[desc_genero]) . "</td>"
            . ""
            . ""
            . "</tr><br>";
}
echo "</table>";
?>