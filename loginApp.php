<?php
include ("conexionMySQL.php");
$conexion = Conectarse();
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$consulta = "SELECT * from usuarios where UserName='$usuario' and Password='$contrasena'";
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());
$numfilas = mysql_num_rows($resultado);         							
      							  
if($numfilas > 0){
		while ($rowEmp = mysql_fetch_assoc($resultado)) {  
           		$tipoUsuario = $rowEmp['TipoUsuario'];
         	}
        session_start(); 
		$_SESSION['usuario'] = $usuario;
		$_SESSION['tipoUsuario'] = $tipoUsuario;
		
        header ('location:ClasificadorRoles.php'); 
}
else{
        header ('location:index.php?LoginMesagge=1'); 
}
?>