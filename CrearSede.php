<?php
include ("conexionMySQL.php");
$conexion = Conectarse();

//Variables capturadas del formulario
$nombreSede = $_GET['nombreSede'];
$ciudadSede = $_GET['ciudadSede'];
$direccionSede = $_GET['direccionSede'];
$telefonoSede = $_GET['telefonoSede'];
$emailSEde = $_GET['emailSEde'];

try{
	$consulta = "INSERT INTO SEDES (Nombre, Ciudad, Direccion, Telefono, Email) VALUES('$nombreSede', '$ciudadSede', '$direccionSede', 		    '$telefonoSede', '$emailSEde')";
	$resultado = mysql_query($consulta, $conexion) or die(mysql_error());
	header ('location:AdministracionSedes.php?Message=1'); 
	}
catch(Exception $e){
	Echo "Sucedió un error inesperado.".$e->getMessage();
	}     
?>