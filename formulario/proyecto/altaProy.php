<?php
if ($_POST) {
    include "bd/administrador/proyectos/abm.php";
    $registro = crearProyecto($_POST[tituloProy], $_POST[codProy], $_POST[disciplinaProy]);
    if ($registro == 1) {


        echo '<script language="javascript">';
        echo 'alert("El Proyecto se guardo con extio")';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Error al guardar el Proyecto...")';
        echo '</script>';
    }
}
?>
<html>
    <head>
        <!--POP UP-->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#btn').click(function() {
                    $('#popup').fadeIn('slow');
                    $('.popup-overlay').fadeIn('slow');
                    $('.popup-overlay').height($(window).height());
                    return false;
                });

                $('#close').click(function() {
                    $('#popup').fadeOut('slow');
                    $('.popup-overlay').fadeOut('slow');
                    return false;
                });
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
            <!--DATA TABLE-->
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
            <h3> Crear Proyecto </h3>
            <br>
            <form method ="post" action='#'>
                <table>
                    <tr><td>Titulo del Proyecto: </td><td><input type ="text" name="tituloProy" size ="30" maxlength="300"/></td></tr>
                    <tr><td>Código del Proyecto </td><td><input type ="text" name="codProy" size ="30" maxlength="5"/></td></tr>
                    <tr><td>Disciplina </td><td><input type = "text" name ="disciplinaProy" size ="30" maxlength="15"/></td></tr>

                </table>
                <div><br>
                    <h4>Asignar Director del Proyecto </h4>
                </div><br>
                <table>
                    <tr><td>Director Asignado: </td><td><input type ="text" name="tituloProy" value="<?php echo "$registro[idUsuario]" ?>" size ="30" maxlength="300"/></td><td><input type="button" id="btn" value="Buscar"/></td></tr>
                    <br>

                </table><br>
                <input type="submit" value="Guardar"><br><?php echo "$mensaje" ?></br>
            </form>

            <div id="popup" style="display:none;">
                <div class="content-popup">
                    <div class="close"><a href="#" id="close"><img src="imagenes/close.png"/></a></div>
                    <div>
                        <h2>Seleccione Director</h2>
                        <?php
                        include "PopUpDirectorProyecto.php";
                        $consulta = PosiblesDirectores();
                        echo "<table border = 1 id = tabla>";
                        echo "<thead>
                            <tr><th>ID</th><th>Apellido</th><th>Nombre</th><th>Opción</th></tr>
                            </thead>
                            <tbody>";
                        while ($registro = $consulta->fetch()) {
                            echo "<tr><td>$registro[idUsuario]</td><td>"
                            . utf8_encode($registro[Apellido]) . "</td><td>"
                            . utf8_encode($registro[Nombre]) . "</td>";
                            echo "<td><a href=altaProy.php?id=$registro[idUsuario] class=close id =close>Agregar</a></td></tr><br>";
                        }
                        echo "</tbody></table>";
                        ?>
                    </div>
                </div>
            </div>

        </body>

    </html>

