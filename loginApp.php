<?php
include ("conexionMySQL.php");
$conexion = Conectarse();
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$consulta2 = "SELECT * from usuarios where UserName='$usuario' and Password='$contrasena'";
$resultado2 = mysql_query($consulta2, $conexion) or die(mysql_error());
$numfilas2 = mysql_num_rows($resultado2);
if($numfilas2 !=0){
        session_start(); 
		$_SESSION['usuario'] = $usuario;
		
        header ('location:ClasificadorRoles.php'); 
}
else{
        header ('location:index.php?LoginMesagge=1'); 
}
?>