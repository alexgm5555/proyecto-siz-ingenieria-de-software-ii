<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
//error_reporting("E_PARSE");
//Validamos si la sesión ya fue creada:
session_start();
if ( !isset( $_SESSION['usuario'])) {

header ('location:index.php?LoginMesagge=2'); 
}

//Se hace la consulta de las solicitudes
include ("conexionMySQL.php");
$conexion = Conectarse();
$consulta = "SELECT * FROM Solicitud_Adopcion";
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());
$numfilas = mysql_num_rows($resultado);

?>

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
						<h2>Aprobar / Rechazar Solicitud de Adopción</h2>
						<p><img class="left round" src="images/pic02.jpg" width="200" height="180" alt=""  />En esta página podrás Aprobar o Rechazar solicitudes de Adopción realizadas a Zoonosis.</p>
						<p>&nbsp;</p>
					</div><div id="box2">
						<div align="center">
						  <table width="600" border="0">
						    <tr>
						      <td><div align="center">Solicitud</div></td>
						      <td><div align="center">Dueño del Animal</div></td>
						      <td><div align="center">Decisión</div></td>
					        </tr>
						    <tr>
						      <?php //Se recorre la consulta y se genera el formulario dinámicamente. Cada fila será un formulario y cuando se haga clic en guardar se guardará la solicitud correspondiente.
						if ($numfilas > 0) {  
         							while ($rowEmp = mysql_fetch_assoc($resultado)) {           								 
						echo "	
                            <form action='AproRechSolAdopApp.php' method='post'><td>".$rowEmp['idSolicitud_Adopcion']."</td>
						      <td>".$rowEmp['Dueño_Animal']."</td>
						      <td><table width='200' border='0'>
						        <tr>
						          <td><label>
						            <input type='radio' name='RadioGroup1' value='opción' id='RadioGroup1_0' />
						            Aceptar</label></td>
					            </tr>
						        <tr>
						          <td><label>
						            <input type='radio' name='RadioGroup1' value='opción' id='RadioGroup1_1' />
						            Rechazar</label></td>
					            </tr>
					          </table></td></form>";
									}}
						 ?>	  
					        </tr>
						    <tr>
						      <td>006266</td>
						      <td>Quiero adoptar al perrito de Duván</td>
						      <td><table width="200">
						        <tr>
						          <td><label>
						            <input type="radio" name="RadioGroup2" value="opción" id="RadioGroup1_2" />
						            Aceptar</label></td>
					            </tr>
						        <tr>
						          <td><label>
						            <input type="radio" name="RadioGroup2" value="opción" id="RadioGroup1_3" />
						            Rechazar</label></td>
					            </tr>
					          </table></td>
					        </tr>
						    <tr>
						      <td>006267</td>
						      <td>Quiero adoptar al gatico de Jeisson</td>
						      <td><table width="200">
						        <tr>
						          <td><label>
						            <input type="radio" name="RadioGroup3" value="opción" id="RadioGroup1_4" />
						            Aceptar</label></td>
					            </tr>
						        <tr>
						          <td><label>
						            <input type="radio" name="RadioGroup3" value="opción" id="RadioGroup1_5" />
						            Rechazar</label></td>
					            </tr>
					          </table></td>
					        </tr>
						    <tr>
						      <td colspan="3"><div align="center">
						        <table width="100" border="0">
						          <tr>
						            <td><input type="submit" name="login3" value="Guardar" class="inputButton" /></td>
					              </tr>
					            </table>
					          </div></td>
					        </tr>
					      </table>
					  </div>
						<h2><br class="clear" />
				</h2>
					</div>
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
                        <li>Módulo</li>
                        <li><a href="AdministracionSedes.php">Administración de Sedes</a></li>
                        <li><a href="Estadisticas.php">Estadísticas</a></li>
                      </ol>
                  </div>
				  <h3>Enlaces de Interés</h3>
					<ul class="linkedList">
						<li class="first">
							<a href="http://www.bogota.gov.co/mad/info_sitio.php?id_sitio=14790">Zoonosis - Ficha Tecnica</a>
						</li>
						<li>
							<a href="http://www.saludcapital.gov.co/Paginas/AdopcionCanina.aspx/">Centro de Zoonosis</a>
						</li>
						<li>
							<a href="http://www.sirab.co/">SIRAB</a>
						</li>
					</ul>
				  <p>&nbsp;</p>
            </div>
				<br class="clear" />
			</div>
		</div>
		<div style="margin: 1em 0 3em 0; text-align: center;">
        Este Sitio Web es desarrollado por estudiantes de la Universidad Nacional de Colombia
			<br />Diseñado y Provisto por Zoonosis Team
			<br />© 2012.</div>
</body>
</html>