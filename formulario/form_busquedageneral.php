<!-- 
Muestra un RADIO BUTTON donde se elige que es lo que se desea buscar.
Se habilitara un formulario con campos adecuados para completar, segun
la seleccion del usuario.
-->

<?php include "funciones_formulario.php" ?>
<legend>Búsqueda</legend>
<form name="frmBusqueda" action="edgard.php" method="post">
    <p>
        <input type="radio" name="buscar" id="proyecto" value="1" onclick="formulario_busqueda();"/> Proyecto  
        <input type="radio" name="buscar" id="programa" value="2" onclick="formulario_busqueda();"/> Programa
        <input type="radio" name="buscar" id="publicacion" value="3" onclick="formulario_busqueda();"/> Publicación
        <input type="radio" name="buscar" id="usuario" value="4" onclick="formulario_busqueda();"/> Usuario
        <input type = "submit" value ="Buscar"/>
    </p>

    <div id="div_proyecto" style = "display: none;" >
        <table>
            <tr><td>Título Proyecto</td><td> <input type="text" name = "titulo"/><br></td>  </tr>
            <tr><td>Disciplina</td><td> <input type="text" name = "disciplina"/><br></td>  </tr>
            <tr><td>Palabras Clave</td><td> <input type="text" name = "clave"/><br></td>  </tr>
            <tr><td>Año</td><td> <input type="text" name = "año"/><br></td>  </tr>
            <?php buscarProyecto($_POST[titulo], $_POST[disciplina], $_POST[clave],$_POST[año])?>
        </table>

    </div>
    <div id = "div_programa" style = "display: none;" >
        <table>
            <tr><td>Título Programa</td><td> <input type="text" name = "titulo"/><br></td>  </tr>
            <tr><td>Disciplina</td><td> <input type="text" name = "disciplina"/><br></td>  </tr>
            <tr><td>Palabras Clave</td><td> <input type="text" name = "clave"/><br></td>  </tr>
            <tr><td>Año</td><td> <input type="text" name = "año"/><br></td>  </tr>
        </table>
    </div>
    <div id = "div_publicacion" style = "display: none;" >
        <table>
            <tr><td>Título Publicación</td><td> <input type="text" name = "titulo"/><br></td>  </tr>
            <tr><td>Año</td><td> <input type="text" name = "año"/><br></td>  </tr>
        </table>
    </div>
    <div id = "div_usuario" style = "display: none;" >
        <table>
            <tr><td>Nombre</td><td> <input type="text" name = "nombre"/><br></td>  </tr>
            <tr><td>Apellido</td><td> <input type="text" name = "apellido"/><br></td>  </tr>
        </table>
    </div>
</form>