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
$FotoAnimal1=$_FILES["FotoAnimal"]["name"];
$FotoAnimal2=$_FILES["FotoAnimal"]["tmp_name"];

		
$conexion=true;
Conectarse($conexion);


if($conexion){
	if($FotoAnimal1){
		$FotoAnimal= "images/".$FotoAnimal1;/*le adiciona el nombre de la carpeta al nombre de la imagen*/
		copy($FotoAnimal2,$FotoAnimal);/*codigo para copiar el archivo temporal al destino que tiene especifico*/	
		$query=("update animal set Nombre = '$NombreAnimal',Raza = '$RazaAnimal',Edad = '$EdadAnimal',Color = '$ColorAnimal',Tamaño = '$TamañoAnimal',Peso = '$PesoAnimal',Habilidad = '$HabilidadAnimal',Foto = '$FotoAnimal' where idAnimal = '$idAnimal'");
	}
	else {
		$query=("update animal set Nombre = '$NombreAnimal',Raza = '$RazaAnimal',Edad = '$EdadAnimal',Color = '$ColorAnimal',Tamaño = '$TamañoAnimal',Peso = '$PesoAnimal',Habilidad = '$HabilidadAnimal' where idAnimal = '$idAnimal'");
		}
		
	# Raza = '$RazaAnimal',Sexo = '$SexoAnimal',,Color = '$ColorAnimal',Tamaño = '$TamañoAnimal',Peso = '$PesoAnimal'Habilidad = '$HabilidadAnimal',
	mysql_query($query)or die(mysql_error());
	header ('location:MascotasRegistradas.php?Message=2');
	}

?>