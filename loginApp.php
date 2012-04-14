<?php
include ("conexionMySQL.php");
$conexion = Conectarse();
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$consulta2 = "SELECT * from persona where usuario='$usuario' and contrasena='$contrasena'";
$resultado2 = mysql_query($consulta2, $conexion) or die(mysql_error());
$numfilas2 = mysql_num_rows($resultado2);
if($numfilas2 !=0){
        //echo "La validacion del usuario se hizo satisfactoriamente. <br>Por favor quien este encargado de la pagina que se enlaza con login satisfactorio en bombas!! <br>la necesito para ponerla en el header y asi configurar la sesion ... :)";
        header ('location:MenuAdministrador.php'); 
}
else{
        header ('location:index.php?LoginMesagge=1'); 
}
?>