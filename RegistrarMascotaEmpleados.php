<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
error_reporting("E_PARSE");
?>
<?php
//error_reporting("E_PARSE");
//Validamos si la sesión ya fue creada:


isset( $_SESSION['usuario']); 
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
//Permite continuar en la página

include ("conexionMySQL.php");
$conexion = Conectarse();
$re=mysql_query("select * from animal");
$consulta = "SELECT idUsuarioParticulares, Ciudad FROM usuarios";
#Seleccionar las ciudades en la bd
$consulta2 = "SELECT * FROM ciudades order by Nombre_Ciudad ASC";
#Seleccionar los tipos de animal  en la bd
$consulta3 = "SELECT * FROM tipos_animal order by tipo ASC";
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());
#para consultar las diferentes ciudades
$resultado2 = mysql_query($consulta2, $conexion) or die(mysql_error());
#para consultar las diferentes ciudades
$resultado3 = mysql_query($consulta3, $conexion) or die(mysql_error());
$numfilas = mysql_num_rows($resultado);

try {
							$bandera=0;  
							$mensaje = $_GET['Message']; 
							switch ($mensaje) {
								case 0:
									echo "";
									break;
								
								
								case 3:
								if($Tipo=='Todos'){
    $Tipo='';
    echo "tipo:   ",$Tipo,"si es aqui";}
if($Sexo=='Todos'){
    $Sexo='';
    echo "sexo:   ",$Sexo,"si es aqui";}
if($Ciudad=='Todos'){
    $Ciudad='';
    echo "Ciudad:   ",$Ciudad,"si es aqui";}	
								#$Sexo=$_GET['sexo'];
								$Tipo=$_GET['Tipo'];
									$re=mysql_query("select * from animal Where TipoAnimal='$Tipo' ");
									break;
							}				
							
							}  
						catch (Exception $e)  
						{  
    						echo "Sucedió un error PHP.";
						}

?>
<!--
	Website Name by Adonis Ronquillo for Free Website Templates
	www.freewebsitetemplat.es / www.doni.us
	Images by Image Base http://imagebase.davidniblack.com/
	Released under the Creative Commons Attribution 3.0 License.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
-->
.contenedor{
	height: 280px;
	width: 500px;
	overflow: scroll;
	visibility: visible;
	}
#outer #main #content #miiframe {
	margin: auto;
	height: 480px;
	width: 640px;
	border: 1px solid #0F0;
	position: relative;
}
-->
</style>
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Zoonisis</title>
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
						<h2>Pagina de Inicio</h2>
					  <img class="left round" src="images/pic02.jpg" width="200" height="180" alt=""  />En esta página podrás registrar hasta 30 animales.</div>
					
      <p>
                 <?php		
						try {
							$bandera=0;  
							$mensaje = $_GET['Message']; 
							switch ($mensaje) {
								case 0:
									echo "";
									break;
								
								
								case 1:	
									echo "
									<table width='auto' border='0'>
  									  <tr>
										<td><img src='images/correcto.png' alt='' width='40' height='38' /></td>
										<td align='center'><font color='green' size='5px'>Tu solicitud ha sido enviada correctamente.</font></td>
									  </tr>
									</table>";
									break;
									case 2:
									echo " 
								<table width='auto' border='0'>
  									  <tr>
										<td><img src='images/Advertencia.png' alt='' width='40' height='38' /></td>
										<td align='center'><font color='red' size='5px'>Acceso Restringido. Por favor inicia sesión.</font></td>
									  </tr>
									</table>";
									break;
							}				
							
							}  
						catch (Exception $e)  
						{  
    						echo "Sucedió un error PHP.";
						}
	  
	  
	  ?>
                
                &nbsp;</p>
			    
<div id="box2" align="center"> 
<div id="Accordion1" class="Accordion" tabindex="0">
					    <div class="AccordionPanel">
					      <div class="AccordionPanelTab">Registrar Mascotas </div><iframe name="ikm" src="RegistrarMascotaEmpleado.php" frameborder="0" scrolling="yes"   width="740" height="700" > </iframe>
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
                        
                      <li><a href="ClasificadorRoles.php">Pagina Inicio</a></li>
                      <li><a href="RegistrarMascota.php">Registrar Mascotas</a></li>
                      <li><a href="BuscarMascota.php">Buscar Mascotas</a></li>
                      <li><a href="MascotasRegistradas.php">Administrar Animales Registrados</a></li>
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
