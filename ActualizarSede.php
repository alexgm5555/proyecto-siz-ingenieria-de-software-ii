<?php
//Se valida si el usuario ha iniciado sesión
session_start();
if ( !isset( $_SESSION['usuario'])) {
header ('location:index.php?LoginMesagge=2'); 
}
include ("conexionMySQL.php");
$conexion = Conectarse();
$sedeActualizar = $_SESSION['row'];

//Variables capturadas del formulario
if($conexion){
        $nombreSede = $_POST['nombreSede'];
        $ciudadSede = $_POST['ciudadSede'];
        $direccionSede = $_POST['direccionSede'];
        $telefonoSede = $_POST['telefonoSede'];
        $emailSEde = $_POST['emailSEde'];

        try{
            $consulta = "UPDATE zoonosis.SEDES set Nombre = '$nombreSede', Ciudad = '$ciudadSede', Direccion = '$direccionSede', Telefono = '$telefonoSede', Email = '$emailSEde' where Nombre = '$sedeActualizar[1]'";
            mysql_query($consulta) or die(mysql_error());
            header ('location:BusquedaSedes.php'); 
           }
           catch(Exception $e){
               Echo "Sucedió un error inesperado.".$e->getMessage();
               
               }
               
               }     
?>