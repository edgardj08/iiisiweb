<?php
if (!$_POST) {
    echo "POST";
    include "bd/administrador/proyectos/abm.php";
    //$registro = crearProyecto($_POST[tituloProy], $_POST[codProy], $_POST[disciplinaProy]);
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
        <script type="text/javascript" src="js/jquery.js"></script>
        <script language="javascript">
            $(document).ready(function() {
                $('a[rel=Pop-up]').click(function() {
                    var caracteristicas = "height=400,width=500,scrollTo,resizable=1,scrollbars=1,location=0";
                    nueva = window.open(this.href, 'popup', caracteristicas);
                    return false;
                });
            });

            function enviar() {
                nombre = document.popup.texto1.value;
                b = document.formulario.texto2.value;
                document.formulario.suma.value = a + b;
                document.formulario.submit();
            }
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
            <table id="asignado">
                <tr><td>Nombre Director: </td><td><input type ="text" name="nombreDir" value="" size ="30" maxlength="30"/></td></tr>
                <tr><td>Apellido Director: </td><td><input type ="text" name="apellidoDir" value="" size ="30" maxlength="30"/></td></tr>
                <td><a href="formulario/proyecto/PopUpDirectorProyecto.php" rel="pop-up">Buscar Director</a>
                <td><input type="button" id="btn" value="Buscar"></td>

                <br>

            </table><br>
            <input type="submit" value="Guardar"><br></br>
        </form>

        <div id="popup" style="display:none;">
            <div class="content-popup">
                <div class="close"><a href="#" id="close"><img src="imagenes/close.png"/></a></div>
                <div>
                    <h2>Seleccione Director</h2>
                    <?php
                    include "PopUpDirectorProyecto.php";
                    ?>
                </div>
            </div>
        </div>

    </body>

</html>

