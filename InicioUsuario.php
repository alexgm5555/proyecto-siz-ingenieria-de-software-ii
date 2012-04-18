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
					  <img class="left round" src="images/pic02.jpg" width="200" height="180" alt=""  />En esta página podrás encontrar administrar las Sedes de Zoonisis.</div>
					
				<div id="box2" align="center"> 
<div id="Accordion1" class="Accordion" tabindex="0">
					    <div class="AccordionPanel">
					      <div class="AccordionPanelTab">Mascotas perdidas en tu ciudad</div>
					    </div>
					    <div class="AccordionPanel">
					      <table width="60%" height="110" border="0">
					        
				          </table>
                          
					      <p align="center">
				            				              <?php
mysql_connect("localhost","root","");
mysql_select_db("Zoonosis");
$re=mysql_query("select * from animal");

	?><table width="70%" border="1" ><?php
                                    while($f=mysql_fetch_array($re)){
									?>
<tr>
                <th scope="col">
                  <table width="100%" height="120" border="0">
			                        
			                        <tr>
			                          <th width="18%"  align="center"  scope="col"border=""><?php
	echo'<img src="'.$f['Foto'].'"width="70" heigth="90"/>';
?></th>
			                          <th width="8%"  scope="col"border="" >&nbsp;</th>
			                          <th width="37%" align="left" scope="col"> <p>Codigo:
			                            <?php
	echo $f['idAnimal'];
?>
			                            <br />
			                            Nombre:
			                            <?php
	echo $f['Nombre'];
?>
			                            <br />
			                            Sexo:
			                            <?php
	echo $f['Sexo'];
?>
			                          </p></th>
			                          <th width="37%" align="center" scope="col"><a href="EliminarMascota.php">
		                              <input name="Adoptar" type="submit" id="Adoptar" value="Adoptar" />
			                            </a><a href="EliminarMascota.php"> </a></th>
		                            </tr>
			                        
                  </table>
                  <?php
									}
									
									?>
                  </tr>
			              </table>
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