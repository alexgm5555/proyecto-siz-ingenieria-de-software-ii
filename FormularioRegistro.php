<?php include ("conexionMySQL.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Zoonosis - Formulario de Registro</title>

<script language="javascript">

function validarh(e) 
{
	
	tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true;
    patron =/[-:\d\s]/;
    te = String.fromCharCode(tecla);
	letra=patron.test(te);
    return (letra);
}

function validarn(e) 
{
	tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true;
    patron = /\d/;
    te = String.fromCharCode(tecla);
    return patron.test(te);
}
//

</script>

<style type="text/css">
<!--
body,td,th {
	/* [disabled]color: #000; */
}
body {
	background-color: #FFF;
}
.Estilo3 {
	font-weight: bold;
	font-size: 28px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-style: italic;
}
.Estilo14 {font-family: Verdana, Arial, Helvetica, sans-serif; color: #333333; font-size: 12px;}
.Estilo18 {font-size: 12px; color: #FFFFFF; font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif; }
.Estilo19 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-style: italic;
}
-->
</style>

</head>

<body>

    <br/><br/><table width="796" border="0" align="center" background="images/Bello Verde_800.jpg"   bgcolor="#FFFFFF" >
    <tr>
    <td width="790" height="139" colspan="2"><div align="center"><div>
      <div align="right"></div>
    </div><img src="images/images.jpg?q=tbn:ANd9GcSRJ_TeKNnn8Gn_EcTop6MJ0j57XOqV7kjY6Yd62StcrPukKOmc" alt="IMAGEN" width="152" height="108" align="middle"/></div></td>
  </tr>
    <tr>
    <td height="90" colspan="2"><div align="center">
      <p class="Estilo3 Estilo19">Registro de Usuarios </p>
      <p class="Estilo3">Zoonosis</p>
    </div></td>
  </tr>
    <tr>
    <td height="251" colspan="2"><form id="form1" name="form1" method="post" action="validar.php">
        <table width="389" border="0" align="center" >
          <tr>
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
                            
          </tr>
        </table>
        <br/>
    </form></td>
  </tr>
</table>  
    
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

</form>

</body>
</html>
