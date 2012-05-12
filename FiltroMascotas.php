<html>
<?php
session_start();

include ("conexionMySQL.php");
$conexion = Conectarse();
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
$url_anterior = $_SESSION['url'];
$re=mysql_query("select * from animal");
$consulta = "SELECT idUsuarioParticulares, Ciudad FROM usuarios";
#Seleccionar las ciudades en la bd
$consulta2 = "SELECT * FROM ciudades order by Nombre_Ciudad ASC";
#Seleccionar los tipos de animal  en la bd
$consulta3 = "SELECT * FROM tipos_animal order by tipo ASC";
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());
#para consultar las diferentes ciudades
$resultado2 = mysql_query($consulta2, $conexion) or die(mysql_error());
#para consultar las diferentes ciudades
$resultado3 = mysql_query($consulta3, $conexion) or die(mysql_error());
$numfilas = mysql_num_rows($resultado);
?>
        
<head>

        <link rel="stylesheet" type="text/css" href="style2.css" />

    </head>
    <?
	
    #se envia filtroMascotas.php?var=0 para que pueda acceder a las variables tipo sexo y ciudad
    ?>
        <body><form name="form1" method="post" action="FiltroMascotas.php?var=0">
            	<p align="center">
              <table width="70%" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr>
                  <th scope="col"><label for="Tipo De Animal5">Tipo:</label>
                    <select name="Tipo" class="form" id="Tipo">
                      <option>Todos</option>
                      <?PHP
					  
									//////////////////////////////////////
									///// AQUÍ////
									//////////////////////////////////////
								  if ($numfilas > 0) {  
         							while ($rowEmp = mysql_fetch_assoc($resultado3)) {  
           								 echo " <option value='".$rowEmp['idTipos_Animal']."'>".$rowEmp['Tipo']."</option>";  
         							}
      							  }
								  ?>
                    </select></th>
                  <th scope="col">Sexo:
                    <select name="Sexo" class="form" id="Sexo">
                      <option>Todos</option>
                      <option>Hembra</option>
                      <option>Macho</option>
                    </select></th>
                  <th scope="col">Ciudad:
                    <select name="Ciudad" class="form" id="Ciudad">
                      <option>Todos</option>
                      <?PHP
									//////////////////////////////////////
									/////CODIGO DE MODIFICAR SEDE AQUÍ////
									//////////////////////////////////////
								  if ($numfilas > 0) {  
         							while ($rowEmp = mysql_fetch_assoc($resultado2)) {  
           								 echo " <option value='".$rowEmp['idCiudades']."'>".$rowEmp['Nombre_Ciudad']."</option>";  
         							}
      							  }
								  echo $url_anterior;
								  ?>
                    </select></th>
                </tr>
              </table>
              </p>
              <p align="center">
                <input type="submit" name="button" id="button" value="Buscar">
              <p align="center">
              <?php
			  	#codigo para guardar las variables que el usuario escoje para filtrar la busqueda de animales
			  if(($url_anterior != '/proyecto-siz-ingenieria-de-software-ii/FiltroMascotas.php?var=0')&&($url_anterior != '/proyecto-siz-ingenieria-de-software-ii/FiltroMascotas.php?var=2')){
				  echo $url_anterior;
					$id	=$_GET['idAnimal'];
				  	echo '<SCRIPT LANGUAGE="JavaScript">  top.location="/proyecto-siz-ingenieria-de-software-ii/SolicitudAdopcion.php?idAnimal='.$id.'>" </script>';
			
                     }	
			  
              	if($url_anterior == '/proyecto-siz-ingenieria-de-software-ii/FiltroMascotas.php?var=0'){
					echo "/n",$url_anterior;
					$Tipo1	=	$_POST['Tipo'];
					$Sexo	=	$_POST['Sexo'];
					$Ciudad1	=	$_POST['Ciudad'];
					if(($Tipo1!="Todos")||($Ciudad1!="Todos")||($Sexo!="Todos")){
						if($Tipo1	==	"Todos"){$Tipo1	=	"";}
						if($Sexo	==	"Todos"){$Sexo	=	"";}
						if($Ciudad1	==	"Todos"){$Ciudad1=	"";}
						echo $Sexo;
						#Este codigo es para reemplazar el id que envian por el respectivo String de cada una de las tablas
						$Tipo2	=	mysql_query("select * from tipos_animal  where idTipos_Animal='".$Tipo1."'");
						$Ciudad2=	mysql_query("select * from ciudades  where idCiudades='".$Ciudad1."'");
						#Codigo para dejarlos datos en un array
						$Tipo	=	mysql_fetch_array($Tipo2);
						$Ciudad	=	mysql_fetch_array($Ciudad2);
						$re=mysql_query("select * from animal where Sexo='".$Sexo."'and TipoAnimal='".$Tipo['Tipo']."'");
					}
			  	}
				
			  ?>
        </form>
        <div class="form">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th scope="col"><p align="center">                
                  <table width="70%" border="1" align="center">
                    <?php
														  	#Se hace un mientras para colocar todas las mascotas que se han registrado
															
															/*if(($Tipo!="Todos")||($Ciudad!="Todos")||($Sexo!="Todos")){
																if($Tipo=="Todos"){$Tipo="";}
																if($Sexo=="Todos"){$Sexo="";}
																if($Ciudad=="Todos"){$Ciudad="";}
																$re=mysql_query("select * from animal where TipoAnimal='$Tipo',Sexo='$Sexo'");
																}*/
																#Se hace un mientras para colocar todas las mascotas que se han registrado
															
                                    						while($f=mysql_fetch_array($re)){
																
															?>
                    <tr>
                      <th scope="col"> <table width="100%" height="83" border="0">
                        <tr>
                          <th width="18%" height="79"  align="center"  scope="col"border=""> <?php
																					#codigo para colocar la imagen de la mascota 
																					echo'<img src="'.$f['Foto'].'"width="70" heigth="90"/>';
																					?>
                          </th>
                          <th width="7%"  scope="col"border="" >&nbsp;</th>
                          <th width="45%" align="left" scope="col">Nombre:
                            <?php
																					echo $f['Nombre'];
																					?>
                            <br />
                            Sexo:
                            <?php
																					echo $f['Sexo'];
																					?></th>
                          <th width="30%" align="center" scope="col">
                          </iframe>
                          <?php
																					$id= $f['idAnimal'];
																					#codigo para enviar los valores del animal seleccionado 
																					
									#Se manda una variable idAnimal con el valor de id que esta arriba, el cual contiene el id del animal que el usuario halla seleccionado.
									#la variable var no se envia por que no es necesaria
																				echo "<a href=FiltroMascotas.php?idAnimal=$id>";
																					?>
                                                                                   
                          <?php
																					  #bloque de codigo para mostrar una imagen huella diferente dependiendo del sexo del animal
                																		if($f['Sexo']=='Macho'){
					 																		echo'<img src="images/Macho.jpg"width="70" heigth="70"/>';}
																						else{
																							echo'<img src="images/Hembra.jpg"width="70" heigth="70"/>';} 
				?>
                          </p>
                          </a></a></th>
                        </tr>
                      </table>
                        <?php
																}
																
																			?>
                    </tr>
                  </table>
                  </p>
                <p></p></th>
              </tr>
            </table>
            <p align="center">
        </div>
            
            &nbsp;</p>
            <p>&nbsp;</p>
        </body>
</html>