<?php include ("conexionMySQL.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>


<form action="ResolverFormulario.php" method="get">
  <p>Nombres
    <input type="text" name="nombre" width="100px" id="nombre" /><br />
  </p>
  <p>Apellidos
    <input type="text" name="apellido" width="100px" id="apellido" />
  <br />
  <label for="documento"><br />
    CC</label>
  <input name="documento" type="text" id="documento" />
  <label for="correo"><br />
    <br />
    Correo Electronico</label>
  <input type="text" name="correo" id="correo" />
  </p>
    
    
  <?php 
  
  //Este bloque de PHP permitira que las variables Pais y Ciudad puedan interactua dinamicamente
  //con la desicion del usuario y la Base de Datos
  
$conexion = true;

conexion($conexion);

	if($conexion){

		$consulta = mysql_query("select idPaises,Nombre from prueba.Paises order by Nombre ASC");
		echo "Pais  "."<select name = 'Pais' id = 'Pais'>";
		while($fila = mysql_fetch_array($consulta)){
			echo "<option value='".$fila[1]."'>".utf8_encode($fila[1])."</option>";
		}
		echo "</select>";
		
		$consulta2 = mysql_query("select idCiudades, Pais, Nombre from prueba.Ciudades where Pais = 'Argentina' order by Nombre ASC");
		echo "Ciudad "."<select name = 'Ciudad' id = 'Ciudad'>";
		while($fila2 = mysql_fetch_array($consulta2)){
			echo "<option value='".$fila2[2]."'>".utf8_encode($fila2[2])."</option>";
		}
		echo "</select>";
		}
	else{
		echo ("No ha sido posible establecer la conexion");}
?>

  <p>
    <label for="ciudad">Ciudad</label>
    <input type="text" name="ciudad" id="ciudad" />
  </p>
  <p>
    <label for="celu">Celular</label>
    <input type="text" name="celu" id="celu" />
    <label for="user"><br />
      <br />
    Nombre de Usuario</label>
    <input type="text" name="user" id="user" />
    <label for="password"><br />
      <br />
    Contraseña</label>
    <input type="text" name="password" id="password" />
  </p>
  <p>
    <input type="submit" value="Registrarse" />
  </p>
</form>

</body>
</html>
