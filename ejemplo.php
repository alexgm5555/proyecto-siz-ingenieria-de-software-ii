<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Zoonosis - Eliminaci�n de mascota</title>
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
	color: rgb(0,102,0);
	text-transform: none;
}
body,td,th {
	color: rgb(0,102,0);
}
-->
</style></head>

<body>
<br/><br/><table width="796" border="0" align="center" background="images/Bello Verde_800.jpg"   bgcolor="#FFFFFF" >
  
  <tr>
    <td width="790" height="139" colspan="2"><div align="center">
        <div align="right"><a href="index.php" title="Iniciar Sesi?n" target="_self">Volver a home</a></div><img src="images/website_correction_256.jpg?q=tbn:ANd9GcSRJ_TeKNnn8Gn_EcTop6MJ0j57XOqV7kjY6Yd62StcrPukKOmc" alt="IMAGEN" width="152" height="108" align="middle"/></div></td>
  </tr>
  <tr>
    <td height="90" colspan="2"><div align="center">
      <p align="center" class="Estilo3 Estilo19"><strong>Eliminar Mascota</strong></p>
    </div></td>
  </tr>
  <tr>
    <td height="251" colspan="2"><table width="284" height="178" border="0" align="left">
      <tr>
        <th width="67" scope="col"><img src="images/usuarioo.jpg" width="50" height="52" alt="Usuario" /></th>
        <th width="207" align="center" valign="middle" scope="col"><form id="form1" name="form1" method="post" action="">
          <label>Usuario
            <input type="text" name="textfield" id="textfield" />
          </label>
        </form></th>
      </tr>
      <tr>
        <th scope="row"><img src="images/Codigo.jpg" width="50" height="48" alt="Codigo" /></th>
        <td align="center" valign="middle"><form id="form2" name="form2" method="post" action="">
          <label for="textfield2"><strong> C�digo</strong></label>
          <input type="text" name="textfield2" id="textfield2" />
        </form></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>