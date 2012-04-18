<?php
include ("conexionMySQL.php");
$conexion = Conectarse();

//Variables capturadas del formulario
$nombreSede = $_POST['nombreSede'];
$ciudadSede = $_POST['ciudadSede'];
$direccionSede = $_POST['direccionSede'];
$telefonoSede = $_POST['telefonoSede'];
$emailSEde = $_POST['emailSEde'];

try{
	$consulta = "INSERT INTO SEDES (Nombre, Ciudad, Direccion, Telefono, Email) VALUES('$nombreSede', '$ciudadSede', '$direccionSede', 		    '$telefonoSede', '$emailSEde')";
	$resultado = mysql_query($consulta, $conexion) or die(mysql_error());
	header ('location:AdministracionSedes.php?Message=1'); 
	}
catch(Exception $e){
	Echo "Sucedió un error inesperado.".$e->getMessage();
	}     
?>