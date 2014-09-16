<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" href="css/data_tables/jquery.dataTables_themeroller.css" rel="stylesheet"/>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.dataTables.js"></script>
        <script>
            $(document).ready(function() {
                $("#tabla").dataTable();
            });
        </script>
    </head>
    <body>     
    </body>
</html>
<?php
function PosiblesDirectores() {
    include "bd/conexion.php";
    $sql = "select * from Usuario left join Perfil on "
            . "Usuario.idUsuario = Perfil.Usuario_idUsuarios where "
            . "Perfil.Categoria_idCategoria >= 3 order by Usuario.Apellido";
    $consulta = $cnn->prepare($sql);
    $param = array(0);
    if ($consulta->execute($param)) {
//        echo "<table border = 1 id = tabla>";
  //      echo "<thead>
    //    <tr><th>ID</th><th>Apellido</th><th>Nombre</th><th>Opción</th></tr>
      //  </thead>
        //<tbody>";
        //while ($registro = $consulta->fetch()) {
        //    echo "<tr><td>$registro[idUsuario]</td><td>" . utf8_encode($registro[Apellido]) . "</td><td>" . utf8_encode($registro[Nombre]) . "</td> <td> <a href='#?id=$registro[idUsuario]' id='close'>Agregar</a></td></tr><br>";
        //}
        //echo "</tbody></table>";
    } else {
        //print_r($consulta->errorInfo());
    }
    return $consulta;
}

?>