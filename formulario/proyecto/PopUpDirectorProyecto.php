<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" href="css/data_tables/jquery.dataTables_themeroller.css" rel="stylesheet"/>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.dataTables.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#btn').click(function() {
                    $('#popup').fadeIn('slow');
                    $('.popup-overlay').fadeIn('slow');
                    $('.popup-overlay').height($(window).height()());
                    return false;
                });
                $('#close').click(function() {
                    $('#popup').fadeOut('slow');
                    $('.popup-overlay').fadeOut('slow');
                    return false;
                });
                $('#add').click(function() {
                    $('#popup').fadeOut('slow');
                    $('.popup-overlay').fadeOut('slow');
                    return false;
                });
            });
            $(document).ready(function() {
                $("#tabla").dataTable();
            });
        </script>
        <style>
            #popup {
                left: 0;
                position: absolute;
                top: 0;
                width: 100%;
                z-index: 600;
            }

            .content-popup {
                margin:0px auto;
                margin-top:120px;
                position:relative;
                padding:10px;
                width:500px;
                min-height:250px;
                border-radius:4px;
                background-color:#FFFFFF;
                box-shadow: 0 2px 5px #666666;
            }

            .content-popup h2 {
                color:#48484B;
                border-bottom: 1px solid #48484B;
                margin-top: 0;
                padding-bottom: 4px;
            }

            .popup-overlay {
                left: 0;
                position: absolute;
                top: 0;
                width: 100%;
                z-index: 999;
                display:none;
                background-color: #777777;
                cursor: pointer;
                opacity: 0.7;
            }

            .close {
                position: absolute;
                right: 15px;

            </style>
    </head>
    <body>     
    </body>
</html>
<?php
include "bd/conexion.php";
$sql = "select * from Usuario left join Perfil on "
        . "Usuario.idUsuario = Perfil.Usuario_idUsuarios where "
        . "Perfil.Categoria_idCategoria >= 3 order by Usuario.Apellido";
$consulta = $cnn->prepare($sql);
$param = array(0);
if ($consulta->execute($param)) {
    echo "<form method = post>";
    echo "<table border = 1 id = tabla>";
    echo "<thead>
            <tr><th>ID</th><th>Apellido</th><th>Nombre</th><th>Opción</th></tr>
            </thead>
            <tbody>";
    while ($registro = $consulta->fetch()) {
        echo "<tr><td>$registro[idUsuario]</td><td>"
        . utf8_encode($registro[Apellido]) . "</td><td>"
        . utf8_encode($registro[Nombre]) . "</td>";
        echo "<td><a href='#?id=$registro[idUsuario]&op=agregar' class = add id = add>Agregar</a></td></tr><br>";
    }
    echo "</tbody></table><form>";
} else {
    //print_r($consulta->errorInfo());
}
//return $consulta;
?>