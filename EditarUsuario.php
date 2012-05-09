<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Editar Usuario</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <div class="form">
             <form action="loginApp.php" method="post" id="formularioregistro">
                <p>
                    <label for="usuario" class="login">Usuario</label> 
                    <input type="text" name="usuario" id="usuario" value="Usuario" class="inputBox" />
		</p>
                <p>
                    <label for="contrasena" class="login">Contraseña</label> 
                    <input type="password" name="contrasena" id="contrasena" value="password" class="inputBox" />
		</p>
    
                    <span><input type="checkbox" name="remember" /> 
                    &nbsp;Recordarme</span> 
							
                <input type="submit" name="login" value="Login" class="inputButton" /></form>
              
        </div>
    </body>
</html>