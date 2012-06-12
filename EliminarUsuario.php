<?php include ("paquete1.php")?>

<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

$Cedula = $_SESSION['row'][4];
$conexion = true;
Conectarse($conexion);

if($conexion){

    $query = "delete from usuarios where (Cedula = $Cedula)";

    mysql_query($query) or die(mysql_error());

    header ('location: BusquedaUsuario.php'); 

    }
else{
    
    echo ("No ha sido posible establecer la conexion");
    
    }
?>
