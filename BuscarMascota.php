<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
error_reporting("E_PARSE");
?>
<?php
//error_reporting("E_PARSE");
//Validamos si la sesión ya fue creada:

session_start();
isset( $_SESSION['usuario']); 
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
//Permite continuar en la página
?>
<!--
	Web site Name by Adonis Ronquillo for Free Website Templates
	www.freewebsitetemplat.es / www.doni.us
	Images by Image Base http://imagebase.davidniblack.com/
	Released under the Creative Commons Attribution 3.0 License.
-->
<html xmlns="http://www.w3.org/1999/xhtml">

<? 
#este codigo sirve para dejar el tamano de iframe de buscarmascota por defecto
################3333###########3###############################3
##########----para dejar el iframe auntomatico##############33#3
##############################################################33
?>
<script type="text/javascript">
function autoIframe(frameId){
try{
frame = document.getElementById(frameId);
innerDoc = (frame.contentDocument) ? frame.contentDocument : frame.contentWindow.document;
objToResize = (frame.style) ? frame.style : frame;
objToResize.height = innerDoc.body.scrollHeight + 10;
}
catch(err){
window.status = err.message;
}
}
</script>
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
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
                    <li class="first active"><a href="MascotasRegistradas.php">Inicio</a></li>			
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
                    <h2>Buscar Mascotas</h2>
			<img class="left round" src="images/pic02.jpg" width="200" height="180" alt=""  />En esta página podrás encontrar todas las mascotas que se han registrado en el sitio.
                </div>
		<p>
                <?php		
		try {
                    $bandera=0;  
                    $mensaje = $_GET['Message']; 
                    switch ($mensaje) {
			case 0:
                            echo "";
			break;
                        #es accionado el caso 1 cuando el usuario hace una solicitud osea llega a esta pag de Solicitud Adopcion con menssage=1
			case 1:	
                            echo "
                                    <table width='auto' border='0'>
  					<tr>
                                            <td><img src='images/correcto.png' alt='' width='40' height='38' /></td>
                                            <td align='center'><font color='green' size='5px'>Tu solicitud ha sido enviada correctamente.</font></td>
					</tr>
                                    </table>";
			break;
                    #es accionado el caso 1 cuando ya tiene una solicitud llega a esta pag de Solicitud Adopcion con menssage=1
			case 2:	
                            echo "
                                    <table width='auto' border='0'>
  					<tr>
                                            <td><img src='images/Advertencia.png' alt='' width='40' height='38' /></td>
                                            <td align='center'><font color='red' size='5px'>Ya hay una solicitud pendiente de esta mascota</font></td>
					</tr>
                                    </table>";
			break;
                        }				
		}  
		catch (Exception $e){  
                    echo "Sucedió un error PHP.";
                    }
            ?>
                
                &nbsp;
                </p>
		<div id="box2" align="center"> 
                    <div id="Accordion1" class="Accordion" tabindex="0">
			<div class="AccordionPanelTab">Buscar  Mascota</div>
                            <div class="AccordionPanelContent2">
                                <div align="center">
                                    <p>Por favor haga click en la mascota sobre la cual desea mas información: </p>
                                  <iframe id="tree" name="tree" src="BuscarMascotaIFrame.php?var=2" frameborder="0" width="730" height="350" onload="if (window.parent && window.parent.autoIframe) {window.parent.autoIframe('tree');}"></iframe>
                                    </p>
                                    <p>&nbsp;</p>
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
                      <li><a href="ClasificadorRoles.php">Mascotas Registradas</a></li>
                      <li><a href="RegistrarMascota.php">Registrar Mascotas</a></li>
                      <li><a href="BuscarMascota.php">Buscar Mascotas</a></li>
                      <li><a href="EstadoSolicitudesEnviadas.php">Solicitudes de Adopción</li>
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
	<br />© 2012.
    </div>
<script type="text/javascript">
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
</script>
</body>
</html>
