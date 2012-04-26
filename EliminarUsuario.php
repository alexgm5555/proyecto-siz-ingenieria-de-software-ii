<?php
function EncontrarUsuario(){

$conexion = true;
$UsuarioEliminar = $_POST['UsuarioparaEliminar'];

Conectarse($conexion);

if($conexion){
    $query = "select Nombres, Apellidos, Cedula, Ciudad  from zoonosis.Usuarios 
                where (Cedula = $UsuarioEliminar and TipoUsuario='Particular')";
    $consulta = mysql_query($query) or die(mysql_error());
    echo $consulta;
    
}
return $consulta;
}
?>
