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
        


<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
<head>
    <!--
    Script que permite capturar la tecla enter y enviar el formulario
    -->
    <script language="javascript "type="text/javascript">
		function stopRKey(evt) { 
		var evt = (evt) ? evt : ((event) ? event : null);
		var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
		if ((evt.keyCode == 13) && (node.type=="text")) {return false;}
		}
		document.form1.onkeypress = stopRKey; 
	</script>
<script language="javascript">

	function valida_envia(){ 
	var NombreAnimal = document.form1.NombreAnimal.value;
        var PesoAnimal = document.form1.PesoAnimal.value;
        var RazaAnimal = document.form1.RazaAnimal.value;
        var HabilidadAnimal = document.form1.HabilidadAnimal.value;
        var EdadAnimal = document.form1.EdadAnimal.value;
        var ColorAnimal = document.form1.ColorAnimal.value;
        var TamañoAnimal = document.form1.TamañoAnimal.value;
        var FotoAnimal = document.form1.FotoAnimal.value;
	
	var patron = /'/;
	var patron2 = /"/;
	var patron3 = /;/;
	
	
	
	// El Nombre de Animal no puede ser vacio:
    if (NombreAnimal.length==0){ 
       alert("Ingrese un nombre del Animal") 
       document.form1.NombreAnimal.focus() 
       return 0; 
    }
    
    //El nombre no puede contener caracteres especiales
	else if (NombreAnimal.search(patron) != -1 ||NombreAnimal.search(patron2) != -1 || NombreAnimal.search(patron3) != -1){ 
       alert("El Nombre no puede llevar caracteres especiales.") 
       document.form1.NombreAnimal.focus() 
       return 0; 
    }
    
    // El peso del Animal no puede ser vacio:
    else if (PesoAnimal.length==0){ 
       alert("Ingrese el peso del animal.") 
       document.form1.PesoAnimal.focus() 
       return 0; 
    }
    
    //El peso no puede contener caracteres especiales
	else if (PesoAnimal.search(patron) != -1 ||PesoAnimal.search(patron2) != -1 || PesoAnimal.search(patron3) != -1){ 
       alert("El Peso no puede llevar caracteres especiales.") 
       document.form1.PesoAnimal.focus() 
       return 0; 
    }
    
    //Se valida que el peso sea numerico
	Numer=parseInt(PesoAnimal);
    if (isNaN(Numer)){
            alert("El Peso ingresado no es válido, por que solo se permiten caracteres numericos.");
			document.form1.PesoAnimal.focus();
			return 0; 
    }
    
    // La habilidad del Animal no puede ser vacio:
    else if (HabilidadAnimal.length==0){ 
       alert("Ingrese la habilidad o una descripción general del animal") 
       document.form1.HabilidadAnimal.focus() 
       return 0; 
    }
    
    //La habiliadad no puede contener caracteres especiales
	else if (HabilidadAnimal.search(patron) != -1 ||HabilidadAnimal.search(patron2) != -1 || HabilidadAnimal.search(patron3) != -1){ 
       alert("La Habilidad no puede llevar caracteres especiales.") 
       document.form1.HabilidadAnimal.focus() 
       return 0; 
    }
    
    // La raza del Animal no puede ser vacio:
    else if (RazaAnimal.length==0){ 
       alert("Ingrese la raza del animal.") 
       document.form1.RazaAnimal.focus() 
       return 0; 
    }
    
    //El Raza no puede contener caracteres especiales
	else if (RazaAnimal.search(patron) != -1 ||RazaAnimal.search(patron2) != -1 || RazaAnimal.search(patron3) != -1){ 
       alert("La Raza no puede llevar caracteres especiales.") 
       document.form1.RazaAnimal.focus() 
       return 0; 
    }
    
    	// La edad del Animal no puede ser vacia:
    else if (EdadAnimal.length==0){ 
       alert("Ingrese la Edad del Animal") 
       document.form1.EdadAnimal.focus() 
       return 0; 
    }
    
    //La Edad no puede contener caracteres especiales
    	else if (EdadAnimal.search(patron) != -1 ||EdadAnimal.search(patron2) != -1 || EdadAnimal.search(patron3) != -1){ 
       alert("La Edad no puede llevar caracteres especiales.") 
       document.form1.EdadAnimal.focus() 
       return 0; 
    }
    
     //Se valida que el Edad sea numerico
	Numer=parseInt(EdadAnimal);
    if (isNaN(Numer)){
            alert("La Edad ingresada no es válida, por que solo se permiten caracteres numericos.");
			document.form1.EdadAnimal.focus();
			return 0; 
    }
    
    	// El Color del Animal no puede ser vacio:
    else if (ColorAnimal.length==0){ 
       alert("Ingrese un Color del Animal") 
       document.form1.ColorAnimal.focus() 
       return 0; 
    }
    
    //El Color no puede contener caracteres especiales
	else if (ColorAnimal.search(patron) != -1 ||ColorAnimal.search(patron2) != -1 || ColorAnimal.search(patron3) != -1){ 
       alert("El Color no puede llevar caracteres especiales.") 
       document.form1.ColorAnimal.focus() 
       return 0; 
    }
    
    // La Foto del Animal no puede ser vacio:
    else if (FotoAnimal.length==0){ 
       alert("Ingrese la Foto del animal") 
       document.form1.FotoAnimal.focus() 
       return 0; 
    }
    
    // La Foto del Animal no puede ser vacio:
    else if (TamañoAnimal.length==0){ 
       alert("Ingrese el tamaño del animal.") 
       document.form1.TamañoAnimal.focus() 
       return 0; 
    } 
    
    	//El Tamaño no puede contener caracteres especiales
	else if (TamañoAnimal.search(patron) != -1 ||TamañoAnimal.search(patron2) != -1 || TamañoAnimal.search(patron3) != -1){ 
       alert("El Tamaño no puede llevar caracteres especiales.") 
       document.form1.TamañoAnimal.focus() 
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
						<h2>Registrar Mascotas</h2>
					  <img class="left round" src="images/pic02.jpg" width="200" height="180" alt=""  />En esta página podrás hacer el registro de una mascota.</div>
					
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
										<td><img src='images/Advertencia.png' alt='' width='60' height='58' /></td>
										<td align='center'><font color='red' size='5px'> No se ha podido hacer el registro por que solo se permite archivos de imagenes como jpg o png</font></td>
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
			            <div class="AccordionPanelTab">Registro de Mascota <?php echo $_SESSION['usuario'];?>.</div>
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
			                        <input type="button" name="login" value="Registrar" class="inputButton"  onclick="valida_envia()"/>
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
		<br />© 2012.</div>
<script type="text/javascript">
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
</script>
</body>
</html>