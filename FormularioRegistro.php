<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
error_reporting("E_PARSE");
?>
<?php include ("conexionMySQL.php")?>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Zoonosis</title>
		<link href="http://fonts.googleapis.com/css?family=Cabin" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div id="outer">
			<div id="header">
				<div id="logo">
					<h1> Zoonosis</h1>
				</div>
                <div id="nav">
                    <ul>
			<li>
                            <a href="index.php">Inicio</a>
                        </li>
                        <li  class="first active">
                            <a href="FormularioRegistro.php">Registro</a>
                        </li>
			<li>
                            <a href="#">Acerca de</a>
			</li>
			<li class="last">
                            <a href="#">Contacto</a>
			</li>
                        </ul>
                        <br class="clear" />
				</div>
			</div>
			<div id="banner">
				<img src="images/pic01.jpg" width="1120" height="240" alt="" />
			</div>
			<div id="main">
                            <div id="content">
				<div id="box2">
                                    <div>
                                        <p>Por favor diligencie el formulario de registro:</p>
                                        <form id="form1" method="post" action="ResolverFormulario.php">
                                        <table width="600" border="0">
                                        <tr>
                                            <td>Nombres:</td>
                                            <td><label for="NombresUsuario"></label>
                                            <input name="NombresUsuario" type="text" id="NombresUsuario" size="45px" /></td>
                                        </tr>
                                        <tr>
                                            <td>Apellidos:</td>
                                            <td><input name="ApellidosUsuario" type="text" id="ApellidosUsuario" size="45px" /></td>
                                        </tr>
                                        <tr>
                                            <td>Documento de Identidad:</td>
                                            <td><input name="DocumentoUsuario" type="text" id="DocumentoUsuario" size="45px" /></td>
                                        </tr>
                                        <tr>
                                            <td>Ciudad:</td>
                                            <td> 
                                                <?php 

                                                /*Este bloque PHP mostrara un menu desplegable de ciudades valiendose de los registros 
                                                * de la tabla Ciudades de la Base de Datos.
                                                */

                                                $conexion = true;
                                                Conectarse($conexion);
                                                if($conexion){
                                                    $consulta = mysql_query("select * from zoonosis.ciudades order by Nombre_Ciudad ASC");
                                                    echo "<select name = 'CiudadUsuario' id = 'CiudadUsuario'>";
                                                    while($fila = mysql_fetch_array($consulta)){
                                                        echo "<option value='".$fila[1]."'>".($fila[1])."</option>";
                                                    }
                                                echo "</select>";
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>E-mail:</td>
                                            <td><input name="emailUsuario" type="text" id="emailUsuario" size="45px" /></td>
                                        </tr>
                                        <tr>
                                            <td>Teléfono:</td>
                                            <td><input name="telefonoUsuario" type="text" id="telefonoUsuario" size="45px" /></td>
                                        </tr>
                                        <tr>
                                            <td>Celular:</td>
                                            <td><input name="CelularUsuario" type="text" id="CelularUsuario" size="45px" /></td>
                                        </tr>
                                        <tr>
                                            <td>Nombre de Usuario:</td>
                                            <td><input name="UserName" type="text" id="UserName" size="45px" /></td>
                                        </tr>
                                        <tr>
                                            <td>Contraseña:</td>
                                            <td><input name="Password" type="password" id="Password" size="45px" /></td>
                                        </tr>
                                        <tr>
                                            <td>Confirmar Contraseña:</td>
                                            <td><input name="confPassword" type="password" id="confPassword" size="45px" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" >
                                            <input type="submit" name="login" value="Registrar Usuario" class="inputButton" />
                                            </td>
                                        </tr>                                  
                                        </table>
                                        </form>
                                        <p>&nbsp;</p>

                                    </div>
                                    <br class="clear" />
                                        
				</div>
                                <br class="clear" />
                                
                          </div>
                            
                    </div>
                    
              </div>
                    
		<div style="margin: 40em 0 3em 0; text-align: center;">
        Este Sitio Web es desarrollado en la Universidad Nacional de Colombia
			<br />Diseñado y Provisto por Zoonisis Team
			<br />© 2012.</div>
</body>
</html>