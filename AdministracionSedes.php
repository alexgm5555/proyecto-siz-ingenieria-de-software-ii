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
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Zoonisis</title>
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
						<h2>Administración de Sedes</h2>
						<img class="left round" src="images/pic02.jpg" width="200" height="180" alt=""  />En esta página podrás encontrar administrar las Sedes de Zoonisis.</div>
					
					<div id="box2">
						<div id="Accordion1" class="Accordion" tabindex="0">
<div class="AccordionPanel">
<div class="AccordionPanelTab">Crear una Sede</div>
                            <div class="AccordionPanelContent">
                              <div align="center">
                                <p>Por favor ingrese la información de la Nueva Sede:</p>
                                <form id="form1" method="post" action="">
                                <table width="600" border="0">
                                <tr>
                                  <td>Nombre de la Nueva Sede:</td>
                                  <td><label for="textfield"></label>
                                  <input name="textfield" type="text" id="textfield" size="45px" /></td>
                                </tr>
                                <tr>
                                  <td>Descripción de la Nueva Sede</td>
                                  <td><textarea name="textfield2" id="textfield2"></textarea></td>
                                </tr>
                                <tr>
                                  <td colspan="2" ><div align="center">
                                    <input type="submit" name="login" value="Crear Sede" class="inputButton" />
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
  <div align="left">Modificar una Sede</div>
</div>
                            <div class="AccordionPanelContent">
                              <p align="center">Por favor seleccione la sede que desea modificar:</p>
                              <form id="form2" method="post" action="">
                                <p align="center">
                                  <label for="select"></label>
                                  Sede a Modificar:
                                  <select name="select" id="select">
                                    <option>Sede 1</option>
                                    <option>Sede 2</option>
                                    <option>Sede 3</option>
                                  </select>
                                </p>
                                <div align="center">
                                  <table width="100" border="0">
                                    <tr>
                                      <td><input type="submit" name="login2" value="Seleccionar Sede" class="inputButton" /></td>
                                    </tr>
                                  </table>
                                </div>
                                <p align="center">&nbsp;</p>
                              </form>
<p>&nbsp;</p>
</div>
                          </div>
                          <div class="AccordionPanel">
                            <div class="AccordionPanelTab">Eliminar una Sede</div>
                            <div class="AccordionPanelContent">
                              <p align="center">Por favor seleccione la sede que desea eliminar:</p>
                              <form id="form3" method="post" action="">
                                <p align="center">
                                  <label for="select"></label>
                                  Sede a Modificar:
                                  <select name="select2" id="select">
                                    <option>Sede 1</option>
                                    <option>Sede 2</option>
                                    <option>Sede 3</option>
                                  </select>
                                </p>
                                <div align="center">
                                  <table width="100" border="0">
                                    <tr>
                                      <td><input type="submit" name="login3" value="Eliminar Sede" class="inputButton" /></td>
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
                        <li>Módulo</li>
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