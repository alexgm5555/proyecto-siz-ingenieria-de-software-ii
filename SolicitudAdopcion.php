<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
//error_reporting("E_PARSE");
//Validamos si la sesión ya fue creada:
session_start();
if ( isset( $_SESSION['usuario'])) {

//Permite continuar en la página
}
else{	
	header ('location:index.php?LoginMesagge=2'); 
	} 
include ("conexionMySQL.php");
$conexion = Conectarse();
$idAnimal=$_GET['idAnimal'];
$usuario=$_SESSION['usuari'];
$re=mysql_query("select * from animal WHERE idAnimal='".$idAnimal."'");
$f=mysql_fetch_array($re);
$ret=mysql_query("select * from usuario WHERE idAnimal='".$usuario."'");
$datosUsuario=mysql_fetch_array($ret);
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
						<table width="100%" height="244" cellpadding="1" cellspacing="0">
						  <tr>
						    <th width="37%" scope="col"><table width="86%" height="190" border="0" >
						      <tr>
						        <th width="28%" scope="col">&nbsp;</th>
						        <th width="72%" scope="col"> <h5 align="left" class="AccordionPanelTab">Nombre : <?php echo $datosUsuario['TipoAnimal'];?></h5>
						          <h5 align="left" class="AccordionPanelTab">Apellido: <?php echo $datosUsuario['Sexo'];?></h5>
						          <h5 align="left" class="AccordionPanelTab">Ciudad: <?php echo $datosUsuario['Color'];?></h5>
						          <h5 align="left" class="AccordionPanelTab">Email: <?php echo $datosUsuario['Edad'];?></h5>
						          <h5 align="left" class="AccordionPanelTab">Telefono Fijo:<?php echo $datosUsuario['Peso'];?></h5>
						          <h5 align="left" class="login">&nbsp;</h5></th>
					          </tr>
					        </table></th>
						    <th width="27%" scope="col"> <h6 align="center"><span class="sectionList"><?php echo $f['Nombre'];?></span></h6>
						      <h6 align="center">
						        <?php
          
						#codigo para imprimir la foto
						echo'<img src="'.$f['Foto'].'"width="220" heigth="220"/>';
			 			 ?>
					          </h6>
						      <h6 align="center"><span class="sectionList">Codigo: <?php echo $f['idAnimal'];?></span></h6>
						      <h5 align="center">&nbsp;</h5>
					        </th>
						    <th width="36%" scope="col"> <table width="72%" height="190" border="0" >
						      <tr>
						        <th width="18%" scope="col">&nbsp;</th>
						        <th width="82%" scope="col"> <h5 align="left" class="login">Tipo de Animal: <?php echo $f['TipoAnimal'];?></h5>
						          <h5 align="left">Sexo: <?php echo $f['Sexo'];?></h5>
						          <h5 align="left">Color: <?php echo $f['Color'];?></h5>
						          <h5 align="left">Edad: <?php echo $f['Edad'];?></h5>
						          <h5 align="left">Peso:<?php echo $f['Peso'];?></h5>
						          <h5 align="left" class="login">&nbsp;</h5></th>
					          </tr>
						      </table>
					        </th>
					      </tr>
					  </table>
						<table width="100%" border="1" cellspacing="0" cellpadding="0">
						  <tr>
						    <th width="19%" scope="col"><div align="left"></div></th>
						    <th width="30%" scope="col"><div align="left">
						      <h5>Telefono Celular:<?php echo $f['Peso'];?></h5>
						    </div></th>
						    <th width="51%" scope="col">&nbsp;</th>
					      </tr>
					  </table>
<p>&nbsp;</p>
                    </div>
					<div id="box2" align="center"> 
<div id="Accordion1" class="Accordion" tabindex="0">
					    <div class="AccordionPanel">
					      <div class="AccordionPanelTab">Solicitud de Adopción</div>
					    </div>
					    <div class="AccordionPanel">
					      <table width="60%" height="110" border="0">
					        
				          </table>
                          
					      <p align="center">
				            				              
					      <form id="form1" method="post" action="">
                          
                          
				          </form>
                          
					      </form>
				            </form>
				          <p></p>
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
                        <li>Registrar Mascotas</li>
                        <li>Buscar Mascotas</li>
                        <li>Administrar Animales Registrados</li>
                        <li>Consultar Adopciones</li>
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