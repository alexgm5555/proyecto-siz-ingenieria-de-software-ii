<?php
// archivos incluidos. Librerías PHP para poder graficar.
include "FusionCharts.php";
include "Functions.php";
// Gráfico de Barras. 4 Variables, 4 barras.
// Estas variables serán usadas para representar los valores de cada unas de las 4 barras.
// Inicializo las variables a utilizar.
$intTotalAnio1 = 350;
$intTotalAnio2 = 440;
$intTotalAnio3 = 118;
$intTotalAnio4 = 145;
$intTotalAnio5 = 145;
// $strXML: Para concatenar los parámetros finales para el gráfico.
$strXML = "";
// Armo los parámetros para el gráfico. Todos estos datos se concatenan en una variable.
// Encabezado de la variable XML. Comienza con la etiqueta "Chart".
// caption: define el título del gráfico.
// bgColor: define el color de fondo que tendrá el gráfico.
// baseFontSize: Tamaño de la fuente que se usará en el gráfico.
// showValues: = 1 indica que se mostrarán los valores de cada barra. = 0 No mostrará los valores en el gráfico.
// xAxisName: define el texto que irá sobre el eje X. Abajo del gráfico. También está xAxisName.
$strXML = "<chart caption = 'Estadísticas Generales' bgColor='#CDDEE5' baseFontSize='12' showValues='1' xAxisName='Variables' >";
// Armado de cada barra.
// set label: asigno el nombre de cada barra.
// value: asigno el valor para cada barra.
// color: color que tendrá cada barra. Si no lo defino, tomará colores por defecto.
$strXML .= "<set label = 'Anio 1' value ='".$intTotalAnio1."' color = 'EA1000' />";
$strXML .= "<set label = 'Anio 2' value ='".$intTotalAnio2."' color = '6D8D16' />";
$strXML .= "<set label = 'Anio 3' value ='".$intTotalAnio3."' color = 'FFBA00' />";
$strXML .= "<set label = 'Anio 4' value ='".$intTotalAnio4."' color = '0000FF' />";
$strXML .= "<set label = 'Anio 4' value ='".$intTotalAnio5."' color = 'FFBA00' />";
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
echo renderChartHTML("Column3D.swf", "",$strXML, "ejemplo", 500, 400, false);
?>