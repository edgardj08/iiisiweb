<?php include "funciones_formulario.php" ?>
<legend>Búsqueda</legend>
<form> <!--name="frmBusqueda" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"-->
    <p>
        <input type="radio" name="buscar" id="buscar" value="1" onclick="<?php formulario_busqueda($id)?>" cheked="cheked"/> Proyecto  
        <input type="radio" name="buscar" id="buscar" value="2" onclick="<?php formulario_busqueda($id)?>"/> Programa
        <input type="radio" name="buscar" id="buscar" value="3" onclick="<?php formulario_busqueda($id)?>"/> Publicación
        <input type="radio" name="buscar" id="buscar" value="4" onclick="<?php formulario_busqueda($id)?>"/> Usuario
    </p>

    <div id="div_proyecto" style = "display: block;" >
        <label > Título Proyecto </label> <input type="text" name = "titulo"/><br>
        <label > Disciplina </label> <input type="text" name = "disciplina"/><br>
        <label > Palabras Clave </label> <input type="text" name = "clave"/><br>
        <label > Año </label> <input type="text" name = "año"/><br>
    </div>
    <div id = "div_programa" style = "display: none;" >
        <label > Título Programa </label> <input type="text" name = "titulo"/><br>
        <label > Disciplina </label> <input type="text" name = "disciplina"/><br>
        <label > Palabras Clave </label> <input type="text" name = "clave"/><br>
        <label > Año </label> <input type="text" name = "año"/><br>
    </div>
    <div id = "div_publicacion" style = "display: none;" >
        <label > Título Publicación </label> <input type="text" name = "titulo"/><br>
        <label > Año </label> <input type="text" name = "año"/><br>
    </div>
    <div id = "div_usuario" style = "display: none;" >
        <label > Nombre </label> <input type="text" name = "nombre"/><br>
        <label > Apellido </label> <input type="text" name = "apellido"/><br>
    </div>
</form>