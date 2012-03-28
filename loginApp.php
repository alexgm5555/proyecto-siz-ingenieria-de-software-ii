<?php


ini_set('display_errors', 'Off');
ini_set('display_startup_errors', 'Off');
error_reporting(0);

$username = $_POST['usuario'];
$password = $_POST['contrasena'];
$sesion_login = true;

function Conectarse()
{
   if (!($link=mysql_connect("localhost","root","root")))
   {
      echo "Error conectando a la base de datos.";
      exit();
   }
   if (!mysql_select_db("persona",$link))
   {
      echo "Error seleccionand la base de datos.";
      exit();
   }
   return $link;
}

$con = Conectarse();
$query = "SELECT * FROM usuario WHERE usuario ='".$username."' AND contrasena = '".$password."'";
$q = mysql_query($query,$con);
$s= "SELECT tipo FROM usuario WHERE usuario='".$username."'";
$t = mysql_query($s,$con);
try{


if(mysql_result($q,0))
{$result = mysql_result($q, 0);
//echo $result;
	if(mysql_result($t, 0)==3){
		header ('location:MenuAdministrador.php'); 
		}
	if(mysql_result($t, 0)==2){
		header ('location:MenuEmpleado.php'); 
		}
	if(mysql_result($t, 0)==1){
		header ('location:MenuUsuarioParticular.php'); 
		}		
	//echo mysql_result($t, 0);;
}else
    echo header ('location:login.php?LoginMesagge=1'); 
}catch(Exception $error){}
mysql_close($con);

?>

