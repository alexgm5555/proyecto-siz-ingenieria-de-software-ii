<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php 


//Funcion utilizada para conectarse a la Base de Datos

function conexion($conex){

	$conex = mysql_connect("localhost", "root", "92120815");
	mysql_select_db('prueba');
}
?>
</body>
</html>