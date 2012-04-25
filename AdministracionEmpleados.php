<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
//error_reporting("E_PARSE");
//Validamos si la sesión ya fue creada:
session_start();
if ( !isset( $_SESSION['usuario'])) {

header ('location:index.php?LoginMesagge=2'); 
}

//Se hace la consulta de las sedes
include ("conexionMySQL.php");
$conexion = Conectarse();
/*
$consulta = "SELECT idSedes, Nombre FROM SEDES";
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());
$numfilas = mysql_num_rows($resultado);
*/

?>
<!--
	Website Name by Adonis Ronquillo for Free Website Templates
	www.freewebsitetemplat.es / www.doni.us
	Images by Image Base http://imagebase.davidniblack.com/
	Released under the Creative Commons Attribution 3.0 License.
-->
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
                    
              <div align="right">Usuario Activo: <?php echo $_SESSION['usuario'];?></div>
</div>
			</div>
			<div id="banner">
				<img src="images/pic01.jpg" width="1120" height="240" alt="" />
			</div>
			<div id="main">
				<div id="content">
				
					<div id="box1">
						<h2>Administración de Empleados</h2>
						<p><img class="left round" src="images/pic02.jpg" width="200" height="180" alt=""  />En esta página podrás administrar los empleados de Zoonosis.</p>
					  <p>&nbsp;</p>
					</div>
			<?php
			/*try {
							
							$mensaje = $_GET['Message']; 
							switch ($mensaje) {								
								case 1:
									echo "<div id='box1'> 
								<table width='auto' border='0'>
  									  <tr>
										<td><img src='images/correcto.png' alt='' width='40' height='38' /></td>
										<td align='center'><font color='green' size='5px'>&nbsp;Sede creada satisfactoriamente</font></td>
									  </tr>
									</table></div>";	
									break;
								case 2:
									echo "<div id='box1'> 
								<table width='auto' border='0'>
  									  <tr>
										<td><img src='images/correcto.png' alt='' width='40' height='38' /></td>
										<td align='center'><font color='green' size='5px'>&nbsp;Sede eliminada satisfactoriamente</font></td>
									  </tr>
									</table></div>";	
									break;	
							}				
							
							}  
						catch (Exception $e)  
						{  
    						echo "Sucedió un error inesperado.".$e->getMessage();
				}			
			
                */
			?>	
					<div id="box2">
						<div id="Accordion1" class="Accordion" tabindex="0">
<div class="AccordionPanel">
<div class="AccordionPanelTab">Registrar un Empleado</div>
                                        <div class="AccordionPanelContent">
                              <div align="center">
                                <p>Por favor diligencie el formulario de registro:</p>
                                <form id="form1" method="post" action="RegistroEmpleadoApp.php">
                                <table width="600" border="0">
                                <tr>
                                  <td>Nombres:</td>
                                  <td><label for="NombresEmpleado"></label>
                                  <input name="NombresEmpleado" type="text" id="NombresEmpleado" size="45px" /></td>
                                </tr>
                                <tr>
                                  <td>Apellidos:</td>
                                  <td><input name="ApellidosEmpleado" type="text" id="ApellidosEmpleado" size="45px" /></td>
                                </tr>
                                    <tr>
                                  <td>Tipo de Empleado:</td>
                                  <td> <?php
                                    $conexion = true;
                                    Conectarse($conexion);
                                    if($conexion){
                                        $consulta = mysql_query("select * from zoonosis.TiposUsuarios where TipoUser!='particular' order by TipoUser ASC");
                                        echo "<select name = 'TipoEmpleado' id = 'TipoEmpleado'>";
                                        while($fila = mysql_fetch_array($consulta)){
                                            echo "<option value='".$fila[1]."'>".utf8_encode($fila[1])."</option>";
                                        }
                                    echo "</select>";
                                    }
                                    ?></td>
                                </tr>
                                <tr>
                                  <td>Documento de Identidad:</td>
                                  <td><input name="DocumentoEmpleado" type="text" id="DocumentoEmpleado" size="45px" /></td>
                                </tr>
                                <tr>
                                  <td>Ciudad:</td>
                                  <td> <?php
                                    $conexion = true;
                                    Conectarse($conexion);
                                    if($conexion){
                                        $consulta = mysql_query("select * from zoonosis.ciudades order by Nombre_Ciudad ASC");
                                        echo "<select name = 'CiudadEmpleado' id = 'CiudadEmpleado'>";
                                        while($fila = mysql_fetch_array($consulta)){
                                            echo "<option value='".$fila[1]."'>".($fila[1])."</option>";
                                        }
                                    echo "</select>";
                                    }
                                    ?></td>
                                </tr>
                                <tr>
                                  <td>E-mail:</td>
                                  <td><input name="emailEmpleado" type="text" id="emailEmpleado" size="45px" /></td>
                                </tr>
                                <tr>
                                  <td>Teléfono:</td>
                                  <td><input name="telefonoEmpleado" type="text" id="telefonoEmpleado" size="45px" /></td>
                                </tr>
                                <tr>
                                  <td>Celular:</td>
                                  <td><input name="CelularEmpleado" type="text" id="CelularEmpleado" size="45px" /></td>
                                </tr>
                                <tr>
                                  <td>Contrato:</td>
                                  <td><input name="ContratoEmpleado" type="text" id="ContratoEmpleado" size="45px" /></td>
                                </tr>
                                <tr>
                                  <td>Sede laboral:</td>
                                  <td> <?php
                                    $conexion = true;
                                    Conectarse($conexion);
                                    if($conexion){
                                        $consulta = mysql_query("select * from zoonosis.Sedes where Nombre!='Particular' order by Nombre ASC");
                                        echo "<select name = 'SedeEmpleado' id = 'SedeEmpleado'>";
                                        while($fila = mysql_fetch_array($consulta)){
                                            echo "<option value='".$fila[1]."'>".utf8_encode($fila[1])."</option>";
                                        }
                                    echo "</select>";
                                    }
                                    ?></td>
                                </tr>
                                <tr>
                                  <td>Inicio de contrato:</td>
                                  <td><input name="InicioEmpleado" type="text" id="InicioEmpleado" value="YYYY-MM-DD" size="45px" /></td>
                                </tr>
                                    <tr>
                                  <td>Sueldo Devengado:</td>
                                  <td><input name="DevengadoEmpleado" type="text" id="DevengadoEmpleado" size="45px" /></td>
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
                                    <input type="submit" name="login" value="Registrar Empleado" class="inputButton" />
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
  <div align="left">Modificar datos de un empleado</div>
</div>
                            <div class="AccordionPanelContent">
                              <p align="center">Por favor ingrese el numero de documento del empleado que desea modificar:</p>
                              <form id="form2" method="post" action="ModificarSede.php">
                                <p align="center">
                                  <label for="select"></label>
                                  Usuario a Modificar:
                                  <tr>
                                  <div class="AccordionPanelContent">
                              <div align="center">
                                <p>Por favor diligencie el formularios de registro:</p>
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
                                  <td> <?php
                                    $conexion = true;
                                    Conectarse($conexion);
                                    if($conexion){
                                        $consulta = mysql_query("select * from zoonosis.ciudades order by Nombre_Ciudad ASC");
                                        echo "<select name = 'CiudadUsuario' id = 'CiudadUsuario'>";
                                        while($fila = mysql_fetch_array($consulta)){
                                            echo "<option value='".$fila[1]."'>".utf8_encode($fila[1])."</option>";
                                        }
                                    echo "</select>";
                                    }
                                    ?></td>
                                </tr>
                                <tr>
                                  <td>E-mail:</td>
                                  <td><input name="emailUsuario" type="text" id="emailUsuario" size="45px" /></td>
                                </tr>
                                
                                <tr>
                                  <td>Confirmar Contraseña:</td>
                                  <td><input name="confPassword" type="password" id="confPassword" size="45px" /></td>
                                </tr>
                                <tr>
                                  <td colspan="2" ><div align="center">
                                    <input type="submit" name="login" value="Modificar Empleado" class="inputButton" />
                                  </div></td>
                                  </tr>                                  
                              </table>
                                
                                </form>
                                <p>&nbsp;</p>
                                
                              </div>
</div>
                                </p>
                                <p align="center">&nbsp;</p>
                              </form>
<p>&nbsp;</p>
</div>
                          </div>
                          <div class="AccordionPanel">
                            <div class="AccordionPanelTab">Eliminar un empleado</div>
                            <div class="AccordionPanelContent">
                              <p align="center">Por favor busque el empleado que desea eliminar:</p>
                              <form id="form3" method="post" action="EliminarEmpleado.php">
                                <p align="center">
                                  <label for="select"></label>
                                  <input name="EmpleadoparaEliminar" type="text" id="EmpleadoparaEliminar" size="45px" />
                                </p>
                                <div align="center">
                                  <table width="100" border="0">
                                    <tr>
                                      <td><input type="submit" name="login3" value="Eliminar Empleado" class="inputButton" /></td>
                                    </tr>
                                  </table>
                                </div>
                                <p align="center">&nbsp;</p>
                              </form>
                              <p></p>
                            </div>
                          </div>
					  </div>
					</div>
					
					<br class="clear" />
				</div>
				<div id="sidebar">
					<h3>
                    
                  </h3>
					<div class="form">
					  <p><?php echo $_SESSION['usuario'];?>, puedes realizar las siguientes actividades</p>
                      <ol>
                        <li>Módulo</li>
                        <li>Módulo</li>
                        <li>Módulo</li>
                        <li>Módulo</li>
                        <li>Módulo</li>
                        <li>Administracion de Usuarios</li>
                        <li>Administración de Sedes</li>
                        <li><a href="Estadisticas.php">Estadísticas</a></li>
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
			<br />Diseñado y Provisto por Zoonisis Team
			<br />© 2012.</div>
    <script type="text/javascript">
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
        </script>
</body>
</html>