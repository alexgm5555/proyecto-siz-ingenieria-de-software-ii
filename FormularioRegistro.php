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
body,td,th {
	font-size: xx-small;
}
body {
	background-image: url(images/Bello%20Verde_1200.jpg);
	background-repeat: no-repeat;
}
a {
	font-size: 9px;
}
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<body bgproperties="fixed" >

<br/><br/><table width="796" border="0" align="center" background="images/Bello Verde_800.jpg"   bgcolor="#FFFFFF" > 
  <tr>
    <td width="790" height="139" colspan="2"><div align="center">
    <div align="right"><a href="index.php" title="Registro de Usuarios" target="_self">Cerrar Sesión</a></div><img src="images/images.jpg?q=tbn:ANd9GcSRJ_TeKNnn8Gn_EcTop6MJ0j57XOqV7kjY6Yd62StcrPukKOmc" alt="IMAGEN" width="152" height="108" align="middle"/></div></td>
  </tr>
  <tr>
    <td height="76" colspan="2"><div align="center">
      <p class="Estilo3 Estilo19">Registro de Usuarios</p>
      <p class="Estilo3 Estilo19">Zoonosis</p>
    </div></td>
  </tr>
  <tr>
  <td height="251" colspan="2"><form action="validar.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <table width="717" height="391" border="0" align="center" >
          <tr>
            <td width="647" height="226"><fieldset>
              <legend class="Estilo18">Registro de Usuarios<br/>
              </legend>
              <table width="576" height="185" border="0" align="center" bgcolor="">
              <tr>
                <td width="70" height="72"><div align="center">
                  <table width="576" height="185" border="0" align="center" bgcolor="">
                    <tr>
                      <td width="70" height="72"><div align="center"><img src="images/gato4.jpg" alt="usuario" width="70" height="70" /></div></td>
                      <td width="189"><span class="Estilo14"> </span>
                        <div align="left" ><span class="Estilo14">Nombres:
                          <label> </label>
                          </span>
                          <label><br/>
                          </label>
                          <label for="TipoAnimal2"></label>
                          <input type="text" name="Nombres" id="Nombres" />
                          <br/>
                        </div></td>
                      <td height="64"><div align="center"><img src="images/perro3.jpg" alt="usuario" width="70" height="70" /></div></td>
                  <td><span class="Estilo14"> </span>
                    <div align="left" ><span class="Estilo14">Apellidos:
                        <label> </label>
                      </span>
                      <label><br/>
                      </label>
                      <label for="Raza2"></label>
                      <input name="Apellidos" type="Text" maxlength="16" tabindex="2" id="Apellidos" />
                      <br/>
                    </div></td>
                    </tr>
                    <tr>
                      <td width="70" height="72"><div align="center"><img src="images/gato4.jpg" alt="usuario" width="70" height="70" /></div></td>
                      <td width="189"><span class="Estilo14"> </span>
                        <div align="left" ><span class="Estilo14">C.C.:
                            <label> </label>
                          </span>
                          <label><br/>
                          </label>
                          <label for="TipoAnimal2"></label>
                          <input type="text" name="CC" id="CC" />
                          <br/>
                        </div></td>
                      <td height="64"><div align="center"><img src="images/perro3.jpg" alt="usuario" width="70" height="70" /></div></td>
                  <td><span class="Estilo14"> </span>
                    <div align="left" ><span class="Estilo14">Correo Electronico:
                        <label> </label>
                      </span>
                      <label><br/>
                      </label>
                      <label for="Raza2"></label>
                      <input name="CorreoElectronicol" type="Text" maxlength="16" tabindex="2" id="CorreoElectronicol" />
                      <br/>
                    </div></td>
                    </tr>
                    <tr>
                      <td width="70" height="72"><div align="center"><img src="images/gato4.jpg" alt="usuario" width="70" height="70" /></div></td>
                      <td width="189"><span class="Estilo14"> </span>
                        <div align="left" ><span class="Estilo14">Ciudad:
                            <label> </label>
                          </span>
                          <label><br/>
                          </label>
                          <label for="TipoAnimal2"></label>
                          <input type="text" name="Ciudad" id="Ciudad" />
                          <br/>
                        </div></td>
                      <td height="64"><div align="center"><img src="images/perro3.jpg" alt="usuario" width="70" height="70" /></div></td>
                  <td><span class="Estilo14"> </span>
                    <div align="left" ><span class="Estilo14">No Celular:
                        <label> </label>
                      </span>
                      <label><br/>
                      </label>
                      <label for="Raza2"></label>
                      <input name="Celular" type="Text" maxlength="16" tabindex="2" id="Celular" />
                      <br/>
                    </div></td>
                    </tr>
                    <tr>
                    <tr>
                      <td width="70" height="72"><div align="center"><img src="images/gato4.jpg" alt="usuario" width="70" height="70" /></div></td>
                      <td width="189"><span class="Estilo14"> </span>
                        <div align="left" ><span class="Estilo14">Nombre de Usuario:
                            <label> </label>
                          </span>
                          <label><br/>
                          </label>
                          <label for="TipoAnimal2"></label>
                          <input type="text" name="NombreUsuario" id="NombreUsuario" />
                          <br/>
                        </div></td>
                      <td height="64"><div align="center"><img src="images/perro3.jpg" alt="usuario" width="70" height="70" /></div></td>
                  <td><span class="Estilo14"> </span>
                    <div align="left" ><span class="Estilo14">Contraseña:
                        <label> </label>
                      </span>
                      <label><br/>
                      </label>
                      <label for="Raza2"></label>
                      <input name="Contarseña" type="Text" maxlength="16" tabindex="2" id="Contarseña" />
                      <br/>
                    </div></td>
                    </tr>
                    <tr>
                    <td height="64"><div align="center"><img src="images/perro3.jpg" alt="usuario" width="70" height="70" /></div></td>
                  <td><span class="Estilo14"> </span>
                    <div align="left" ><span class="Estilo14">Confirmar Contraseña:
                        <label> </label>
                      </span>
                      <label><br/>
                      </label>
                      <label for="Raza2"></label>
                      <input name="ConfContraseña" type="Text" maxlength="16" tabindex="2" id="ConfContraseña" />
                      <br/>
                    </div></td>
                    </tr>
                      <td height="21" colspan="5"><label></label>
                        <div align="center">
                          <label>
                            <input name="Generar registro" type="submit" class="Estilo14" id="Generar registro" value="Generar Registro" />
                          </label>
                        </div></td>
                    </tr>
                  </table>
                </div></td>
              </tr>
              </table>
              <br/>
            </fieldset></td>
          </tr>
        </table>
        <br/>
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

    </form></td>
  </tr>

</table>
</body>
</html>

</body>
</html>