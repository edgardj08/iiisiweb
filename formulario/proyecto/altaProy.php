
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



<h3> Crear Proyecto </h3>
<br>
<form method ="post" action='#'>
    <table>
        <tr><td>Titulo del Proyecto: </td><td><input type ="text" name="tituloProy" size ="30" maxlength="300"/></td></tr>
        <tr><td>Código del Proyecto </td><td><input type ="text" name="codProy" size ="30" maxlength="5"/></td></tr>
        <tr><td>Disciplina </td><td><input type = "text" name ="disciplinaProy" size ="30" maxlength="15"/></td></tr>
        <tr><td><a href="formulario/proyecto/PopUpDirectorProyecto.php"
                   target="v"
                   onclick="window.open('', 'v', 'width=500,height=600');" >
                        Director
                </a></td><td><input type = "text" name ="disciplinaProy" size ="30" maxlength="15"/></td></tr>




    </table>
    <div><br>
        <h4>Asignar Director del Proyecto </h4>
        <?php
        //include "bd/administrador/usuarios/abm.php";
        //PosiblesDirectores();
        ?>
    </div><br>
    <table>
        <tr><td>Director Asignado: </td><td><input type ="text" name="tituloProy" value="<?php echo "$registro[idUsuario]" ?>" size ="30" maxlength="300"/></td></tr>
        <tr><td>Titulo del Proyecto: </td><td><input type ="text" name="tituloProy" size ="30" maxlength="300"/></td></tr>
    </table>

    <input type="submit" value="Guardar"><br><?php echo "$mensaje" ?></br>
</form>






