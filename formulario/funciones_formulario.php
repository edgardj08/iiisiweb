<?php

function formulario_busqueda($elemento) {

    switch ($elemento . value) {
        case 1:
            document . getElementById("div_proyecto") . style . display("block");
            document . getElementById("div_programa") . style . display("none");
            document . getElementById("div_publicacion") . style . display("none");
            document . getElementById("div_usuario") . style . display("none");
            break;

        case 2:
            document . getElementById("div_proyecto") . style . display("none");
            document . getElementById("div_programa") . style . display("block");
            document . getElementById("div_publicacion") . style . display("none");
            document . getElementById("div_usuario") . style . display("none");
            break;

        case 3:
            document . getElementById("div_proyecto") . style . display("none");
            document . getElementById("div_programa") . style . display("none");
            document . getElementById("div_publicacion") . style . display("block");
            document . getElementById("div_usuario") . style . display("none");
            break;

        case 4:
            document . getElementById("div_proyecto") . style . display("none");
            document . getElementById("div_programa") . style . display("none");
            document . getElementById("div_publicacion") . style . display("none");
            document . getElementById("div_usuario") . style . display("block");
            break;
        default:
            break;
    }
}

?>