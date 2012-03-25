<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Zoonosis -  RegistrarMascota</title>
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
</style></head>

<body bgproperties="fixed">

 <br/><br/><table width="796" border="0" align="center"    bgcolor="" > 
  <tr>
    <td width="790" height="139" colspan="2"><div align="center">
        <div align="right">
          <p><a href="index.php" title="Buscar Mascota" target="_self">Cerrar Sesión</a></p>
          <p><a href="MenuUsuarioParticular.php">Menu de Usuario</a></p>
        </div><img src="images/images.jpg?q=tbn:ANd9GcSRJ_TeKNnn8Gn_EcTop6MJ0j57XOqV7kjY6Yd62StcrPukKOmc" alt="IMAGEN" width="152" height="108" align="middle"/></div></td>
  </tr>
  <tr>
    <td height="76" colspan="2"><div align="center">
      <p class="Estilo3 Estilo19">Registro de Mascotas para Adopción</p>
      <p class="Estilo3 Estilo19">Zoonosis</p>
    </div></td>
  </tr>
  <tr>
    <td height="251" colspan="2"><form action="validar.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <table width="717" height="391" border="0" align="center" >
          <tr>
            <td width="647" height="226"><fieldset>
              <legend class="Estilo18">Buscar Mascotas<br/>
              </legend>
              <table width="576" height="301" border="0" align="center" bgcolor="">
                <tr>
                  
                    
                
                
                  <td width="70" height="64"><div align="center"><img src="images/gato4.jpg" alt="usuario" width="70" height="70" /></div></td>
                  <td width="189"><span class="Estilo14"> </span>
                    <div align="left" ><span class="Estilo14"><strong>Tipo de Animal:
                      </strong> </span>
                      <label><br/>
                        </label>
                      <label for="TipoAnimal"></label>
                      <select name="TipoAnimal" id="Tipo_de_Animal" tabindex="2">
                        <option value="Perro">Perro</option>
                        <option value="Gato">Gato</option>
                        </select>
  <br/>
                    </div></td>
                    <td height="64"><div align="center"><img src="images/perro3.jpg" alt="usuario" width="70" height="70" /></div></td>
                  <td><span class="Estilo14"> </span>
                    <div align="left" ><span class="Estilo14"><strong>Ciudad de origen:
                        </strong> </span>
                      <label><br/>
                      </label>
                      <label for="Raza2"></label>
                      <input name="CiudadAnimal" type="Text" maxlength="16" tabindex="2" />
                      <br/>
                    </div></td>
                </tr>
                <tr>
                <td height="64"><div align="center"><img src="images/gato4.jpg" alt="usuario" width="70" height="70" /></div></td>
                  <td><span class="Estilo14"> </span>
                    <div align="left" ><span class="Estilo14"><strong>Sexo:</strong>
                        </span>
                      <label><br/>
                      </label>
                      <label for="Raza2"></label>
                      <input name="Sexo" type="Text" maxlength="16" tabindex="2" id="Sexo" />
                      <br/>
                    </div></td>
                  <td height="64"><div align="center"><img src="images/gato4.jpg" alt="usuario" width="70" height="70" /></div></td>
                  <td><span class="Estilo14"> </span>
                    <div align="left" ><span class="Estilo14"><strong>Raza:</strong> </span>
                      <label><br/>
                      </label>
                      <label for="Raza2"></label>
                      <input name="Raza" type="Text" maxlength="16" tabindex="2" />
                      <br/>
                    </div></td>
                    
                
                  
                    
                </tr>
                
                    
                  <td height="72"><div align="center"><img src="images/gato4.jpg" alt="usuario" width="70" height="70" /></div></td>
                  <td><span class="Estilo14"> </span>
                    <div align="left" ><span class="Estilo14"><strong>Foto:</strong> </span>
                      <label><br/>
                      </label>
                      <label for="Raza2"></label>
                      <input name="foto" type="file" id="foto" size="23" />
<br/>
                    </div></td>
                    
                    <td height="64"><div align="center"><img src="images/perro3.jpg" alt="usuario" width="70" height="70" /></div></td>
                  <td><span class="Estilo14"> </span>
                    <div align="left" ><span class="Estilo14"><strong>Descripcion:</strong></span>
                      <label><br/>
                    </label>
                      <label for="Raza2"></label>
                      <textarea name="Descripcion" cols="30" tabindex="2" id="Descripcion"></textarea>
                      <br/>
                    </div></td>
                </tr>
                 
                
                <tr>
                  <td height="21" colspan="5"><label></label>
                      <div align="center">
                        <label>
                        <input name="Generar registro" type="submit" class="Estilo14" id="Generar registro" value="Generar Registro" />
                        </label>
                    </div></td>
                </tr>
            </table>
              <br/>
            </fieldset></td>
          </tr>
        </table>
        <br/>
    </form></td>
  </tr>
</table>

</body>
</html>
