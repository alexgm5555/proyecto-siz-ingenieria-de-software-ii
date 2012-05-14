<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
error_reporting("E_PARSE");



?>
<?php include ("conexionMySQL.php");


$conexion = Conectarse();

#Seleccionar las ciudades en la bd
$consulta = "SELECT * FROM estado_animal order by Estado ASC";

#para consultar las diferentes ciudades
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
					<h1> Zoonosis: Registrar Mascota</h1>
				</div>
                <div id="nav">
                    <ul>
			<li>
                            <a href="index.php">Inicio</a>
                        </li>
                        <li  class="first active">
                            <a href="FormularioRegistro.php">Registro</a>
                        </li>
			<li>
                            <a href="#">Acerca de</a>
			</li>
			<li class="last">
                            <a href="#">Contacto</a>
			</li>
                     </ul>
                        <br class="clear" />
				</div>
			</div>
			<div id="banner">
				<img src="images/pic01.jpg" width="1120" height="240" alt="" />
			</div>
			<div id="main">
                            <div id="content">
				<div id="box2">
                                    <div>
                                        <p>Por favor diligencie el formulario de registro:</p>
                                        <form id="form1" method="post" action="ResolverFormulario.php"> <table width="713" border="0">
                                   <tr>
                                     <?php

 ?>
                                     <td width="63">Nombre:</td>
                                     <td width="268"><label
for="nombreSede2"></label>
                                       <input name="NombreAnimal"
type="text" id="NombreAninal" value="<?php echo $f['Nombre'];?>"
size="45px" /></td>
                                     <td width="68">Peso:</td>
                                     <td width="296"><input
name="PesoAnimal" type="text" id="PesoAnimal" value="<?php echo
$f['Peso'];?>" size="45px" /></td>
                                   </tr>
                                   <tr>
                                     <td>Raza:</td>
                                     <td><input name="RazaAnimal"
type="text" id="RazaAninal" value="<?php echo $f['Raza'];?>"
size="45px" /></td>
                                     <td>Habilidad:</td>
                                     <td><input name="HabilidadAnimal"
type="text" id="HabilidadAnimal" value="<?php echo $f['Habilidad'];?>"
size="45px" /></td>
                                   </tr>
                                   <tr>
                                     <td>Sexo:</td>
                                     <td><input name="SexoAnimal"
type="text" id="SexoAnimal" value="<?php echo $f['Sexo'];?>"
size="45px" /></td>
                                     <td>Estado Animal:</td>
                                     <td><select name="Estado" class="form"
id="Estado">
                                       
                                       <?PHP
                                                                       //////////////////////////////////////
                                                                       /////CODIGO DE MODIFICAR SEDE AQUÍ////
                                                                       //////////////////////////////////////
                                                                 if ($numfilas > 0) {
                                                               while ($rowEmp = mysql_fetch_assoc($resultado)) {
                                                                        echo " <option
value='".$rowEmp['idEstado_Animal']."'>".$rowEmp['Estado']."</option>";
                                                               }
                                                         }

                                                                 ?>
                                     </select></td>
                                   </tr>
                                   <tr>
                                     <td>Edad:</td>
                                     <td><input name="EdadAnimal"
type="text" id="Edad" value="<?php echo $f['Edad'];?>" size="45px"
/></td>
                                     <td>Foto:</td>
                                     <td><label for="fileField"></label>
                                       <input type="file"
name="fileField" id="fileField" value="<?php echo
$f['Foto'];?>"/></td>
                                   </tr>
                                   <tr>
                                     <td>Color:</td>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                     <td  align "center"><?php

                                               #codigo para imprimir la foto
                                               echo'<img src="'.$f['Foto'].'"width="110" heigth="110"/>';
                                                ?>
                                       &nbsp;</td>
                                   </tr>
                                   <tr>
                                     <td>Tamaño:</td>
                                     <td><input name="TamañoAnimal"
type="text" id="TamañoAnimal" value="<?php echo $f['Tamaño'];?>"
size="45px" /></td>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                   </tr>
                                   <tr>
                                     <td colspan="4" ><div align="center">
                                       <input type="submit"
name="login" value="Registrar" class="inputButton" />
                                     </div></td>
                                   </tr>
                                 </table>
                                        </form>
                                        <p>&nbsp;</p>

                                    </div>
                                    <br class="clear" />
                                        
				</div>
                                <br class="clear" />
                                
                          </div>
                            
                    </div>
                    
              </div>
                    
		<div style="margin: 40em 0 3em 0; text-align: center;">
        Este Sitio Web es desarrollado en la Universidad Nacional de Colombia
			<br />Diseñado y Provisto por Zoonisis Team
			<br />© 2012.</div>
</body>
</html>