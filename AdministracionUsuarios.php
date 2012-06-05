<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
//error_reporting("E_PARSE");
//Validamos si la sesión ya fue creada:
    session_start();
    if ( !isset( $_SESSION['usuario'])) {
        header ('location:index.php?LoginMesagge=2'); 
    }
    include ("conexionMySQL.php");
    $conexion = Conectarse();

    $_SESSION['url'] = $_SERVER['REQUEST_URI'];

?>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Zoonosis</title>
		<link href="http://fonts.googleapis.com/css?family=Cabin" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
                <script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
                <link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
        </head>
    
	<body>
		<div id="outer">
			<div id="header">
				<div id="logo">
					<h1> Zoonosis</h1>
				</div>
                                        <div id="nav">
			  		
                                            <ul>
						<li class="first active"><a href="index.php">Inicio</a></li>			
						<li><a href="#">Acerca de</a></li>
                                                <li class="last"><a href="#">Contacto</a></li>
						<li class="last"><a href="Logout.php">Cerrar Sesión</a></li>							
                                            </ul>
                    
                                                <div class="usuario">Usuario Activo: <?php echo $_SESSION['usuario'];?></div>
                                        
                                        </div>
			</div>
			
                                <div id="banner">
                                    <img src="images/pic01.jpg" width="1120" height="240" alt="" />
                                </div>
                    
                                    <div id="main">
                                            <div id="content">

                                                    <div id="box1">
                                                            <h2>Administración de Usuarios</h2>
                                                            <p><img class="left round" src="images/pic02.jpg" width="200" height="180" alt=""  />En esta página podrás administrar los usuarios de Zoonosis.</p>
                                                            <p>&nbsp;</p>
                                                    </div>
			<!--<?php/*
			try {
							
							$mensaje = $_GET['Message']; 
							switch ($mensaje) {								
								case 1:
									echo "<div id='box1'> 
								<table width='auto' border='0'>
  									  <tr>
										<td><img src='images/correcto.png' alt='' width='40' height='38' /></td>
										<td align='center'><font color='green' size='5px'>&nbsp;Usuario creado satisfactoriamente</font></td>
									  </tr>
									</table></div>";	
									break;
								case 2:
									echo "<div id='box1'> 
								<table width='auto' border='0'>
  									  <tr>
										<td><img src='images/correcto.png' alt='' width='40' height='38' /></td>
										<td align='center'><font color='green' size='5px'>&nbsp;Usuario eliminado satisfactoriamente</font></td>
									  </tr>
									</table></div>";	
									break;	
							}				
							
							}  
						catch (Exception $e)  
						{  
    						echo "Sucedió un error inesperado.".$e->getMessage();
				}	*/	
			?>	-->
					<div id="box2">
                                            <div id="Accordion1" class="Accordion" tabindex="0">
                                                <div class="AccordionPanel">
                                                    <div class="AccordionPanelTab">Registrar un Usuario</div>
                                                        <div class="AccordionPanelContent">
                                                            <div align="center">
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
                                                                        <td colspan="2" ><div align="center">
                                                                        <input type="submit" name="login" value="Registrar Usuario" class="inputButton" />
                                                                        </div></td>
                                                                    </tr>                                  
                                                            </table>
                                                        </form>
                                                            <p>&nbsp;</p>
                                
                                                    </div>
                                                </div>
                                            </div>
                                                
                                            <div class="AccordionPanel">
                                                <div class="AccordionPanelTab">
                                                    <div align="left">Configuración de usuario</div>
                                                </div>
                                                    <div class="AccordionPanelContent">
                                                        <iframe src="BusquedaUsuario.php" frameborder="0" width="100%" height="200">
                                                        </iframe>                             
                                                    </div>
                                            </div>
                                          </div>
                                        </div>
					
					<br class="clear" />
				
                                    </div>
                                        <div id="sidebar">
					<h3></h3>
					<div class="form">
                                            <p><?php echo $_SESSION['usuario'];?>, puedes realizar las siguientes actividades</p>
                                            <ol>
                                                <li><a href='AdministracionUsuarios.php'>Administracion de Usuarios</a></li>
                                                <li><a href='#'>Administración de Animales</a></li>
                                                <li><a href='AdministracionEmpleados.php'>Administración de Empleados</a></li>
                                                <li><a href='AdministracionSedes.php'>Administración de Sedes</a></li>
                                                <li><a href='Estadisticas.php'>Estadísticas</a></li>
                                            </ol>
                                        </div>
                                        <h3>Enlaces de Interés</h3>
					<ul class="linkedList">
						<li class="first">
							<a href="http://www.freewebtemplates.com/free-templates/">Templates Gratis</a>
						</li>
						<li>
							<a href="http://www.google.com.co">Google</a>
						</li>
						<li>
							<a href="http://docs.google.com">Google Docs</a>
						</li>
					</ul>
				  <p>&nbsp;</p>
                                </div>
				<br class="clear" />
			</div>
		</div>
            
		<div style="margin: 1em 0 3em 0; text-align: center;">
        Este Sitio Web es desarrollado en la Universidad Nacional de Colombia
			<br />Diseñado y Provisto por Zoonosis Team
			<br />© 2012.</div>
    
                <script type="text/javascript">
                    var Accordion1 = new Spry.Widget.Accordion("Accordion1");
                </script>
        </body>
</html>