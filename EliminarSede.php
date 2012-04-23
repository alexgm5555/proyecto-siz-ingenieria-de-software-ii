<?php
//Se valida si el usuario ha iniciado sesión
session_start();
if ( !isset( $_SESSION['usuario'])) {
header ('location:index.php?LoginMesagge=2'); 
}

//Se realiza la eliminación en la base de datos
include ("conexionMySQL.php");
$conexion = Conectarse();

//Variables capturadas del formulario
$codigoSede = $_POST['sedeEliminar'];

try{
	$consulta = "DELETE FROM SEDES WHERE idSedes = $codigoSede";
	$resultado = mysql_query($consulta, $conexion) or die(mysql_error());
	header ('location:AdministracionSedes.php?Message=2'); 
	}
catch(Exception $e){
	Echo "Sucedió un error inesperado.".$e->getMessage();
	}     
?>