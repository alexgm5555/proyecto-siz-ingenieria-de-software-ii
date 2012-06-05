<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
//error_reporting("E_PARSE");
//Validamos si la sesión ya fue creada:
session_start();
if ( !isset( $_SESSION['usuario'])) {

header ('location:index.php?LoginMesagge=2');
}

//Se hace la consulta de las sedes
include ("conexionMySQL.php");
$conexion = Conectarse();

#Seleccionar los estados del animal en la bd
$consulta = "SELECT * FROM estado_animal order by Estado ASC";

#para consultar las diferentes estados
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());
$numfilas = mysql_num_rows($resultado);
$idAnimal=$_GET['idAnimal'];
#idAnimal es un parametro que llega de Mascotas registradas
$re=mysql_query("select * from animal WHERE idAnimal='".$idAnimal."'");
$f=mysql_fetch_array($re);
#se guardan todos los valores que se encontraron de la mascota con el idAnimal en la variable f que es un arreglo

$solicitudes=mysql_query("select * from solicitud_adopcion WHERE
id_Animal='".$idAnimal."'");

?>
<!--
       Website Name by Adonis Ronquillo for Free Website Templates
       www.freewebsitetemplat.es / www.doni.us
       Images by Image Base http://imagebase.davidniblack.com/
       Released under the Creative Commons Attribution 3.0 License.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
               <meta http-equiv="content-type" content="text/html; charset=utf-8" />
               <meta name="description" content="" />
               <meta name="keywords" content="" />
               <title>Zoonosis</title>
               <link href="http://fonts.googleapis.com/css?family=Cabin"
rel="stylesheet" type="text/css" />
               <link rel="stylesheet" type="text/css" href="style.css" />
   <script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
       <link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#outer #main #content #box2 #Accordion1
.AccordionPanel.AccordionPanelClosed .AccordionPanelContent table tr
td {
       text-align: center;
}
#outer #main #content #box2 #Accordion1 .AccordionPanel.AccordionPanelClosed .AccordionPanelContent #form2 table {
	font-size: 12pt;
}
</style>
</head>
<body>
    <div id="outer">
        <div id="header">
            <div id="logo">
                    <h1> Zoonosis</h1>
            </div>
            <div id="nav">
                <ul>
                    <li class="first active"><a href="InicioUsuario.php">Inicio</a></li>
                    <li><a href="#">Acerca de</a></li>
                    <li class="last"><a href="#">Contacto</a></li>
                    <li class="last"><a href="Logout.php">Cerrar Sesión</a></li>
                </ul>
                <div align="right">Usuario Activo: 
                    <?php 
                    echo$_SESSION['usuario'];
                    ?>
                </div>
            </div>
        </div>
        <div id="banner">
           <img src="images/pic01.jpg" width="1120" height="240" alt="" />
        </div>
        <div id="main">
            <div id="content">
                <div id="box1">
                    <h2>Administración Mascotas Registradas</h2>
                    <div align="center"></div>
                        <table width="100%" height="244" cellpadding="1" cellspacing="0">
                            <tr>
                                <th width="19%" scope="col">&nbsp;</th>
                                <th width="34%" scope="col">
                                    <h6 align="center">
                                        <span class="sectionList">
                                            <?php
                                            echo $f['Nombre'];
                                            ?>
                                        </span> 
                                    </h6>
                                    <h6 align="center">
                                        <?php
                                        #codigo para imprimir la foto
                                        echo'<img src="'.$f['Foto'].'"width="220" heigth="220"/>';
                                        ?>
                                    </h6>
                                    <h6 align="center">
                                        <span class="sectionList">
                                            Codigo:
                                            <?php
                                            echo $f['idAnimal'];
                                            ?> 
                                        </span>
                                    </h6>
                                    <h5 align="center">&nbsp;</h5>
                                </th>
                                <th width="39%" scope="col">
                                    <table width="72%" height="190" border="0" >
                                        <tr>
                                            <th scope="col">
                                                <?php
                                                #bloque de codigo para imprimir los datos del animal seleccionado, en mascotas registrada.php
                                                ?>
                                                <h5 align="left" class="login">Tipo de Animal:
                                                    <?php
                                                    echo $f['TipoAnimal'];
                                                    ?>
                                                </h5>
                                                <h5 align="left">Sexo: <?php echo $f['Sexo'];?></h5>
                                                <h5 align="left">Color: <?php echo $f['Color'];?></h5>
                                                <h5 align="left">Edad: <?php echo $f['Edad'];?></h5>
                                                <h5 align="left">Peso:<?php echo $f['Peso'];?></h5>
                                                <h5 align="left" class="login">&nbsp;</h5></th>
                                        </tr>
                                    </table>
                                </th>
                            </tr>
                        </table>
                        <p align="center"><span class="login">Habilidad: 
                            <?php
                            echo$f['Habilidad'];
                            ?>
                            </span>
                        </p>
                        <p>
                        </p>
                </div>
                <div id="box2">
                    <div id="Accordion1" class="Accordion" tabindex="0">
                        <div class="AccordionPanel">
                            <div class="AccordionPanelTab">Listado de Solicitudes de Adopción</div>
                            <div class="AccordionPanelContent">
                                <div align="center">
                                    <p>Por favor ingrese la información de la Nueva Sede:</p>
                                    <form id="form1" method="post" action="">
                                        <?php
                                        #aca llama la funcion de lista de solicitantes
                                        ?>
                                        <table width="70%" border="1" >
                                            <?php
                                            #ciclo para mostrar todos los registros de este usuario
                                            while($solicitud=mysql_fetch_array($solicitudes)){
                                                $CC=$solicitud['CC_Solicitante'];
                                                $datos=mysql_query("select * from usuarios WHERE Cedula ='".$CC."'");
                                                $sol=mysql_fetch_array($datos);
                                             ?>
                                                <tr>
                                                    <th scope="col"> 
                                                        <table width="100%" height="120" border="0">
                                                        <tr>
                                                             <th  align="center"  scope="col"border="">
                                                                 <?php
                                                                 #echo'<img src="'.$f['Foto'].'"width="70" heigth="90"/>';
                                                                  ?>
                                                             </th>
                                                             <th  scope="col"border="" >&nbsp;</th>
                                                             <th align="left" scope="col">
                                                                 <h5>Codigo:
                                                                    <?php
                                                                    echo $solicitud['Estado_Solicitud'];
                                                                    ?>
                                                                    <br />
                                                                    Nombres:
                                                                    <?php
                                                                    echo $sol['Nombres'];
                                                                    ?>
                                                                    <br />
                                                                    Solicitud:
                                                                    <?php
                                                                    echo $solicitud['idSolicitud_Adopcion'];
                                                                    ?>
                                                                    <br />
                                                                    Cedula del solicitante:
                                                                    <?php
                                                                    echo $CC;
                                                                    ?>
                                                                </h5>
                                                             </th>
                                                        </tr>
                                                        </table>
                                                        <?php
                                                        }
                                                        ?>
                                                    </th>
                                                </tr>
                                        </table>
                                    </form>
                                    <p>&nbsp;</p>
                                </div>
                            </div>
                        </div>
                        <div class="AccordionPanel">
                            <div class="AccordionPanelTab">
                                <div align="left">Modificar Registro</div>
                            </div>
                            <div class="AccordionPanelContent">
                                <p align="center">Por favor seleccione la sede que desea modificar:&nbsp;</p>
                                <form action="ModificarAnimalApp.php" method="post" enctype="multipart/form-data" id="form2">
                                    <p align="center">
                                    <table width="610" border="0" align="center" >
                                        <tr>
                                            <td width="30">&nbsp;</td>                                  
                                            <td width="60">Nombre:</td>
                                            <td width="181"><label for="nombreSede"></label>
                                                <input name="NombreAnimal" type="text" id="NombreAninal" value="<?php echo $f['Nombre'];?>"size="30px" />
                                            </td>
                                            <td width="14">&nbsp;</td>
                                            <td width="115">Peso:</td>
                                            <td width="241">
                                                <input name="PesoAnimal" type="text" id="PesoAnimal" value="<?php echo$f['Peso'];?>" size="30px" />
                                            </td>
                                            <td width="19">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td height="48">Raza:</td>
                                            <td>
                                                <input name="RazaAnimal" type="text" id="RazaAninal" value="<?php echo $f['Raza'];?>" size="30px" />
                                            </td>
                                            <td>&nbsp;</td>
                                            <td>Habilidad:</td>
                                            <td>
                                                <textarea name="HabilidadAnimal" cols="30px" id="HabilidadAnimal"><?php echo $f['Habilidad'];?></textarea>
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>Sexo:</td>
                                            <td>
                                                <input name="SexoAnimal"type="text" id="SexoAnimal" value="<?php echo $f['Sexo'];?>" size="30px" />
                                            </td>
                                            <td>&nbsp;</td>
                                            <td>Estado Animal:</td>
                                            <td>
                                                <select name="EstadoAnimal" class="form" id="EstadoAnimal">
                                                    <?PHP
                                                                       //////////////////////////////////////
                                                                       /////CODIGO DE MODIFICAR SEDE AQUÍ////
                                                                       //////////////////////////////////////
                                                    if ($numfilas > 0) {
                                                        while ($rowEmp = mysql_fetch_assoc($resultado)) {
                                                            echo " <option value='".$rowEmp['idEstado_Animal']."'>".$rowEmp['Estado']."</option>";
                                                            }
                                                         }
                                                    ?>
                                                </select>
                                            </td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Edad:</td>
                                        <td>
                                            <input name="EdadAnimal" type="text" id="Edad" value="<?php echo $f['Edad'];?>" size="30px"/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>Foto:</td>
                                        <td>
                                            <label for="FotoAnimal"></label>
                                            <input type="file" name="FotoAnimal" id="FotoAnimal"  size="30px"/>
                                        </td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                    <td>&nbsp;</td>
                                    <td>Color:</td>
                                    <td>
                                        <input name="ColorAnimal"type="text" id="Color" value="<?php echo $f['Color'];?>" size="30px"/>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td  align "center">&nbsp;</td>
                                    <td  align "center">&nbsp;</td>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>Tamaño:</td>
                                        <td>
                                            <input name="TamañoAnimal" type="text" id="TamañoAnimal" value="<?php echo $f['Tamaño'];?>"size="30px" />
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>
                                            <?php
                                            #codigo para imprimir la foto
                                            echo'<img src="'.$f['Foto'].'"width="110" heigth="110"/>';
                                            ?>
                                        </td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="7" >
                                            <div align="center">
                                                <input name="idAnimal" type="hidden" value="<?php echo $f['idAnimal'];?>" />
                                                <input type="submit" name="login" value="Modificar" class="inputButton" />
                                            </div>
                                        </td>
                                    </tr>
                                    </table>
                                    </p>
                                </form>
                            </div>
                         </div>
                         <div class="AccordionPanel">
                            <div class="AccordionPanelTab">Eliminar Registro</div>
                            <div class="AccordionPanelContent">
                                <p align="center">&nbsp;</p>
                                    <form id="form3" method="post" action="EliminarRegistroUsuario.php"><input name="idanimal"type="hidden" value="<?php echo $f['idAnimal'];?>" />
                                        <div align="center">
                                            <table width="100" border="0">
                                                <tr>
                                                    <td>
                                                        <input type="submit" name="login3" value="Eliminar Registro" class="inputButton" />
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <p align="center">&nbsp;</p>
                                    </form>
                                    <p></p>
                           </div>
                        </div>
                     </div>
                </div>
                <br class="clear" />
            </div>
            <div id="sidebar">
                <h3>
                </h3>
                <div class="form">
                    <p><?php echo $_SESSION['usuario'];?>, puedes realizar las siguientes actividades</p>
                    <ol>
                        <li><a href="ClasificadorRoles.php">Pagina Inicio</a></li>
                        <li><a href="RegistrarMascota.php">Registrar Mascotas</a></li>
                        <li><a href="BuscarMascota.php">Buscar Mascotas</a></li>
                        <li><a href="MascotasRegistradas.php">Administrar Animales Registrados</a></li>
                    </ol>
                 </div>
                <h3>Enlaces de Interés</h3>
                <ul class="linkedList">
                    <li class="first">
                        <a href="http://www.freewebtemplates.com/free-templates/">Templates Gratis</a>
                    </li>
                    <li>
                        <a href="http://www.google.com.co">Google</a>
                    </li>
                    <li>
                        <a href="http://docs.google.com">Google Docs</a>
                    </li>
                </ul>
                <p>&nbsp;</p>
            </div>
            <br class="clear" />
        </div>
    </div>
    <div style="margin: 1em 0 3em 0; text-align: center;">
       Este Sitio Web es desarrollado en la Universidad Nacional de Colombia
       <br />Diseñado y Provisto por Zoonosis Team
       <br />© 2012.
    </div>
   <script type="text/javascript">var Accordion1 = new Spry.Widget.Accordion("Accordion1");
   </script>
</body>
</html>