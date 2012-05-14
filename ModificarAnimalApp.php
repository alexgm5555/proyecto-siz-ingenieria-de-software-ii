<?php include ("conexionMySQL.php")?>
<?php



$NombreAnimal=$_POST['NombreAnimal'];
$RazaAnimal=$_POST['RazaAnimal'];
$SexoAnimal=$_POST['SexoAnimal'];
$EdadAnimal=$_POST['EdadAnimal'];
$ColorAnimal=$_POST['ColorAnimal'];
$TamañoAnimal=$_POST['TamañoAnimal'];
$PesoAnimal=$_POST['PesoAnimal'];
$HabilidadAnimal=$_POST['HabilidadAnimal'];
$idAnimal=$_POST['idAnimal'];
#$EstadoAnimal=$_POST['EstadoAnimal'];
#$FotoAnimal=$_POST['FotoAnimal'];
$conexion=true;
Conectarse($conexion);
echo $idAnimal;
echo $NombreAnimal;
if($conexion){
	$query=("update animal set Nombre = '$NombreAnimal' where idAnimal = '$idAnimal'");
	
	mysql_query($query)or die(mysql_error());
	header ('location:MascotasRegistradas.php?Message=3');
	}

?>