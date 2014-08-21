<?php

header("Content-Type: text/html;charset=utf-8");
//include "ConexionBD/conexion.php";
require_once("sesion.class.php");

$sesion = new sesion();

if (isset($_POST["iniciar"])) {
    $usuario = $_POST["usuario"];
    $password = $_POST["pass"];
    if (validarUsuario($usuario, $password) == true) {
        $sesion->set("usuario", $usuario);

        header("location: main.php");
    } else {
        echo "Verifica tu nombre de usuario y contraseña";
    }
}

function validarUsuario($usuario, $password) {
    include "bd/conexion.php";
    $sql = "select pass from usuario where nombreusuario = '$usuario';";
    $consulta = $cnn->prepare($sql);
    $param = array(0);

    if ($consulta->execute($param)) {
        $registro = $consulta->fetch();
        if ($registro[pass] == $password) {
            echo "conectado";
            return true;
        } else {
            return false;
        }
    } else {
        print_r($consulta->errorInfo());
        return false;
    }
}

?>
