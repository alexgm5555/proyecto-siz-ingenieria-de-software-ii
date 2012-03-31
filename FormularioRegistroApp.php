<?php

ini_set('display_errors', 'Off');
ini_set('display_startup_errors', 'Off');
error_reporting(0);
$conexion = true;
$NombreUsuario = $_GET['Nombres'];
$ApellidoUsuario = $_GET['Apellidos'];
$DocumentoUsuario = $_GET['CC'];
$CorreoUsuario = $_GET['CorreoElectronicol'];
$PaisUsuario = $_GET['Ciudad'];
$CelularUsuario = $_GET['Celular'];
$NombredeUsuario = $_GET['NombreUsuario'];
$ContraseÃ±adeUsuario = $_GET['Contraseña'];
$ConfContraseÃ±adeUsuario = $_GET['ConfContraseña'];

function Conectarse()
{
   if (!($link=mysql_connect("localhost","root","root")))
   {
      echo "Error conectando a la base de datos.";
      exit();
   }
   if (!mysql_select_db("persona",$link))
   {
      echo "Error seleccionando la base de datos.";
      exit();
   }
   return $link;
}

$sesion_login = true;
//echo header ('location:FormularioRegistro.php?Mesagge=1');
$con = Conectarse();
//$query = "SELECT * FROM usuario WHERE usuario ='".$username."' AND contrasena = '".$password."'";
//"INSERT INTO usuario (id_usuario,usuario,contrasena,tipo) VALUES (/'''/',/''.$NombreUsuario.'/',/''.$ConfContraseÃ±adeUsuario.'/',/''.$DocumentoUsuario.'/')";
//mysql_query($query,$con)or die (mysql_errno());
$query = ("insert into usuario values ('','$_POST[NombreUsuario]','$_POST[ConfContraseña]','1')");
if (!mysql_query($query,$con)){
	echo header ('location:FormularioRegistro.php?Mesagge=1');
	}
else{
	header ('location:MenuUsuarioParticular.php'); 
	}


mysql_close($con);

?>
