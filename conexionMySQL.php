<?php
function Conectarse()
{
if (!($link=mysql_connect("localhost","root","92120815")))
{
echo "No se pudo hacer conexion a la base de datos.";
exit();
}
if (!mysql_select_db("zoonosis",$link))
{
exit();
}
return $link;
}
?>