<?php include "funciones_formulario.php"?>
<legend>Búsqueda</legend>
<form name="frmBusqueda" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>
        <input type="radio" name="buscar" id="buscar" value="1" onclick="formulario_busqueda(this)"/> Proyecto  
        <input type="radio" name="buscar" id="buscar" value="2" onclick="formulario_busqueda(this)"/> Programa
        <input type="radio" name="buscar" id="buscar" value="3" onclick="formulario_busqueda(this)"/> Publicación
        <input type="radio" name="buscar" id="buscar" value="4" onclick="formulario_busqueda(this)"/> Usuario
    </p>
    <div id="div_proyecto" style="display: none">
        <label>Título </label> <input type="text" name = "titulo"/>
        <label>Disciplina </label> <input type="text" name = "disciplina"/>
        <label>Palabras Clave </label> <input type="text" name = "clave"/>
        <label>Año </label> <input type="text" name = "año"/>
    </div>
    <div id="div_programa" style="display: none">
        <label>Título </label> <input type="text" name = "titulo"/>
        <label>Disciplina </label> <input type="text" name = "disciplina"/>
        <label>Palabras Clave </label> <input type="text" name = "clave"/>
        <label>Año </label> <input type="text" name = "año"/>
    </div>
    <div id="div_publicacion" style="display: none">
        <label>Título </label> <input type="text" name = "titulo"/>
        <label>Año </label> <input type="text" name = "año"/>
    </div>
    <div id="div_usuario" style="display: none">
        
    </div>
        
</form>