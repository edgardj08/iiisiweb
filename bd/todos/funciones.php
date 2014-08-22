<!--todos/funciones.php
Aqui se detallan todas las funciones que pueden ser utilizadas por todos los usuarios
incluso los invitados (NO REGISTRADOS)
Se priorizan funciones de listado y busqueda
-->
<?php

function listarInvestigadores() {
    include "bd/conexion.php";
    $sql = "select * from Usuario order by Apellido";
    $consulta = $cnn->prepare($sql);
    $param = array(0);
    if ($consulta->execute($param)) {
        echo "<table border = 1>";
        echo "<tr><th>ID</th><th>Apellido</th><th>Nombre</th><th>EMail</th></tr>";
        while ($registro = $consulta->fetch()) {
            echo "<tr><td>$registro[idUsuario]</td><td>" . utf8_encode($registro[Apellido]) . "</td><td>" . utf8_encode($registro[Nombre]) . "</td><td>" . utf8_encode($registro[EMail]) . "</td></tr><br>";
        }
        echo "</table>";
    } else {
        //print_r($consulta->errorInfo());
    }
    //return $consulta;
}
?>