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
            $consulta = sprintf("UPDATE zoonosis.SEDES set Nombre = '".mysql_real_escape_string($nombreSede)."', Ciudad = '".mysql_real_escape_string($ciudadSede)."', Direccion = '".mysql_real_escape_string($direccionSede)."', Telefono = '".mysql_real_escape_string($telefonoSede)."', Email = '".mysql_real_escape_string($emailSEde)."' where Nombre = '".mysql_real_escape_string($sedeActualizar[1])."'");
            $ErrorBase = "<script> alert('Ha ocurrido algún error con los datos.')
                                location.href='/proyecto-siz-ingenieria-de-software-ii/BusquedaSedes.php';
                                </script>
                             ";
            mysql_query($consulta) or die($ErrorBase);
           }
           catch(Exception $e){
               Echo "Sucedió un error inesperado.".$e->getMessage();
               
               }
               
               }     
?>