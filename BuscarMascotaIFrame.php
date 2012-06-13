
<?php
session_start();

include ("conexionMySQL.php");
#hola
$conexion = Conectarse();
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
$url_anterior = $_SESSION['url'];
$usuario=$_SESSION['usuario'];
#usario es un parametro que envia BuscarMascota.php
$ret=mysql_query("select * from usuarios WHERE UserName='".$usuario."'");
#datos usuario guarda un arreglo con los datos del el usuario
$datosUsuario=mysql_fetch_array($ret);
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
        

<?
#se envia BuscarMascotaIFrame.php?var=0 para que pueda acceder a las variables tipo sexo y ciudad
?>
<head>
    <script language="javascript">
        function valida_envia(contador){
           
                   
            if(contador==1){
                
                alert("Ya fue relaizada la solicitud de esta mascota")
                top.location="/proyecto-siz-ingenieria-de-software-ii/BuscarMascota.php";
            }
        }
        
</script>
</head>
<body>
    <form name="form1" method="post" action="BuscarMascotaIFrame.php?var=0">
        <p align="center">
            <table width="70%" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr>
                    <th scope="col"><label for="Tipo De Animal5">Tipo:</label>
                        <select name="Tipo" class="form" id="Tipo">
                            <option>Todos</option>
                            <?PHP
                            if ($numfilas > 0) { 
                                //codigo paracolocar los diferentes tipos de animales registrados en la base de datos 
         			while ($rowEmp = mysql_fetch_assoc($resultado3)) {  
                                    echo " <option value='".$rowEmp['idTipos_Animal']."'>".$rowEmp['Tipo']."</option>";  
                                    }
                                }
                            ?>
                        </select>
                    </th>
                    <?
                    ///////////////////////////////////////////////////////////
                    /////codigo para colocar las opciones de busqueda/////////
                    //////////////////////////////////////////////////////////
                    ?>
                    <th scope="col">Sexo:
                        <select name="Sexo" class="form" id="Sexo">
                        <option>Todos</option>
                        <option>Hembra</option>
                        <option>Macho</option>
                        </select>
                    </th>
                    <th scope="col">Ciudad:
                        <select name="Ciudad" class="form" id="Ciudad">
                            <option>Todos</option>
                            <?PHP
                            if ($numfilas > 0) {
                                //codigo paracolocar los diferentes tipos de ciudades registrados en la base de datos 
                                while ($rowEmp = mysql_fetch_assoc($resultado2)) {  
                                    echo " <option value='".$rowEmp['idCiudades']."'>".$rowEmp['Nombre_Ciudad']."</option>";  
                                    }
                            }
                            echo $url_anterior;
                            ?>
                        </select>
                    </th>
                </tr>
            </table>
            <p align="center">
                <input type="submit" name="button" id="button" value="Buscar">
                <p align="center">
                    <?php
                    #codigo en caso de que el usuario haga click en algun animal pues este lo saque del iframe y lo envie a enviar solicitud
                    if(($url_anterior != '/proyecto-siz-ingenieria-de-software-ii/BuscarMascotaIFrame.php?var=0')&&($url_anterior != '/proyecto-siz-ingenieria-de-software-ii/BuscarMascotaIFrame.php?var=2')){
                        //echo $url_anterior;
			$id = $_GET['idAnimal'];
                        echo '<SCRIPT LANGUAGE="JavaScript">  top.location="/proyecto-siz-ingenieria-de-software-ii/SolicitudAdopcion.php?idAnimal='.$id.'>" </script>';
			}	
			#codigo para guardar las variables que el usuario escoje, para filtrar la busqueda de animales
                    if($url_anterior == '/proyecto-siz-ingenieria-de-software-ii/BuscarMascotaIFrame.php?var=0'){
			//echo "/n",$url_anterior;
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
                            $Ciudad2    =	mysql_query("select * from ciudades  where idCiudades='".$Ciudad1."'");
                            #Codigo para dejarlos datos en un array
                            $Tipo	=	mysql_fetch_array($Tipo2);
                            $Ciudad	=	mysql_fetch_array($Ciudad2);
                            $re=mysql_query("select * from animal where Sexo='".$Sexo."'or TipoAnimal='".$Tipo['Tipo']."'");
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
			while($f=mysql_fetch_array($re)){
                            #se hace una condicion para que no muestre los animales que registro el usuario
                            if($f['CC_Dueño']!=$datosUsuario['Cedula']){
			?>
                            <tr>
                                <th scope="col"> 
                                <table width="100%" height="83" border="0">
                                    <tr>
                                        <th width="18%" height="79"  align="center"  scope="col"border=""> 
                                            <?php
                                            #codigo para colocar la imagen de la mascota 
                                            echo'<img src="'.$f['Foto'].'"width="70" heigth="90"/>';
                                            ?>
                                        </th>
                                        <th width="7%"  scope="col"border="" >&nbsp;</th>
                                        <th width="45%" align="left" scope="col">
                                            <form name="form2" method="post" action="">
                                                <?php
						echo $f['Nombre'];
						?>
                                            </form>
                                            <h5>
                                                <br />
                                                Sexo:
                                                <?php
						echo $f['Sexo'];
						?>
                                            </h5>
                                        </th>
                                        <th width="30%" align="center" scope="col">
                                            <?php
                                            $id= $f['idAnimal'];
                                            $cedul=$datosUsuario['Cedula'];
                                            $contador=1;
                                            //echo $contador;
                                            
                                            $arregloSolicitudes=mysql_query("select * from solicitud_adopcion WHERE CC_Solicitante='".$cedul."'and id_Animal ='".$id."'");
                                            $farreglosol=mysql_fetch_array($arregloSolicitudes);
                                            // para saber si hay un registro similar en solicitud adopcion el contador queda en 0
                                            if(!$farreglosol){
                                                $contador=0;
                                            }
                                            #codigo para enviar los valores del animal seleccionado
                                            // se envia asi mismo para que en el bloque de codigo de la line  171 se salga del iframe por completo y lo mande con el id del animal a solicitud de adopcion
                                            #Se manda una variable idAnimal con el valor de id que esta arriba, el cual contiene el id del animal que el usuario halla seleccionado.
                                            echo "<a href=BuscarMascotaIFrame.php?idAnimal=$id  onclick=valida_envia($contador)>";                                            ?>
                                            <?php
                                            #bloque de codigo para mostrar una imagen huella diferente dependiendo del sexo del animal
                                            if($f['Sexo']=='Macho'){
                                                echo'<img src="images/Macho.jpg"width="70" heigth="70"/>';
                                                }
                                            else{
                                                echo'<img src="images/Hembra.jpg"width="70" heigth="70"/>';
                                                } 
                                            ?>
                                        </th>
                                    </tr>
                                </table>
                            </th>
                        
                        <?php
                                }
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