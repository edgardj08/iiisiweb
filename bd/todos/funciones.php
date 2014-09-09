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
}

function listarProyectos() {
    include "bd/conexion.php";
    $sql = "select * from Proyecto order by TituloProy";
    $consulta = $cnn->prepare($sql);
    $param = array(0);
    if ($consulta->execute($param)) {
        echo "<table border = 1>";
        echo "<tr><th>ID</th><th>Titulo</th><th>Palabras Claves</th></tr>";
        while ($registro = $consulta->fetch()) {
            echo "<tr><td>$registro[idProyecto]</td><td>" . utf8_encode($registro[TituloProy]) . "</td><td>" . utf8_encode($registro[PalabrasClave]) . "</td></tr><br>";
        }
        echo "</table>";
    } else {
        //print_r($consulta->errorInfo());
    }
}

function listarProgramas() {
    include "bd/conexion.php";
    $sql = "select * from Programa order by Titulo";
    $consulta = $cnn->prepare($sql);
    $param = array(0);
    if ($consulta->execute($param)) {
        echo "<table border = 1>";
        echo "<tr><th>ID</th><th>Titulo</th><th>Palabras Claves</th></tr>";
        while ($registro = $consulta->fetch()) {
            echo "<tr><td>$registro[idPrograma]</td><td>" . utf8_encode($registro[Titulo]) . "</td><td>" . utf8_encode($registro[PalabrasClave]) . "</td></tr><br>";
        }
        echo "</table>";
    } else {
        //print_r($consulta->errorInfo());
    }
    //return $consulta;
}

function buscarProyecto($buscar) {
    include "bd/conexion.php";
    $sql = "select *  from Proyecto "
            . "where TituloProy LIKE '%$buscar%' or "
            . "Disciplina LIKE '%$buscar%' or "
            . "Descripcion LIKE '%$buscar%' or "
            . "DescCorta LIKE '%$buscar%' or "
            . "PalabrasClave LIKE '%$buscar%'";
    $consulta = $cnn->prepare($sql);
    $param = array(0);
    if ($consulta->execute($param)) {
        echo "<table border = 1>";
        echo "<tr><th>ID</th><th>Titulo</th><th>Palabras Claves</th></tr>";
        while ($registro = $consulta->fetch()) {
            echo "<tr><td>$registro[idProyecto]</td><td>" . utf8_encode($registro[TituloProy]) . "</td><td>" . utf8_encode($registro[PalabrasClave]) . "</td></tr><br>";
        }
        echo "</table>";
    } else {
        print_r($consulta->errorInfo());
    }
}

function buscarPrograma($buscar) {
    include "bd/conexion.php";
    $sql = "select *  from Programa "
            . "where Titulo LIKE '%$buscar%' or "
            . "Disciplina LIKE '%$buscar%' or "
            . "Descripcion LIKE '%$buscar%'";
    $consulta = $cnn->prepare($sql);
    $param = array(0);
    if ($consulta->execute($param)) {
        echo "<table border = 1>";
        echo "<tr><th>ID</th><th>Titulo</th><th>Disciplina</th><th>Descripcion</th></tr>";
        while ($registro = $consulta->fetch()) {
            echo "<tr><td>$registro[idPrograma]</td><td>" . utf8_encode($registro[Titulo]) . "</td><td>" . utf8_encode($registro[Disciplina]) . "</td><td>" . utf8_encode($registro[Descripcion]) . "</td></tr><br>";
        }
        echo "</table>";
    } else {
        print_r($consulta->errorInfo());
    }
}

function buscarPublicacion($buscar) {
    include "bd/conexion.php";
    $sql = "select *  from Archivo "
            . "where Titulo LIKE '%$buscar%' or "
            . "Abstarct LIKE '%$buscar%' or "
            . "Autor LIKE '%$buscar%'";
    $consulta = $cnn->prepare($sql);
    $param = array(0);
    if ($consulta->execute($param)) {
        echo "<table border = 1>";
        echo "<tr><th>ID</th><th>Titulo</th><th>Abstract</th><th>Link</th></tr>";
        while ($registro = $consulta->fetch()) {
            echo "<tr><td>$registro[idProyecto]</td><td>" . utf8_encode($registro[Titulo]) . "</td><td>" . utf8_encode($registro[Abstarct]) . "</td><td>" . utf8_encode($registro[Enlace]) . "</td></tr><br>";
        }
        echo "</table>";
    } else {
        print_r($consulta->errorInfo());
    }
}

function buscarUsuario($buscar) {
    include "bd/conexion.php";
    $sql = "select *  from Usuario "
            . "where Nombre LIKE '%$buscar%' or "
            . "Apellido LIKE '%$buscar%' or "
            . "NombreUsuario LIKE '%$buscar%'";  
    $consulta = $cnn->prepare($sql);
    $param = array(0);
    if ($consulta->execute($param)) {
        echo "<table border = 1>";
        echo "<tr><th>ID</th><th>Apellido</th><th>Nombre</th><th>Curriculum</th><th>E-Mail</th></tr>";
        while ($registro = $consulta->fetch()) {
            echo "<tr><td>$registro[idUsuario]</td><td>" . utf8_encode($registro[Apellido]) . "</td><td>" . utf8_encode($registro[Nombre]) . "</td><td>" . utf8_encode($registro[Curriculum]) . "</td><td>" . utf8_encode($registro[EMail]) . "</td></tr><br>";
        }
        echo "</table>";
    } else {
        print_r($consulta->errorInfo());
    }
}

function modificarDatosPersonales(){
    
}
?>