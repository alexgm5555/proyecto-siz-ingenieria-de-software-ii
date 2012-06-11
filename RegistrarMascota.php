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
#Seleccionar los tipos de animal  en la bd
$consulta = "SELECT * FROM tipos_animal order by tipo ASC";

#para consultar las diferentes estados
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());
$numfilas = mysql_num_rows($resultado);
#Seleccionar los tipos de animal  en la bd
$consulta1 = "SELECT * FROM estado_animal order by Estado ASC";

#para consultar las diferentes estados
$resultado1 = mysql_query($consulta1, $conexion) or die(mysql_error());
$numfilas1 = mysql_num_rows($resultado1);
$usuario=$_SESSION['usuario'];
#usari es un parametro que envia BuscarMascota.php
$ret=mysql_query("select * from usuarios WHERE UserName='".$usuario."'");
#datos usuario guarda una arreglo con los datos del el usuario
$datosUsuario=mysql_fetch_array($ret);
#$re=mysql_query ("select * from animal Where CC_Dueño='".$datosUsuario['cedula']."'");
#sirve para almacenar los registroas de este usario en un arreglo llamado re
$re=mysql_query ("select * from animal Where CC_Dueño='".$datosUsuario['Cedula']."'");
	
	
?>
<!--
	Website Name by Adonis Ronquillo for Free Website Templates
	www.freewebsitetemplat.es / www.doni.us
	Images by Image Base http://imagebase.davidniblack.com/
	Released under the Creative Commons Attribution 3.0 License.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<script language="javascript">

	function valida_envia(){ 
	var NombreAnimal = document.form1.NombreAnimal.value;
	
	var patron = /'/;
	var patron2 = /"/;
	var patron3 = /;/;
	
	//valido el usuario
	
	// El usuario no puede ser vacio:
    if (NombreAnimal.length==0){ 
       alert("Ingrese un nombre de Usuario") 
       document.form1.NombreAnimal.focus() 
       return 0; 
    } 
	
            
	
		
	//El nombre no puede contener caracteres especiales
	else if (NombreAnimal.search(patron) != -1 ||NombreAnimal.search(patron2) != -1 || NombreAnimal.search(patron3) != -1){ 
       alert("El Nombre no puede llevar caracteres especiales.") 
       document.form1.NombreAnimal.focus() 
       return 0; 
    } 
	
   
    document.form1.submit(); 
} 

// Funcion que llama a la anterior si en alguno de los campos se presiona la tecla enter
	function onEnter(ev) {  
	if(ev==13)    { 
	valida_envia();  
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
						<li class="first active"><a href="ClasificadorRoles">Inicio</a></li>			
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
					  <img class="left round" src="images/pic02.jpg" width="200" height="180" alt=""  />En esta página podrás insertar el registro de un animal.</div>
					
			    <?php		
						try {
							$bandera=0;  
							$mensaje = $_GET['Message']; 
							$registro = $_GET['registro']; 
							switch ($mensaje) {
								case 0:
									echo "";
									break;
								
								
								case 1:	
									echo "
									<table width='auto' border='0'>
  									  <tr>
										<td><img src='images/correcto.png' alt='' width='40' height='38' /></td>
										<td align='center'><font color='green' size='5px'> Solo se permite archivos de imagenes como jpg png</font></td>
									  </tr>
									</table>";
									break;
								case 3:
									echo "
									<table width='auto' border='0'>
  									  <tr>
										<td><img src='images/correcto.png' alt='' width='40' height='38' /></td>
										<td align='center'><font color='green' size='5px'> Ha sido  Modificado  el Registro $registro</font></td>
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
			    <div id="box2" align="center">
			      <div id="box3" align="center">
			        <div id="Accordion1" class="Accordion" tabindex="0">
			          <div class="AccordionPanel">
			            <div class="AccordionPanelTab">Mascotas registradas por: <?php echo $_SESSION['usuario'];?>.</div>
		              </div>
			          <div class="AccordionPanel">
			            <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
			              <tr>
			                <th scope="col"> 
                                            <form name ="form1" action="RegistrarMascotaApp.php" method="post" enctype="multipart/form-data" id="form1">
			                  <table width="627" height="308" border="0" align="center">
			                    <tr>
			                      <?php

 ?>
			                      <td width="67" align="left" >Nombre:</td>
			                      <td width="194"><label for="nombreSede2"></label>
			                        <input name="NombreAnimal" type="text" id="NombreAnimal" value=""size="30px" /></td>
			                      <td width="103">Peso:</td>
			                      <td width="243" align="left"><input name="PesoAnimal" type="text" id="PesoAnimal" value="" size="30px" / ></td>		                        </tr>
			                    <tr>
			                      <td>Raza:</td>
			                      <td><input name="RazaAnimal" type="text" id="RazaAninal" value="" size="30px" /></td>
			                      <td>Habilidad:</td>
			                      <td align="left"><input name="HabilidadAnimal"type="text" id="HabilidadAnimal" value=""size="30px" /></td>
		                        </tr>
			                    <tr>
			                      <td>Sexo:</td>
			                      <td align="left"><select name="SexoAnimal" id="SexoAnimal">
			                        <option>Macho</option>
			                        <option>Hembra</option>
		                          </select></td>
			                      <td>Tipo de Animal:</td>
			                      <td align="left"><select name="Tipo" class="form" id="Tipo">
			                        
			                        <?PHP
					  
									//////////////////////////////////////
									///// AQUÍ////
									//////////////////////////////////////
								  if ($numfilas > 0) {  
         							while ($rowEmp = mysql_fetch_assoc($resultado )) {  
           								 echo " <option value='".$rowEmp['idTipos_Animal']."'>".$rowEmp['Tipo']."</option>";  
         							}
      							  }
								  ?>
		                          </select></td>
		                        </tr>
			                    <tr>
			                      <td>Edad:</td>
			                      <td><input name="EdadAnimal" type="text" id="Edad" value="" size="30px"/></td>
			                      <td>Estado Animal:</td>
			                      <td align="left"><select name="EstadoAnimal" class="form" id="EstadoAnimal">
			                        <?PHP
                                                                       //////////////////////////////////////
                                                                       /////CODIGO DE MODIFICAR SEDE AQUÍ////
                                                                       //////////////////////////////////////
                                                                 if ($numfilas1 > 0) {
                                                               while ($rowEmp = mysql_fetch_assoc($resultado1)) {
                                                                        echo " <option value='".$rowEmp['idEstado_Animal']."'>".$rowEmp['Estado']."</option>";
                                                               }
                                                         }

                                                                 ?>
			                        </select></td>
		                        </tr>
			                    <tr>
			                      <td>Color:</td>
			                      <td><input name="ColorAnimal"type="text" id="ColorAnimal" value="" size="30px"/></td>
			                      <td>Foto: </td>
			                      <td align="left"><input name="FotoAnimal" type="file" id="FotoAnimal" size="10px" /></td>
		                        </tr>
			                    <tr>
			                      <td>Tamaño:</td>
			                      <td><input name="TamañoAnimal"type="text" id="TamañoAnimal" value=""size="30px" /></td>
			                      <td>&nbsp;</td>
			                      <td>&nbsp;</td>
		                        </tr>
			                    <tr>
			                      <td colspan="4" ><div align="center">
			                        <input type="submit" name="fo" value="Registrar" class="inputButton" onclick="valida_envia()"/>
			                      </div></td>
		                        </tr>
		                      </table>
			                  </form>
			                  &nbsp;</th>
		                  </tr>
		                </table>
			            <p align="center"></p>
			            <table width="70%" border="0" >
		                </table>
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
                        <li><a href="ClasificadorRoles.php">Mascotas Registradas</a></li>
                        <li><a href="RegistrarMascota.php">Registrar Mascotas</a></li>
                        <li><a href="BuscarMascota.php">Buscar Mascotas</a></li>
                        <li><a href="EstadoSolicitudesEnviadas.php">Estado de Mis Solicitudes</li>
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
        Este Sitio Web es desarrollado por estudiantes de la Universidad Nacional de Colombia
			<br />Diseñado y Provisto por Zoonosis Team
		<br />© 2012.</div>
<script type="text/javascript">
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
</script>
</body>
</html>