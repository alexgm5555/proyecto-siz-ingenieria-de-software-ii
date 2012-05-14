<?php include ("conexionMySQL.php")?>
<?php
$NombreAnimal=$_POST['NombreAnimal'];
$RazaAnimal=$_POST['RazaAnimal'];
$SexoAnimal=$_POST['SexoAnimal'];
$EdadAnimal=$_POST['EdadAnimal'];
$ColorAnimal=$_POST['ColorAnimal'];
$AlturaAnimal=$_POST['AlturaAnimal'];
$PesoAnimal=$_POST['PesoAnimal'];
$DireccionAnimal=$_POST['DireccionAnimal'];
$CelularAnimal=$_POST['CelularAnimal'];
$TelefonoAnimal=$_POST['TelefonoAnimal'];
$conexion=true;
Conectarse($conexion);
if($conexion){
	$query=("insert into animal values('$NombreAnimal', '$RazaAnimal', '$SexoAnimal', '$EdadAnimal', '$ColorAnimal', '$AlturaAnimal', '$PesoAnimal', '$DireccionAnimal', '$CelularAnimal', '$TelefonoAnimal')");
	mysql_query($query)or die(mysql_error());
	header ('location:AdministrarAnimal.php?Message=2,idAnimal=".$."');
	}

?>