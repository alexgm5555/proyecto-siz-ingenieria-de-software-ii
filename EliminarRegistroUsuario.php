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
$animal =$_POST['idanimal'];
echo "hola";
try{
	$consulta = "DELETE FROM  solicitud_adopcion WHERE id_Animal = $animal";
	$resultado = mysql_query($consulta, $conexion) or die(mysql_error());
	$consulta1 = "DELETE FROM animal WHERE idAnimal = $animal";
	$resultado1 = mysql_query($consulta1, $conexion) or die(mysql_error());
	
	header ('location:MascotasRegistradas.php?Message=1,&registro="'.$animal.'"'); 
	}
catch(Exception $e){
	Echo "Sucedió un error inesperado.".$e->getMessage();
	}  



?>