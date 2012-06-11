<?php include ("conexionMySQL.php")?>
<?php

$idAnimal=$_GET['idAnimal'];
#idAnimal es el parametro que envia BuscarMascota.php
$usuario=$_GET['idUsuario'];
$conexion = true;




Conectarse($conexion);

	if($conexion){
	#usari es un parametro que envia BuscarMascota.php
$re=mysql_query("select * from animal WHERE idAnimal='".$idAnimal."'");
$f=mysql_fetch_array($re);
#se guarda todo el array de la tabla idAnimal en la variable f
$ret=mysql_query("select * from usuarios WHERE idUsuarioParticulares='".$usuario."'");

$datosUsuario=mysql_fetch_array($ret);	
         $Cedula=$datosUsuario['Cedula'];
		 
		 $idAnimal=$f['idAnimal'];
		 $Propietario=$f['CC_Dueño']; 
		 $arregloSolicitudes=mysql_query("select * from solicitud_adopcion WHERE CC_Solicitante='".$Cedula."'and id_Animal ='".$idAnimal."'");
		 $farreglosol=mysql_fetch_array($arregloSolicitudes);
		 if(!$farreglosol){
                    $query = ("insert into solicitud_adopcion values ( '', '$Cedula', '$idAnimal', 'En Espera' , '$Propietario')");
                    mysql_query($query)or die(mysql_error()); 
            
		#se insertan los datos de solicitante y del animal en la tablasolicitud adopcion
		
		
			 }
                  else {
                      echo '<SCRIPT LANGUAGE="JavaScript">  top.location="/proyecto-siz-ingenieria-de-software-ii/BuscarMascota.php?Message=2" </script>';
                  }       
  
		header ('location:BuscarMascota.php?Message=1');
        }
		
	else{echo  "Sucedió un error inesperado.".$e->getMessage();}
		
?>

