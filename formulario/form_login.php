<legend>Registro</legend>
<form name="frmLogin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div>
        <div> <label>Usuario: </label> <input type="text" name = "usuario"/></div>
        <div> <label>Contraseña: </label> <input type="password" name = "pass" /></div>
        <div><input type="submit" name ="iniciar" value="Iniciar Sesion"/></div>
    </div>
</form>