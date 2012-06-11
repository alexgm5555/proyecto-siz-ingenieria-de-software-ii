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





#se guardan todos los valores que se encontraron de la mascota con el idAnimal en la variable f que es un arreglo
$idUsuario = $_SESSION['usuario'];
$fa=mysql_query("select * from usuarios where UserName = '$idUsuario'");
		$faa=mysql_fetch_array($fa);
		$Cedula= $faa['Cedula'];
$solicitudes=mysql_query("select * from solicitud_adopcion WHERE
CC_Solicitante='".$Cedula."'");
$solicitudesRecibidas=mysql_query("select * from solicitud_adopcion WHERE
Dueño_Animal='".$Cedula."'");

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
                <h2>Solicitudes de adopción</h2>
                <img class="left round" src="images/pic02.jpg" width="200" height="180" alt=""  />En esta página podrás, tanto ver el estado de las solicitudes de adopción que enviaste como las que recibes de los animales que registraste. </div>
              <div id="box2">
                    <div id="Accordion1" class="Accordion" tabindex="0">
                        <div class="AccordionPanel">
                            <div class="AccordionPanelTab">Estado de las solicitudes enviadas por: <?php echo $_SESSION['usuario'];?></div>
                            <div class="AccordionPanelContent1">
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
                                                $datos=mysql_query("select * from animal WHERE idAnimal ='".$solicitud['id_Animal']."'");
                                                $datosAnimal=mysql_fetch_array($datos);
                                             ?>
                                                <tr>
                                                    <th scope="col"> 
                                                        <table width="100%" height="120" border="0">
                                                        <tr>
                                                             <th  align="center"  scope="col"border="">
                                                                 <?php
                                                                 echo'<img src="'.$datosAnimal['Foto'].'"width="70" heigth="90"/>';
                                                                  ?>
                                                             </th>
                                                             <th  scope="col"border="" >&nbsp;</th>
                                                             <th align="left" scope="col">
                                                                 <h5>Codigo del animal:
                                                                    <?php
                                                                    echo $solicitud['id_Animal'];
                                                                    ?>
                                                                    <br />
                                                                    Nombre del Animal:
                                                                    <?php
                                                                    echo $datosAnimal['Nombre'];
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
                                                             <th align="left" scope="col">
                                                             	
                                                             	
                                                                <?php
																 echo $solicitud['Estado_Solicitud'];
																?>
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
                                <div align="left">Solicitudes Recibidas:</div>
                            </div>
                            <div class="AccordionPanelContent">
                                <div align="center">
                                    <p>Dando Click en enviar podras aceptar la solicitud de adopcion y contactar con el usuario
                                      <?php
                                        #aca llama la funcion de lista de solicitantes
                                        ?>
                                </p><?php while($solicitudRecibida=mysql_fetch_array($solicitudesRecibidas)){?>
                                    <form id="form1" method="post" action="EstadoSolicitudesEnviadasApp.php? Estado=$solicitudRecibida['idSolicitud_Adopcion']">
                                      <table width="70%" border="1" >
                                          <?php
                                            #ciclo para mostrar todos los registros de este usuario
                                            
                                                $CC=$solicitudRecibida['CC_Solicitante'];
                                                $datos=mysql_query("select * from animal WHERE idAnimal ='".$solicitudRecibida['id_Animal']."'");
                                                $datosAnimal=mysql_fetch_array($datos);
                                             ?>
                                          <tr>
                                                    <th scope="col"> 
                                                        <table width="100%" height="120" border="0">
                                                        <tr>
                                                             <th  align="center"  scope="col"border="">
                                                                 <?php
                                                                 echo'<img src="'.$datosAnimal['Foto'].'"width="70" heigth="90"/>';
                                                                  ?>
                                                             </th>
                                                             <th  scope="col"border="" >&nbsp;</th>
                                                             <th align="left" scope="col">
                                                                 <h5>Codigo del animal:
                                                                    <?php
                                                                    echo $solicitudRecibida['id_Animal'];
                                                                    ?>
                                                                    <br />
                                                                    Nombre del Animal:
                                                                    <?php
                                                                    echo $datosAnimal['Nombre'];
                                                                    ?>
                                                                    <br />
                                                                    Solicitud:
                                                                   <?php
                                                                    echo $solicitudRecibida['idSolicitud_Adopcion'];
                                                                    ?>
                                                                    <br />
                                                                    Cedula del solicitante:
                                                                    <?php
                                                                    echo $CC;
                                                                    ?>
                                                                    <?php
                                                                    // envio dos campo oculto para determinarel campo a modificar en la tabla Solicitud_adopcion
                                                                    ?>
                                                                    <input name="idSolicitud" type="hidden" value=<?php echo $solicitudRecibida['idSolicitud_Adopcion'];?> />
                                                                    <input name="idAnimal" type="hidden" value=<?php echo $datosAnimal['idAnimal'];?> />
                                                                </h5>
                                                             </th>
                                                             <th align="left" scope="col">
                                                                <input type="radio" name="radio" id="AceptarSolicitud" value="Aceptada" />
                                                                    <label for="AceptarSolicitud">Aceptar<br /></label>
                                                          <label for="RechazarSolicitud"><br /></label> </th>
                                                              
                                                        </tr>
                                                        </table>
                                                      
                                                      <input type="submit" name="login2" value="Enviar" class="inputButton" />
                                              </th>
                                                </tr>
                                        </table>
                                    </form>
                                    <?php
                                                        }
                                                        ?>
                                                        <p>&nbsp;</p>
                                </div>
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