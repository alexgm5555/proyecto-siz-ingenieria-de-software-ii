<?php
session_start();

$_SESSION['url'] = $_SERVER['REQUEST_URI'];
$url_anterior = $_SESSION['url']; 

include ("conexionMySQL.php");
$conexion = Conectarse();  
$usuario=$_SESSION['usuario'];
#usari es un parametro que envia BuscarMascota.php
$ret=mysql_query("select * from usuarios WHERE UserName='".$usuario."'");
#datos usuario guarda una arreglo con los datos del el usuario
$datosUsuario=mysql_fetch_array($ret);
#$re=mysql_query ("select * from animal Where CC_Dueño='".$datosUsuario['cedula']."'");
#sirve para almacenar los registroas de este usario en un arreglo llamado re
$re=mysql_query ("select * from animal Where CC_Dueño='".$datosUsuario['Cedula']."'");
?>
<table width="70%" border="1" align="center" >
	<?php
  	#ciclo para mostrar todos los registros de este usuario
	while($f=mysql_fetch_array($re)){
		?>
	<tr>
    	<th width="24%" scope="col" border="0">
		<?php
		echo'<img src="'.$f['Foto'].'"width="70" heigth="90"/>';
			?>
        </th>
        <th width="55%" scope="col"><table width="100%" height="83" border="0">
      		<tr>
        		<th  align="center"  scope="col"border="0">&nbsp;</th>
        		<th align="left" scope="col"> <h4>Codigo:
          		<?php
				echo $f['idAnimal'];
					?>
          		<br />
          		Nombre:
          		<?php
				echo $f['Nombre'];
					?>
          		<br />
          		Sexo:
          		<?php
				echo $f['Sexo'];
					?>
        		</h4>
                </th>
      		</tr>
    </table></th>
    <th width="21%" scope="col"><a href="AdministrarAnimalSeleccionado.php">
    	<?php
		$id= $f['idAnimal'];
		#codigo para enviar los valores del animal seleccionado 
		#Se manda una variable idAnimal con el valor de id que esta arriba, el cual contiene el id del animal que el usuario halla seleccionado.
		
		if(($url_anterior != '/proyecto-siz-ingenieria-de-software-ii/MascotasRegistradasIFrame.php')){
				  
					$id	=$_GET['idAnimal'];
				  	echo '<SCRIPT LANGUAGE="JavaScript">  top.location="/proyecto-siz-ingenieria-de-software-ii/AdministrarAnimalSeleccionado.php?idAnimal='.$id.'>" </script>';
			
                     }
		echo "<a href=MascotasRegistradasIFrame.php?idAnimal=$id>";
			?>
      	<?php
		#bloque de codigo para mostrar una imagen huella diferente dependiendo del sexo del animal
        if($f['Sexo']=='Macho'){
			echo'<img src="images/MachoMod.jpg"width="80" heigth="80"/>';
			}
		else{
			echo'<img src="images/HembraMod.jpg"width="70" heigth="70"/>';
			} 
			?>
      </p>
      </a> </a>
      <?php
	}
		?>
    </th>
  </tr>
</table>
