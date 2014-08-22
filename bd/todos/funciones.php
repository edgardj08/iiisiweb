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
        //echo "<br>consulta ejecutada...<br>";
    } else {
        //print_r($consulta->errorInfo());
    }
    return $consulta;
}

?>