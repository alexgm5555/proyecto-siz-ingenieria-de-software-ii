<?php include ("conexionMySQL.php")?>
<?php

session_start();
isset( $_SESSION['usuario']); 
$idUsuario = $_SESSION['usuario'];
$NombreAnimal=$_POST['NombreAnimal'];
$RazaAnimal=$_POST['RazaAnimal'];
$SexoAnimal=$_POST['SexoAnimal'];
$EdadAnimal=$_POST['EdadAnimal'];
$ColorAnimal=$_POST['ColorAnimal'];
$TamañoAnimal=$_POST['TamañoAnimal'];
$PesoAnimal=$_POST['PesoAnimal'];
$HabilidadAnimal=$_POST['HabilidadAnimal'];
$TipoAnimal=$_POST['Tipo'];
$EstadoAnimal=$_POST['EstadoAnimal'];
$FotoAnimal1=$_FILES["FotoAnimal"]["name"];
$FotoAnimal2=$_FILES["FotoAnimal"]["tmp_name"];
$ExtFotoanimal=pathinfo($FotoAnimal1);

//condicion para no dejar pasar un archivo diferente a un jpg

if(is_uploaded_file($FotoAnimal2)){
    if(($ExtFotoanimal['extension']=="jpg")||($ExtFotoanimal['extension']=="JPG")||($ExtFotoanimal['extension']=="PNG")||($ExtFotoanimal['extension']=="png")){
        
        
   
        #$FotoAnimal= "images/".$FotoAnimal1;/*le adiciona el nombre de la carpeta al nombre de la imagen*/
        #copy($FotoAnimal2,$FotoAnimal);/*codigo para copiar el archivo temporal al destino que tiene especifico*/

        $conexion=true;
        Conectarse($conexion);

        $FotoAnimal= "images/".$FotoAnimal1;/*le adiciona el nombre de la carpeta al nombre de la imagen*/
        copy($FotoAnimal2,$FotoAnimal);/*codigo para copiar el archivo temporal al destino que tiene especifico*/

        if($conexion){
                        $fa=mysql_query("select * from usuarios where UserName = '$idUsuario'");
                        $faa=mysql_fetch_array($fa);
                        $Cedula= $faa['Cedula'];
                        $fat=mysql_query("select * from tipos_animal where idTipos_Animal = '$TipoAnimal'");
                        $fatt=mysql_fetch_array($fat);
                        $TipoAnimal=$fatt['Tipo'];

                $query = ("insert into animal values (null, 'Particular','$Cedula','$TipoAnimal','En Adopcion','$NombreAnimal','$SexoAnimal','$RazaAnimal','$ColorAnimal','$TamañoAnimal','$EdadAnimal','$PesoAnimal','$FotoAnimal','','$HabilidadAnimal')");/*inserta los valores en la BD*/

                mysql_query($query)or die('location:RegistrarMascota.php');
                header ('location:MascotasRegistradas.php?Message=3');
                }

        }
else{
    header ('location:RegistrarMascota.php?Message=1');
}
	}
        echo "pasa";
  //header ('location:RegistrarMascota.php');
?>