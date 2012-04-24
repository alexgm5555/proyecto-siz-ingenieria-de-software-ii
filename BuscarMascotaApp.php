
<?php
include ("conexionMySQL.php");
$Tipo=$_POST['Tipo'];

$Sexo=$_POST['Sexo'];

$Ciudad=$_POST['Ciudad'];
$conexion = Conectarse();
$conexion = true;
echo $Tipo;
if($Tipo=='Todos'){
    $Tipo='';
    echo "tipo:   ",$Tipo,"si es aqui";}
if($Sexo=='Todos'){
    $Sexo='';
    echo "sexo:   ",$Sexo,"si es aqui";}
if($Ciudad=='Todos'){
    $Ciudad='';
    echo "Ciudad:   ",$Ciudad,"si es aqui";}
    
header ('location:BuscarMascota.php?Tipo=');    
if($Tipo!=''){
    if($Sexo!=''){
        if($Ciudad!=''){
            
        }else{}
    }else{}
}else{}
if(($Ciudad!='')){
    if(($Sexo!='')&&($Tipo=='')){
    }
    if(($Sexo=='')&&($Tipo!='')){
        
    }
} 
if(($Tipo=='')&&($Sexo=='')&&($Ciudad!='')){
    
}
if(($Tipo=='')&&($Sexo!='')&&($Ciudad=='')){
    
}
?>