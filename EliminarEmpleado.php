<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//Este bloque de PHP nos permite guardar en la Base de Datos las variables solicitadas 
//al usuario en FormularioRegistro.php

echo "Duvan";
function EncontrarEmpleado(){

$conexion = true;
$EmpleadoEliminar = $_POST['EmpleadoparaEliminar'];

Conectarse($conexion);

if($conexion){
    $query = "select Nombres, Apellidos, Cedula, Ciudad  from zoonosis.Usuarios 
                where (Cedula = 0 and TipoUsuario!='Particular')";
    $consulta = mysql_query($query) or die(mysql_error());
    
}
return $consulta;
}
?>