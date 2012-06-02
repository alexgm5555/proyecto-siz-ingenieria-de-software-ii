<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
error_reporting("E_PARSE");
?>

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
$usuario=$_SESSION['usuario'];
#usari es un parametro que envia BuscarMascota.php
$ret=mysql_query("select * from usuarios WHERE UserName='".$usuario."'");
#datos usuario guarda un arreglo con los datos del el usuario
$datosUsuario=mysql_fetch_array($ret);
#sirve para almacenar los registroas de este usario en un arreglo llamado ArregloAnimalesRegistradosUsuario usando en un while de la linea 133
/* @var $ArregloAnimalesRegistradosUsuario ArrayObject */
$ArregloAnimalesRegistradosUsuario=mysql_query ("select * from animal Where CC_Dueño='".$datosUsuario['Cedula']."'");

	
	
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
						<h2>Mascotas Que Has Registrado</h2>
					  <img class="left round" src="images/pic02.jpg" width="200" height="180" alt=""  />En esta página podrás modificar, eliminar y ver las solicitudes que tiene cada mascota que has registrado en SIZ, dandole click a Administrar Datos.</div>
					
                                        <?php
                                        #el siguiente codigo try sirve para mostrar un mensaje de modificacion eliminacion de mascota
                                                try {
                                                    $bandera=0;  
                                                    $mensaje = $_GET['Message']; 
                                                    $registro = $_GET['registro']; 
                                                    switch ($mensaje) {
                                                        case 0:
                                                            echo "";
                                                            break;
                                                        #Manda este Mensajesi viene de AdministrarAnimalSeleccionado.php y selecciona Eliminar Registro
							case 2:	
                                                            echo    "<table width='auto' border='0'>
                                                                        <tr>
                                                                            <td><img src='images/correcto.png' alt='' width='40' height='38' /></td>
                                                                            <td align='center'><font color='green' size='5px'> Ha sido  borrado el Registro $registro</font></td>
                                                                         </tr>
                                                                     </table>";
                                                            break;
							#Manda este Mensaje si viene de AdministrarAnimalSeleccionado.php y selecciona Modificar Registro
							case 3:
                                                            echo    "<table width='auto' border='0'>
                                                                        <tr>
                                                                            <td><img src='images/correcto.png' alt='' width='40' height='38' /></td>
                                                                            <td align='center'><font color='green' size='5px'> Ha sido  Modificado  el Registro $registro</font></td>
                                                                        </tr>
                                                                    </table>";
									
                                                            break;
                                                        #Manda este Mensaje si viene de RegistrarMascota.php 
							case 4:
                                                            echo "  <table width='auto' border='0'>
                                                                        <tr>
                                                                            <td><img src='images/correcto.png' alt='' width='40' height='38' /></td>
                                                                            <td align='center'><font color='green' size='5px'> Ha sido  Insertado  el Registro $registro</font></td>
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
                        <?php
                            if($f=mysql_fetch_array($ArregloAnimalesRegistradosUsuario)){
                        ?>      
                                <div id="box2" align="center"> 
                                    <div id="Accordion1" class="Accordion" tabindex="0">
                                        <div class="AccordionPanel">
                                            <div class="AccordionPanelTab">Mascotas registradas por: <?php echo $_SESSION['usuario'];?>.</div>
					    </div>
					    <div class="AccordionPanel">
                                                <p>Dando click en Modificar podras ver las solicitudes, eliminar o modificar el registro.</p>
                                                <table width="60%" height="110" border="0">
                                                </table>
                                                <p align="center">
                                                    <?// este iframe envia a mascotas registradasIframe donde hace todo el Query parabuscar las mascotas registradas por el usuario que se registro
                                                      // tiene un if y otro codigo extra;o ese codigo sirve para que el tamanio del scrollbar se defina automaticamente dependiendo del contenido?>
                                                    <iframe id="tree" name="tree" src="MascotasRegistradasIFrame.php" frameborder="0" width="730" height="350" onload="if (window.parent && window.parent.autoIframe) {window.parent.autoIframe('tree');}"></iframe>
                        <?php
                          	}
                            else{
			?>
                                <div id="box2" align="center"> 
                                    <div id="Accordion1" class="Accordion" tabindex="0">
                                        <div class="AccordionPanel">
                                            <div class="AccordionPanelTab">Buscar Animales por: <?php echo $_SESSION['usuario'];?>.</div>
					    </div>
					    <div class="AccordionPanel">
                                            <p><?php echo $_SESSION['usuario'];?> como no has registrado ningun animal te invitamos a buscarlos ca podras encontrara tu mascota si se perdio</p>
					    <table width="60%" height="110" border="0">
					    </table>
					    <p align="center">
                                                <?// este iframe envia a filtromascotas donde hace todo el Query parabuscar todas las mascotas  registradas en la base de datos
                                                  // tiene un if y otro codigo extra;o ese codigo sirve para que el tamanio del scrollbar se defina automaticamente dependiendo del contenido?>
                                                <iframe id="tree" name="tree" src="BuscarMascotaIFrame.php?var=2" frameborder="0" width="730" height="350" onload="if (window.parent && window.parent.autoIframe) {window.parent.autoIframe('tree');}"></iframe>
                          <?php
				}
                            ?>
			    </form>
			</form>
				          
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
                                        <li>Administrar Animales Registrados</li>
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