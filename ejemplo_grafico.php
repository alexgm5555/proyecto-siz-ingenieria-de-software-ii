<?php
// archivos incluidos. Librer�as PHP para poder graficar.
include "FusionCharts.php";
include "Functions.php";
// Gr�fico de Barras. 4 Variables, 4 barras.
// Estas variables ser�n usadas para representar los valores de cada unas de las 4 barras.
// Inicializo las variables a utilizar.
$intTotalAnio1 = 350;
$intTotalAnio2 = 440;
$intTotalAnio3 = 118;
$intTotalAnio4 = 145;
$intTotalAnio5 = 145;
// $strXML: Para concatenar los par�metros finales para el gr�fico.
$strXML = "";
// Armo los par�metros para el gr�fico. Todos estos datos se concatenan en una variable.
// Encabezado de la variable XML. Comienza con la etiqueta "Chart".
// caption: define el t�tulo del gr�fico.
// bgColor: define el color de fondo que tendr� el gr�fico.
// baseFontSize: Tama�o de la fuente que se usar� en el gr�fico.
// showValues: = 1 indica que se mostrar�n los valores de cada barra. = 0 No mostrar� los valores en el gr�fico.
// xAxisName: define el texto que ir� sobre el eje X. Abajo del gr�fico. Tambi�n est� xAxisName.
$strXML = "<chart caption = 'Estad�sticas Generales' bgColor='#CDDEE5' baseFontSize='12' showValues='1' xAxisName='Variables' >";
// Armado de cada barra.
// set label: asigno el nombre de cada barra.
// value: asigno el valor para cada barra.
// color: color que tendr� cada barra. Si no lo defino, tomar� colores por defecto.
$strXML .= "<set label = 'Anio 1' value ='".$intTotalAnio1."' color = 'EA1000' />";
$strXML .= "<set label = 'Anio 2' value ='".$intTotalAnio2."' color = '6D8D16' />";
$strXML .= "<set label = 'Anio 3' value ='".$intTotalAnio3."' color = 'FFBA00' />";
$strXML .= "<set label = 'Anio 4' value ='".$intTotalAnio4."' color = '0000FF' />";
$strXML .= "<set label = 'Anio 4' value ='".$intTotalAnio5."' color = 'FFBA00' />";
// Cerramos la etiqueta "chart".
$strXML .= "</chart>";
// Por �ltimo imprimo el gr�fico.
// renderChartHTML: funci�n que se encuentra en el archivo FusionCharts.php
// Env�a varios par�metros.
// 1er par�metro: indica la ruta y nombre del archivo "swf" que contiene el gr�fico. En este caso Columnas ( barras) 3D
// 2do par�metro: indica el archivo "xml" a usarse para graficar. En este caso queda vac�o "", ya que los par�metros lo pasamos por PHP.
// 3er par�metro: $strXML, es el archivo par�metro para el gr�fico. 
// 4to par�metro: "ejemplo". Es el identificador del gr�fico. Puede ser cualquier nombre.
// 5to y 6to par�metro: indica ancho y alto que tendr� el gr�fico.
// 7mo par�metro: "false". Trata del "modo debug". No es im,portante en nuestro caso, pero pueden ponerlo a true ara probarlo.
echo renderChartHTML("Column3D.swf", "",$strXML, "ejemplo", 500, 400, false);
?>