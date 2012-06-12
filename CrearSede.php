<?php
//Se valida si el usuario ha iniciado sesión
session_start();
if ( !isset( $_SESSION['usuario'])) {
header ('location:index.php?LoginMesagge=2'); 
}
include ("conexionMySQL.php");
$conexion = Conectarse();

//Variables capturadas del formulario
$nombreSede = $_POST['nombreSede'];
$ciudadSede = $_POST['ciudadSede'];
$direccionSede = $_POST['direccionSede'];
$telefonoSede = $_POST['telefonoSede'];
$emailSEde = $_POST['emailSEde'];

try{
	$consulta = "INSERT INTO SEDES (Nombre, Ciudad, Direccion, Telefono, Email) VALUES('$nombreSede', '$ciudadSede', '$direccionSede', '$telefonoSede', '$emailSEde')";
	$ErrorBase = "<script> alert('Ha ocurrido algún error con los datos.')
                                location.href='/proyecto-siz-ingenieria-de-software-ii/AdministracionSedes.php';
                                </script>
                             ";
        $resultado = mysql_query($consulta, $conexion) or die($ErrorBase);
	header ('location:AdministracionSedes.php?Message=1'); 
	}
catch(Exception $e){
	Echo "Sucedió un error inesperado.".$e->getMessage();
	}     
?>