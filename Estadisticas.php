<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
error_reporting("E_PARSE");
//Validamos si la sesión ya fue creada:
session_start();
if ( isset( $_SESSION['usuario'])) {

//Permite continuar en la página
}
else{	
	header ('location:index.php?LoginMesagge=2'); 
	} 


include ("conexionMySQL.php");
$conexion = Conectarse();
$consulta = "SELECT * from usuarios";
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());
$numfilas1 = mysql_num_rows($resultado);

$consulta = "SELECT * from tipos_animal";
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());
$numfilas2 = mysql_num_rows($resultado);   

$consulta = "SELECT * from tiposusuarios";
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());
$numfilas3 = mysql_num_rows($resultado);   

$consulta = "SELECT * from solicitud_adopcion";
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());
$numfilas4 = mysql_num_rows($resultado);

$consulta = "SELECT * from sedes";
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());
$numfilas5 = mysql_num_rows($resultado);

$consulta = "SELECT * from estado_animal where idEstado_Animal = 1";
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());
$numfilas6 = mysql_num_rows($resultado);  

$consulta = "SELECT * from estado_animal where idEstado_Animal = 2";
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());
$numfilas7 = mysql_num_rows($resultado);

$consulta = "SELECT * from estados_solicitud";
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());
$numfilas8 = mysql_num_rows($resultado);

$consulta = "SELECT * from ciudades";
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());
$numfilas9 = mysql_num_rows($resultado);   

$consulta = "SELECT * from animal";
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());
$numfilas10 = mysql_num_rows($resultado);                 	    							
      							  

?>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Zoonisis</title>
		<link href="http://fonts.googleapis.com/css?family=Cabin" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div id="outer">
			<div id="header">
				<div id="logo">
					<h1> Zoonosis</h1>
				</div>
<div id="nav">
			  		
                    <ul>
						<li class="first active"><a href="index.php">Inicio</a></li>			
						<li><a href="#">Acerca de</a></li>
                       	<li class="last"><a href="#">Contacto</a></li>
						<li class="last"><a href="Logout.php">Cerrar Sesión</a></li>							
					</ul>
                    
              <div align="right">Usuario Activo: <?php echo $_SESSION['usuario'];?></div>
</div>
			</div>
			<div id="banner">
				<img src="images/pic01.jpg" width="1120" height="240" alt="" />
			</div>
			<div id="main">
				<div id="content">
				
					<div id="box1">
						<h2><?php echo $_SESSION['usuario'];?>- Estadísticas</h2>
						<p>A continuación se muestran las estadísticas generales del Sistema:</p>
						
						<p align="center">
                        <?php
// archivos incluidos. Librerías PHP para poder graficar.
include "FusionCharts.php";
include "Functions.php";
// Gráfico de Barras. 4 Variables, 4 barras.
// Estas variables serán usadas para representar los valores de cada unas de las 4 barras.
// Inicializo las variables a utilizar.
$intTotalAnio1 = $numfilas1;
$intTotalAnio2 = $numfilas2;
$intTotalAnio3 = $numfilas3;
$intTotalAnio4 = $numfilas4;
$intTotalAnio5 = $numfilas5;
$intTotalAnio6 = $numfilas6;
$intTotalAnio7 = $numfilas7;
$intTotalAnio8 = $numfilas8;
$intTotalAnio9 = $numfilas9;
$intTotalAnio10 = $numfilas10;
// $strXML: Para concatenar los parámetros finales para el gráfico.
$strXML = "";
// Armo los parámetros para el gráfico. Todos estos datos se concatenan en una variable.
// Encabezado de la variable XML. Comienza con la etiqueta "Chart".
// caption: define el título del gráfico.
// bgColor: define el color de fondo que tendrá el gráfico.
// baseFontSize: Tamaño de la fuente que se usará en el gráfico.
// showValues: = 1 indica que se mostrarán los valores de cada barra. = 0 No mostrará los valores en el gráfico.
// xAxisName: define el texto que irá sobre el eje X. Abajo del gráfico. También está xAxisName.
$strXML = "<chart caption = 'Estadísticas Generales' bgColor='#CDDEE5' baseFontSize='12' showValues='1' xAxisName='SIZ: Estadísticas Generales del Sistema' >";
// Armado de cada barra.
// set label: asigno el nombre de cada barra.
// value: asigno el valor para cada barra.
// color: color que tendrá cada barra. Si no lo defino, tomará colores por defecto.
$strXML .= "<set label = 'Usuarios registrados' value ='".$intTotalAnio1."' color = 'EA1000' />";
$strXML .= "<set label = 'Tipos de animales existentes' value ='".$intTotalAnio2."' color = '6D8D16' />";
$strXML .= "<set label = 'Tipos de usuarios activos' value ='".$intTotalAnio3."' color = 'FFBA00' />";
$strXML .= "<set label = 'Solicitudes de adopción en proceso' value ='".$intTotalAnio4."' color = '0000FF' />";
$strXML .= "<set label = 'Numero de Sedes activas' value ='".$intTotalAnio5."' color = 'FFBA00' />";
$strXML .= "<set label = 'Animales en Adopción' value ='".$intTotalAnio6."' color = '6D8D16' />";
$strXML .= "<set label = 'Animales Perdidos' value ='".$intTotalAnio7."' color = 'EA1000' />";
$strXML .= "<set label = 'Estados de solicitudes activas' value ='".$intTotalAnio8."' color = '0000FF' />";
$strXML .= "<set label = 'Ciudades Activas en SIZ' value ='".$intTotalAnio9."' color = 'EA1000' />";
$strXML .= "<set label = 'Animales Registrados' value ='".$intTotalAnio9."' color = '6D8D16' />";
// Cerramos la etiqueta "chart".
$strXML .= "</chart>";
// Por último imprimo el gráfico.
// renderChartHTML: función que se encuentra en el archivo FusionCharts.php
// Envía varios parámetros.
// 1er parámetro: indica la ruta y nombre del archivo "swf" que contiene el gráfico. En este caso Columnas ( barras) 3D
// 2do parámetro: indica el archivo "xml" a usarse para graficar. En este caso queda vacío "", ya que los parámetros lo pasamos por PHP.
// 3er parámetro: $strXML, es el archivo parámetro para el gráfico. 
// 4to parámetro: "ejemplo". Es el identificador del gráfico. Puede ser cualquier nombre.
// 5to y 6to parámetro: indica ancho y alto que tendrá el gráfico.
// 7mo parámetro: "false". Trata del "modo debug". No es im,portante en nuestro caso, pero pueden ponerlo a true ara probarlo.
echo renderChartHTML("Column3D.swf", "",$strXML, "Estadisticas", 700, 400, false);
?>                 
                        
                     
                        </p>
                    </div>
					
					<div id="box2">
						<h2>En Zoonisis ellos son nuestros amigos</h2>
						<img class="left round" src="images/pic03.jpg" width="200" height="180" alt="" />En muchas ocasiones nos preguntamos ¿dónde están nuestros amigos cuando los necesitamos?
					y la respuesta es muy sencilla, están por todo el planeta. En Zoonisis los animales son nuestros amigos, y como amigos nuestro objetivo es brindarles apoyo para todas las necesidades que ellos tengan.</div>
					
					<br class="clear" />
				</div>
				<div id="sidebar">
					<h3>
                    
                  </h3>
					<div class="form">
					  <p><?php echo $_SESSION['usuario'];?>, puedes realizar las siguientes actividades</p>
					  <p>
					    <?php  // se muestran las opciones que corresponden a cada tipo de usuario dependiente del tipo de usuario que se haya registrado al iniciar sesión.
					  		$tipoUsuario = $_SESSION['tipoUsuario'];
							if($tipoUsuario == "Administrador"){$tipo=0;};
							if($tipoUsuario == "Empleado"){$tipo=1;};
							if($tipoUsuario == "Particular"){$tipo=2;};
							switch ($tipo){
								
								//Caso en que sea Administrador
								case 0:
								echo   "<li><a href='AdministracionUsuarios.php'>Administracion de Usuarios</a></li>
                                                                        <li><a href='AdministracionAnimales.php'>Administración de Animales</a></li>
                                                                        <li><a href='AdministracionEmpleados.php'>Administración de Empleados</a></li>
                                                                        <li><a href='AdministracionSedes.php'>Administración de Sedes</a></li>
                                                                        <li><a href='Estadisticas.php'>Estadísticas</a></li>";
								break;
								
								//Caso en que sea Empleado
								case 1:
								echo   "<li><a href='#'>Registrar Animal</a></li>
																		<li><a href='RegistrarMascotaEmpleados.php'>Registrar Animal</a></li>
                                                                        <li><a href='#'>Eliminar Animal</a></li>
                                                                        <li><a href='#'>Modificar Animal</a></li>
                                                                        <li><a href='#'>Consultar Solicitudes de Adopción</a></li>";
								break;
								
								//Caso en que sea Particular
								case 2:
								echo '<SCRIPT LANGUAGE="JavaScript">  top.location="/proyecto-siz-ingenieria-de-software-ii/MascotasRegistradas.php" </script>';
								echo   "<li><a href='RegistrarMascota.php'>Registrar Animales</a></li>
                                                                        <li><a href='BuscarMascota.php'>Búsqueda de Animales</a></li>
																		<li><a href='MascotasRegistradas.php'>Administrar Animales</a></li>";
								break;
							}
					  ?>
				      </p>
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
			<br />Diseñado y Provisto por Zoonisis Team
			<br />© 2012.</div>
</body>
</html>