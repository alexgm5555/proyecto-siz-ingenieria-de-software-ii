<?php include ("conexionMySQL.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php 

//Este bloque de PHP nos permite guardar en la Base de Datos las variables solicitadas 
//al usuario en FormularioRegistro.php

$conexion = true;
$NombreUsuario = $_GET['nombre'];
$ApellidoUsuario = $_GET['apellido'];
$DocumentoUsuario = $_GET['documento'];
$CorreoUsuario = $_GET['correo'];
$PaisUsuario = $_GET['Pais'];
$CelularUsuario = $_GET['celu'];
$NombredeUsuario = $_GET['user'];
$ContraseñadeUsuario = $_GET['password'];

conexion($conexion);

	if($conexion){
		
		$query = ("insert into prueba.usuarios(CC, Nombres, Apellidos, Correo_Electronico, Pais, Celular, Nombre_de_Usuario, Contrasena) values ('$DocumentoUsuario' , '$NombreUsuario' , '$ApellidoUsuario' , '$CorreoUsuario' , '$PaisUsuario' , '$CelularUsuario' , '$NombredeUsuario' , '$ContraseñadeUsuario')");
		mysql_query($query);
		
		header ('location:index.php'); //Esta funcion hace que despues del registro se vuelva a la pagina index.php
		}
	else{
		echo ("No ha sido posible establecer la conexion");}
		
?>
</body>
</html>