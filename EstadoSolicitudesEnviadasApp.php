<?php include ("conexionMySQL.php")?>

<?php
session_start();
isset( $_SESSION['usuario']); 

$estado=$_POST['radio'];
$idSolicitud=$_POST['idSolicitud'];
$idAnimal=$_POST['idAnimal'];
$conexion=true;
Conectarse($conexion);

if($conexion){
	#se dejo este update para dejar por defecto Solicitud rechazada a las solicitudes restantes  eceptpo la que eligio el usuario	
	$query0 = ("update solicitud_adopcion  set Estado_Solicitud='Rechazada' where id_Animal = '$idAnimal'");	
	mysql_query($query0)or die(mysql_error());
	$query = ("update solicitud_adopcion  set Estado_Solicitud='$estado' where idSolicitud_Adopcion = '$idSolicitud'");/*inserta los valores en la BD*/
	
	mysql_query($query)or die(mysql_error());
	header ('location:EstadoSolicitudesEnviadas.php');
	}

echo 'holaaaaaaaa';

echo "<B> =</B>".$idSolicitud."<br>";



?>