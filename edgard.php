<!DOCTYPE html>
<?php
error_reporting(E_ALL ^ E_NOTICE);
include "Login/login.php";
?>

<html>
    <head>
        <title> IIISIWeb - Instituto de Investigación de Informática y Sistemas de Información.</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <style type="text/css">@import url(css/estilos.css);</style>   
    </head>

    <body>
        <div id="contenedor">
            <div id="top"> Instituto de Investigación de Informática y Sistemas de Información.</div> <!-- PARTE SUPERIOR-->
            <?php include "menu.php" ?>
            <div id="contenidos"> <!-- PARTE MEDIA CON EL CONTENIDO SEPARADO EN 3 COLUMNAS-->
                <div class="izquierda"> 
                    <fieldset style="background-color: whitesmoke">
                        <?php include "formulario/form_login.php" ?><br>
                    </fieldset>
                </div>
                <div class="contenido">

                    <?php
                    include "bd/todos/funciones.php";
                    //listarInvestigadores();
                    "<br>";
                    //listarProgramas();
                    "<br>";
                    listarProyectos();
                    "<br>";
                    include "formulario/form_busquedageneral.php";
                   
                    ?>

                    <br>
                </div>
                <div class="derecha">Zona derecha     </div>
            </div>
            <div id="pie">Aquí va el pie de página</div> <!-- PARTE INFERIOR-->
        </div>
    </body>

</html>