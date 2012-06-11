<?php include ("conexionMySQL.php")?>
<?PHP
ini_set('display_errors', 'Off');
ini_set('display_startup_errors', 'Off');
error_reporting(0);
$conexion = true;



Conectarse($conexion);


$array= array(1=>"$nombreimagen2");
if($conexion){/*aca haria la conexion a la bas de datos*/
	
	/*este arreglo guarda todos los campos de la tabla RegistrarMascotaEmpleadophp*/
	$array = array($_FILES["1_Aimage"]["name"]	,$_FILES["1_Aimage"]["tmp_name"]	,$_POST["1_B"]	,$_POST["1_C"]	,$_POST["1_D"]	,$_POST["1_E"]	,$_POST["1_F"]	,$_POST["1_G"]	,$_POST["1_H"]
,$_FILES["2_Aimage"]["name"]	,$_FILES["2_Aimage"]["tmp_name"]	,$_POST["2_B"]	,$_POST["2_C"]	,$_POST["2_D"]	,$_POST["2_E"]	,$_POST["2_F"]	,$_POST["2_G"]	,$_POST["2_H"]
,$_FILES["3_Aimage"]["name"]	,$_FILES["3_Aimage"]["tmp_name"]	,$_POST["3_B"]	,$_POST["3_C"]	,$_POST["3_D"]	,$_POST["3_E"]	,$_POST["3_F"]	,$_POST["3_G"]	,$_POST["3_H"]
,$_FILES["4_Aimage"]["name"]	,$_FILES["4_Aimage"]["tmp_name"]	,$_POST["4_B"]	,$_POST["4_C"]	,$_POST["4_D"]	,$_POST["4_E"]	,$_POST["4_F"]	,$_POST["4_G"]	,$_POST["4_H"]
,$_FILES["5_Aimage"]["name"]	,$_FILES["5_Aimage"]["tmp_name"]	,$_POST["5_B"]	,$_POST["5_C"]	,$_POST["5_D"]	,$_POST["5_E"]	,$_POST["5_F"]	,$_POST["5_G"]	,$_POST["5_H"]
,$_FILES["6_Aimage"]["name"]	,$_FILES["6_Aimage"]["tmp_name"]	,$_POST["6_B"]	,$_POST["6_C"]	,$_POST["6_D"]	,$_POST["6_E"]	,$_POST["6_F"]	,$_POST["6_G"]	,$_POST["6_H"]
,$_FILES["7_Aimage"]["name"]	,$_FILES["7_Aimage"]["tmp_name"]	,$_POST["7_B"]	,$_POST["7_C"]	,$_POST["7_D"]	,$_POST["7_E"]	,$_POST["7_F"]	,$_POST["7_G"]	,$_POST["7_H"]
,$_FILES["8_Aimage"]["name"]	,$_FILES["8_Aimage"]["tmp_name"]	,$_POST["8_B"]	,$_POST["8_C"]	,$_POST["8_D"]	,$_POST["8_E"]	,$_POST["8_F"]	,$_POST["8_G"]	,$_POST["8_H"]
,$_FILES["9_Aimage"]["name"]	,$_FILES["9_Aimage"]["tmp_name"]	,$_POST["9_B"]	,$_POST["9_C"]	,$_POST["9_D"]	,$_POST["9_E"]	,$_POST["9_F"]	,$_POST["9_G"]	,$_POST["9_H"]
,$_FILES["10_Aimage"]["name"]	,$_FILES["10_Aimage"]["tmp_name"]	,$_POST["10_B"]	,$_POST["10_C"]	,$_POST["10_D"]	,$_POST["10_E"]	,$_POST["10_F"]	,$_POST["10_G"]	,$_POST["10_H"]
,$_FILES["11_Aimage"]["name"]	,$_FILES["11_Aimage"]["tmp_name"]	,$_POST["11_B"]	,$_POST["11_C"]	,$_POST["11_D"]	,$_POST["11_E"]	,$_POST["11_F"]	,$_POST["11_G"]	,$_POST["11_H"]
,$_FILES["12_Aimage"]["name"]	,$_FILES["12_Aimage"]["tmp_name"]	,$_POST["12_B"]	,$_POST["12_C"]	,$_POST["12_D"]	,$_POST["12_E"]	,$_POST["12_F"]	,$_POST["12_G"]	,$_POST["12_H"]
,$_FILES["13_Aimage"]["name"]	,$_FILES["13_Aimage"]["tmp_name"]	,$_POST["13_B"]	,$_POST["13_C"]	,$_POST["13_D"]	,$_POST["13_E"]	,$_POST["13_F"]	,$_POST["13_G"]	,$_POST["13_H"]
,$_FILES["14_Aimage"]["name"]	,$_FILES["14_Aimage"]["tmp_name"]	,$_POST["14_B"]	,$_POST["14_C"]	,$_POST["14_D"]	,$_POST["14_E"]	,$_POST["14_F"]	,$_POST["14_G"]	,$_POST["14_H"]
,$_FILES["15_Aimage"]["name"]	,$_FILES["15_Aimage"]["tmp_name"]	,$_POST["15_B"]	,$_POST["15_C"]	,$_POST["15_D"]	,$_POST["15_E"]	,$_POST["15_F"]	,$_POST["15_G"]	,$_POST["15_H"]
,$_FILES["16_Aimage"]["name"]	,$_FILES["16_Aimage"]["tmp_name"]	,$_POST["16_B"]	,$_POST["16_C"]	,$_POST["16_D"]	,$_POST["16_E"]	,$_POST["16_F"]	,$_POST["16_G"]	,$_POST["16_H"]
,$_FILES["17_Aimage"]["name"]	,$_FILES["17_Aimage"]["tmp_name"]	,$_POST["17_B"]	,$_POST["17_C"]	,$_POST["17_D"]	,$_POST["17_E"]	,$_POST["17_F"]	,$_POST["17_G"]	,$_POST["17_H"]
,$_FILES["18_Aimage"]["name"]	,$_FILES["18_Aimage"]["tmp_name"]	,$_POST["18_B"]	,$_POST["18_C"]	,$_POST["18_D"]	,$_POST["18_E"]	,$_POST["18_F"]	,$_POST["18_G"]	,$_POST["18_H"]
,$_FILES["19_Aimage"]["name"]	,$_FILES["19_Aimage"]["tmp_name"]	,$_POST["19_B"]	,$_POST["19_C"]	,$_POST["19_D"]	,$_POST["19_E"]	,$_POST["19_F"]	,$_POST["19_G"]	,$_POST["19_H"]
,$_FILES["20_Aimage"]["name"]	,$_FILES["20_Aimage"]["tmp_name"]	,$_POST["20_B"]	,$_POST["20_C"]	,$_POST["20_D"]	,$_POST["20_E"]	,$_POST["20_F"]	,$_POST["20_G"]	,$_POST["20_H"]
,$_FILES["21_Aimage"]["name"]	,$_FILES["21_Aimage"]["tmp_name"]	,$_POST["21_B"]	,$_POST["21_C"]	,$_POST["21_D"]	,$_POST["21_E"]	,$_POST["21_F"]	,$_POST["21_G"]	,$_POST["21_H"]
,$_FILES["22_Aimage"]["name"]	,$_FILES["22_Aimage"]["tmp_name"]	,$_POST["22_B"]	,$_POST["22_C"]	,$_POST["22_D"]	,$_POST["22_E"]	,$_POST["22_F"]	,$_POST["22_G"]	,$_POST["22_H"]
,$_FILES["23_Aimage"]["name"]	,$_FILES["23_Aimage"]["tmp_name"]	,$_POST["23_B"]	,$_POST["23_C"]	,$_POST["23_D"]	,$_POST["23_E"]	,$_POST["23_F"]	,$_POST["23_G"]	,$_POST["23_H"]
,$_FILES["24_Aimage"]["name"]	,$_FILES["24_Aimage"]["tmp_name"]	,$_POST["24_B"]	,$_POST["24_C"]	,$_POST["24_D"]	,$_POST["24_E"]	,$_POST["24_F"]	,$_POST["24_G"]	,$_POST["24_H"]
,$_FILES["25_Aimage"]["name"]	,$_FILES["25_Aimage"]["tmp_name"]	,$_POST["25_B"]	,$_POST["25_C"]	,$_POST["25_D"]	,$_POST["25_E"]	,$_POST["25_F"]	,$_POST["25_G"]	,$_POST["25_H"]
,$_FILES["26_Aimage"]["name"]	,$_FILES["26_Aimage"]["tmp_name"]	,$_POST["26_B"]	,$_POST["26_C"]	,$_POST["26_D"]	,$_POST["26_E"]	,$_POST["26_F"]	,$_POST["26_G"]	,$_POST["26_H"]
,$_FILES["27_Aimage"]["name"]	,$_FILES["27_Aimage"]["tmp_name"]	,$_POST["27_B"]	,$_POST["27_C"]	,$_POST["27_D"]	,$_POST["27_E"]	,$_POST["27_F"]	,$_POST["27_G"]	,$_POST["27_H"]
,$_FILES["28_Aimage"]["name"]	,$_FILES["28_Aimage"]["tmp_name"]	,$_POST["28_B"]	,$_POST["28_C"]	,$_POST["28_D"]	,$_POST["28_E"]	,$_POST["28_F"]	,$_POST["28_G"]	,$_POST["28_H"]
,$_FILES["29_Aimage"]["name"]	,$_FILES["29_Aimage"]["tmp_name"]	,$_POST["29_B"]	,$_POST["29_C"]	,$_POST["29_D"]	,$_POST["29_E"]	,$_POST["29_F"]	,$_POST["29_G"]	,$_POST["29_H"]
,$_FILES["30_Aimage"]["name"]	,$_FILES["30_Aimage"]["tmp_name"]	,$_POST["30_B"]	,$_POST["30_C"]	,$_POST["30_D"]	,$_POST["30_E"]	,$_POST["30_F"]	,$_POST["30_G"]	,$_POST["30_H"]
);
	
	$i = 0; /* sólo para efectos ilustrativos */
	
foreach ($array as $v) {
	
	if((($i%9)==0)&&($array[$i]!='')){
		 
		
		$ruta=$i+1;/*guarda la ruta temporal donde quedo la imagen*/
		$tipo=$i+2;
		$sexo =$i+3;
		$raza =$i+4;
		$color =$i+5;
		$tamano =$i+6;
		$edad =$i+7;
		$peso =$i+8;
		$ExtFotoanimal=pathinfo($array[$i]);

                //condicion para no dejar pasar un archivo diferente a un jpg

                if(is_uploaded_file($array[$ruta])){
                    if(($ExtFotoanimal['extension']=="jpg")||($ExtFotoanimal['extension']=="JPG")||($ExtFotoanimal['extension']=="PNG")||($ExtFotoanimal['extension']=="png")){

                            /*hacer un select de el idAnimal para guardar la imagen con ese nombre y de ese modo evitar que la bd no encuentre las imagenes*/
                            $destino= "images/".$array[$i];/*le adiciona el nombre de la carpeta al nombre de la imagen*/
                            copy($array[$ruta],$destino);/*codigo para copiar el archivo temporal al destino que tiene especifico*/
                            $query = ("insert into animal values ('','Zoonosis','0','$array[$tipo]','Perdido','','$array[$sexo]','$array[$raza]','$array[$color]','$array[$tamano]','$array[$edad]','$array[$peso]','$destino','','')");/*inserta los valores en la BD*/
                            
                            mysql_query($query)or die(mysql_error());
                           

                    }
                    else{
                    
                    header ('location:RegistrarMascotaEmpleado.php?Message=1');
                }
                }
                
                
	}
    $i++;
}
header ('location:RegistrarMascotaEmpleado.php?Message=2');
	}

?>
