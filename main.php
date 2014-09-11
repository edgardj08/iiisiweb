<?php
require_once("login/sesion.class.php");

$sesion = new sesion();
$usuario = $sesion->get("usuario");

if ($usuario == false) {
    header("Location: login.php");
} else {
    ?>
    <HTML>
        <head>
            <title> IIISIWeb - Instituto de Investigación de Informática y Sistemas de Información.</title>
            <meta http-equiv="content-type" content="text/html; charset=utf-8">
            <style type="text/css">@import url(css/estilos.css);</style>   
        </head>

        <body>
            <div id="contenedor">
            <div id="top"> 
                <div class="portada">
                    Instituto de Investigación de Informática y Sistemas de Información.
                </div>
                <div class="top-login" >
                    <fieldset style="background-color: whitesmoke" >
                        <?php include "formulario/form_logueado.php" ?><br>
                    </fieldset>
                </div>
            </div> <!-- PARTE SUPERIOR-->
            <?php include "menu.php" ?>
            <div id="contenidos"> <!-- PARTE MEDIA CON EL CONTENIDO SEPARADO EN 3 COLUMNAS-->
                <div class="izquierda"> 
                    zonq izquierda
                </div>
                <div class="contenido">Zona contenidos
                    <?php
                    ?>

                    <br>
                </div>
                <div class="derecha">Zona derecha     </div>
            </div>
            <div id="pie">Aquí va el pie de página</div> <!-- PARTE INFERIOR-->
        </div>
        </body>



    </HTML>

    <?php
}
?>