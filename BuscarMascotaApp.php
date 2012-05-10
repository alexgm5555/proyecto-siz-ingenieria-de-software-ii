
<?php
include ("conexionMySQL.php");
$Tipo=$_POST['Tipo'];

$Sexo=$_POST['Sexo'];

$Ciudad=$_POST['Ciudad'];
$conexion = Conectarse();
$conexion = true;
echo $Tipo;
if($Tipo=='Todos'){
    
    echo "tipo:   ",$Tipo,"si es aqui";}
if($Sexo=='Todos'){
    $Sexo='';
    echo "sexo:   ",$Sexo,"si es aqui";}
if($Ciudad=='Todos'){
    $Ciudad='';
    echo "Ciudad:   ",$Ciudad,"si es aqui";}
 echo "Ciudad:   ",$Ciudad,"si es aqui------","tipo:   ",$Tipo,"si es aqui------","sexo:   ",$Sexo,"si es aqui------";   
#header ('location:BuscarMascota.php?Tipo=$Tipo');    

?>