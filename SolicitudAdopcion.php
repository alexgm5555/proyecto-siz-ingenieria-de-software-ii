<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
//error_reporting("E_PARSE");
//Validamos si la sesión ya fue creada:
session_start();
if ( isset( $_SESSION['usuario'])) {

//Permite continuar en la página
}
else{	
	header ('location:BuscarMascota.php?Message=2'); 
	} 
include ("conexionMySQL.php");
$conexion = Conectarse();
#Codigo para navegar por la BD haciendo selects respecto al parametro que le llega de Buscarmascota
$idAnimal=$_GET['idAnimal'];
#idAnimal es el parametro que envia BuscarMascota.php
$usuario=$_SESSION['usuario'];
#usari es un parametro que envia BuscarMascota.php
$re=mysql_query("select * from animal WHERE idAnimal='".$idAnimal."'");
$f=mysql_fetch_array($re);
#se guarda todo el array de la tabla idAnimal en la variable f
$ret=mysql_query("select * from usuarios WHERE UserName='".$usuario."'");

$datosUsuario=mysql_fetch_array($ret);
#se guarda todo el array de la tabla Usuario en la variable DatosUsuario

function EnviarDatos($animal,$usario) {
	
    echo "datos enviados";
#como arriba se tiene todo el arreglo del usuario y de los datos pues solo accedo a el, pero para pasarlo a al clase tendriamos que colocar los selecs en este lugar 																					#codigo para enviar los valores del animal seleccionado 
																					
									#Se manda una variable idAnimal con el valor de id que esta arriba, el cual contiene el id del animal que el usuario halla seleccionado.
								
									#$query = ("insert into solicitud_adopcion values ('','$datosUsuario['$Cedula']','$f['idAnimal']','En Espera','$f['CC_Dueño']')");/*inserta los valores en la BD*/
		      
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
						    <th width="40%" scope="col"><table width="88%" height="229" border="0" >
						      <tr>
						        <th width="13%" scope="col">&nbsp;</th>
                                <?php
								#el bloque siguiente basicamente coloca los datos del Usuario que se encontraron en la base de datos
                                ?>
						        <th width="87%" scope="col"><h5 align="left">Nombre : <?php echo $datosUsuario['Nombres'];?></h5>
						          <h5 align="left">Apellido: <?php echo $datosUsuario['Apellidos'];echo $usuario;?></h5>
						          <h5 align="left">Ciudad: <?php echo $datosUsuario['Ciudad'];?>
						          </h5>
						          <h5 align="left">Celular:<?php echo $datosUsuario['Telefono_Cel'];?></h5>
						          <h5 align="left">Telefono Fijo:<?php echo $datosUsuario['Telefono_Fij'];?>
						          </h5>
						          <h5 align="left" class="login">&nbsp;</h5></th>
					          </tr>
					        </table></th>
						    <th width="24%" scope="col"> <h6 align="center"><span class="sectionList"><?php echo $f['Nombre'];?></span></h6>
						      <h6 align="center">
						        <?php
          
						#codigo para imprimir la foto
						echo'<img src="'.$f['Foto'].'"width="220" heigth="220"/>';
			 			 ?>
					          </h6>
						      <h6 align="center"><span class="sectionList">Codigo: <?php echo $f['idAnimal'];?></span></h6>
						      <h5 align="center">&nbsp;</h5>
					        </th>
						    <th width="36%" scope="col"> <table width="99%" height="190" border="0" >
						      <tr>
						        <th width="16%" scope="col">&nbsp;</th>
                                <?php
								#el bloque siguiente basicamente coloca los datos del Animal que se encontraron en la base de datos
                                ?>
						        <th width="84%" scope="col"> <h5 align="left" class="login">Tipo de Animal: <?php echo $f['TipoAnimal'];?></h5>
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
					  <table width="100%" border="0" cellspacing="0" cellpadding="0">
						  <tr>
						    <th width="48%" scope="col"><table width="100%" border="0" cellspacing="0" cellpadding="0">
						      <tr>
						        <th width="24%" scope="col">&nbsp;</th>
						        <th width="72%" scope="col"><table width="73%" height="84" border="1" cellpadding="0" cellspacing="0">
						          <tr>
						            <th width="54%" scope="col" border="0"><div align="left">
						              <?php
								#el bloque siguiente basicamente coloca los datos del Usuario que se encontraron en la base de datos
                                ?>
						              <h5>Email: <?php echo $datosUsuario['Email'];?></h5>
						              <h5>Nombre de Usuarior: <?php echo $datosUsuario['UserName'];?></h5>
						              </div></th>
						            <th width="46%" scope="col"><h5 align="left">Tamaño:<?php echo $f['Tamaño'];
								 ?></h5>
				                    <h5 align="left">Descripción:</h5>
				                    <h5 align="left"><?php echo $f['Habilidad'];
								 ?></h5></th>
					              </tr>
					            </table></th>
						        <th width="4%" scope="col">&nbsp;</th>
					          </tr>
					        </table>						      <h5 align="center">&nbsp;
                            
                            
                            </h5>
					        <h5 align="center">Si sus datos son correctos por fabor de click en enviar solicitud</h5></th>
					      </tr>
					  </table>
					  <table width="100%" border="0" cellspacing="0" cellpadding="0">
					    <tr>
					      <th width="43%" scope="col">&nbsp;</th>
					      <th align="center" scope="col"><?php
																					$idAnimal= $f['idAnimal'];
																					$idUsuario= $datosUsuario['idUsuarioParticulares'];
																					#codigo para enviar los valores del animal seleccionado 
																					
									#Se manda una variable idAnimal con el valor de id que esta arriba, el cual contiene el id del animal que el usuario halla seleccionado.
																					echo "<a href=SolicitudAdopcionApp.php?idAnimal=$idAnimal,&idUsuario=$idUsuario>";
																					?>
					        <?php
																					  #bloque de codigo para mostrar una imagen huella diferente dependiendo del sexo del animal
                																		if($f['Sexo']=='Macho'){
					 																		echo'<img src="images/Macho.jpg"width="100" heigth="100"/>';}
																						else{
																							echo'<img src="images/Hembra.jpg"width="130" heigth="130"/>';} 
				?>
					        </p>
					        </a> </th>
					      <th width="40%" scope="col">&nbsp;</th>
				        </tr>
				      </table>
					  <p>&nbsp;</p>
                    </div>
			<br class="clear" />
			  </div>
				<div id="sidebar">
					<h3>
                    
                  </h3>
					<div class="form">
					  <p><?php echo $_SESSION['usuario'];?>, puedes realizar las siguientes actividades</p>
                      <ol>
                      
                        <li><a href="MascotasRegistradas.php">Pagina Inicial</a></li>
                        <li><a href="RegistrarMascota.php">Registrar Mascotas</a></li>
                        <li><a href="BuscarMascota.php">Buscar Mascotas</a></li>
                        
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
</body>
</html>