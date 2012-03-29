<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Zoonosis -  pagina de bienvenida Usuario Empleado</title>
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
.Estilo15 {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 18px;
	font-style: normal;
	font-weight: 100;
	color: #000;
	text-decoration: blink;
}
-->
</style></head>

<body bgproperties="fixed">

 <br/><br/><table width="796" border="0" align="center"    bgcolor="" > 
  <tr>
    <td width="790" height="139" colspan="2"><div align="center">
        <div align="right"><a href="index.php" title="Buscar Mascota" target="_self" class="Estilo19">Cerrar Sesión</a></div><img src="images/images.jpg?q=tbn:ANd9GcSRJ_TeKNnn8Gn_EcTop6MJ0j57XOqV7kjY6Yd62StcrPukKOmc" alt="IMAGEN" width="152" height="108" align="middle"/></div></td>
  </tr>
  <tr>
    <td height="76" colspan="2"><div align="center">
      <p class="Estilo3 Estilo19">Menu Usuario Empleado</p>
</div></td>
  </tr>
  <tr>
    <td height="251" colspan="2"><form action="validar.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <table width="444" height="373" border="0" align="center" >
          <tr>
            <td width="647" height="226"><fieldset>
              <legend class="Estilo18">Menu de Usuario Empleado<br/>
              </legend>
              <table width="347" height="341" border="0" align="center" bgcolor="">
                <tr>
                  
                    
                
                
                  <td width="136" height="64"><div align="center"><a href="RegistrarMascota.php"><img src="images/gato4.jpg" alt="usuario" width="70" height="70" /></a></div></td>
                  <td width="312"><h1 class="Estilo15"> <a href="RegistrarMascota.php" class="Estilo15">Registrar Mascota</a></h1></td>
                </tr>
               
                
                    
                  <td height="72"><div align="center"><a href="EliminarMascota.php"><img src="images/gato4.jpg" alt="usuario" width="70" height="70" /></a></div></td>
                  <td><span class="Estilo14"> </span>
                    <div align="left" ><a href="EliminarMascota.php" class="Estilo15">Eliminar Registro de Mascota</a><br/>
                    </div></td>
                    
                   
                </tr>
                 
                
                <tr>
                  <td height="21" colspan="5"><label></label>
                      <div align="center"></div></td>
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
