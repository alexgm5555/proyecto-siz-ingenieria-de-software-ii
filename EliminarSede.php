<?php
//Se valida si el usuario ha iniciado sesión
session_start();
if ( !isset( $_SESSION['usuario'])) {
header ('location:index.php?LoginMesagge=2'); 
}

//Se realiza la eliminación en la base de datos
include ("conexionMySQL.php");
$conexion = Conectarse();
$sedeEliminar = $_SESSION['row'];


try{
	$consulta = "DELETE FROM sedes WHERE Nombre = '$sedeEliminar[1]'";
	$resultado = mysql_query($consulta, $conexion) or die(mysql_error());
	header ('location:BusquedaSedes.php'); 
	}
catch(Exception $e){
	Echo "Sucedió un error inesperado.".$e->getMessage();
	}     
?>