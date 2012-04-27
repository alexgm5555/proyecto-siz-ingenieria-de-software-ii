<?php
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