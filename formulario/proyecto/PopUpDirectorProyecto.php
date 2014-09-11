<?php
function PosiblesDirectores() {
    include "bd/conexion.php";
    $sql = "select * from Usuario left join Perfil on "
            . "Usuario.idUsuario = Perfil.Usuario_idUsuarios where "
            . "Perfil.Categoria_idCategoria >= 3 order by Usuario.Apellido";
    $consulta = $cnn->prepare($sql);
    echo "entro";
    $param = array(0);
    if ($consulta->execute($param)) {
        echo "<table border = 1>";
        echo "<tr><th>ID</th><th>Apellido</th><th>Nombre</th><th>Opción</th></tr>";
        while ($registro = $consulta->fetch()) {
            echo "<tr><td>$registro[idUsuario]</td><td>" . utf8_encode($registro[Apellido]) . "</td><td>" . utf8_encode($registro[Nombre]) . "</td> <td> <a href='#?id=$registro[idUsuario]'>Agregar</a></td></tr><br>";
        }
        echo "</table>";
    } else {
        //print_r($consulta->errorInfo());
    }
}
PosiblesDirectores();
?>