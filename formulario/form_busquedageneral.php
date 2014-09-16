<!-- 
Muestra un RADIO BUTTON donde se elige que es lo que se desea buscar.
-->
<legend>Búsqueda</legend>
<form name="frmBusqueda" method="post" action="#">
    <p>
        <input type="radio" name="criterio" id="proyecto" value="1" checked="true"/> Proyecto  
        <input type="radio" name="criterio" id="programa" value="2"/> Programa
        <input type="radio" name="criterio" id="publicacion" value="3" /> Publicación
        <input type="radio" name="criterio" id="usuario" value="4" /> Usuario
        <br><input type="text" name="abuscar" placeholder="Ingrese palabra a buscar..." />
        <input type = "submit" value ="Buscar" name = "boton"/>
    </p>
</form>
<?php
include "bd/todos/funciones.php";
if ($_POST[abuscar]) {
    switch ($_POST[criterio]) {
        case "1":
            buscarProyecto($_POST[abuscar]);
            break;
        case "2":
            buscarPrograma($_POST[abuscar]);
            break;

        case "3";
            buscarPublicacion($_POST[abuscar]);
            break;

        case "4";
            buscarUsuario($_POST[abuscar]);
            break;
        default :
            break;
    }
}
?>