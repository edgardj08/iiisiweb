<legend>Logueado</legend>
<form name="frmLogin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div>
        <div> <label>Usuario: </label><?php echo $sesion->get("usuario"); ?></div>
        <div><input type="submit" name ="cerrar" value="Cerrar Sesión"/></div>
    </div>
</form>