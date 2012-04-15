<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Zoonosis - Eliminación de mascota</title>
<script language="JavaScript" type="text/javascript">

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
	font-style: normal;
	color: rgb(51,51,51);
	text-transform: none;
	border-top-color: rgb(255,255,255);
	border-right-color: rgb(255,255,255);
	border-bottom-color: rgb(255,255,255);
	border-left-color: rgb(255,255,255);
}
body,td,th {
	color: rgb(51,51,51);
	font-size: 18px;
}
-->
</style></head>

<body>
<br/><br/><table width="799" height="468" border="0" align="center" background="images/Bello Verde_800.jpg"   bgcolor="#FFFFFF" >
  
  <tr>
    <td width="793" colspan="2"><div align="center">
        <div align="right">
          <p><a href="index.php" title="Iniciar Sesi?n" target="_self">Volver a home</a></p>
          <p><a href="MenuAdministrador.php">Menu Admin</a> </p>
        </div>
    </div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <p align="center" class="Estilo3 Estilo19"><strong>Administraci&oacute;n Empleados</strong></p>
    </div></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><form id="form2" name="form2" method="post" action="">
      <p>
        <label for="Busqueda"></label>
        <input type="text" name="Busqueda" id="Busqueda" />
        <input type="submit" name="Modificar" id="Modificar" value="Buscar" />
      </p>
</form>
<p> Aqui deberian Salir los Resultados</p>
    <form id="form3" name="form3" method="post" action="">
      <input type="submit" name="Modificar" id="Modificar" value="Modificar" />
    </form>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><p>&nbsp;</p>
      <form id="form1" name="form1" method="post" action="">
        <label for="button3"></label>
        <a href="index.php" title="Iniciar Sesi?n" target="_self">Volver a home</a>
      </form></td>
  </tr>
</table>
</body>
</html>
