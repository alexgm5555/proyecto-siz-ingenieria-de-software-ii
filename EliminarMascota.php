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
<br/><br/><table width="828" height="468" border="0" align="center" background="images/Bello Verde_800.jpg"   bgcolor="#FFFFFF" >
  
  <tr>
    <td width="822" colspan="2"><div align="center">
        <div align="right"><a href="index.php" title="Iniciar Sesi?n" target="_self">Volver a home</a></div><img src="images/website_correction_256.jpg?q=tbn:ANd9GcSRJ_TeKNnn8Gn_EcTop6MJ0j57XOqV7kjY6Yd62StcrPukKOmc" alt="IMAGEN" width="152" height="108" align="middle"/></div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <p align="center" class="Estilo3 Estilo19"><strong>Eliminar Mascota</strong></p>
    </div></td>
  </tr>
  <tr>
    <td colspan="2"><table width="396" border="0" align="right">
      <tr>
        <th width="212" scope="col"><form id="form" name="form3" method="post" action="">
        </form></th>
        <th width="226" scope="col"><form id="form2" name="form4" method="post" action="">
          <input name="button2" type="submit" class="Estilo19" id="button2" value="Eliminar" />
        </form></th>
      </tr>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col"><form id="form9" name="form5" method="post" action="">
          <label for="textfield3"></label>
          <input type="text" name="textfield" id="textfield3" />
        </form></th>
      </tr>
      <tr>
        <th scope="col">Raza</th>
        <th scope="col"><form id="form10" name="form6" method="post" action="">
          <label for="textfield4"></label>
          <input type="text" name="textfield" id="textfield4" />
        </form></th>
      </tr>
      <tr>
        <th scope="col">Foto</th>
        <th scope="col"><img src="images/gato4.jpg" alt="" width="80" height="74" align="middle" /></th>
      </tr>
      <tr>
        <th scope="col">Edad</th>
        <th scope="col"><form id="form11" name="form7" method="post" action="">
          <label for="textfield5"></label>
          <input type="text" name="textfield" id="textfield5" />
        </form></th>
      </tr>
      <tr>
        <th scope="col">Disponible</th>
        <th scope="col"><form id="form12" name="form8" method="post" action="">
          <label for="textfield6"></label>
          <input type="text" name="textfield" id="textfield6" />
        </form></th>
      </tr>
    </table>
      <table width="396" border="0" align="right">
        <tr>
          <th width="212" scope="col"><form id="form3" name="form3" method="post" action="">
          </form></th>
          <th width="226" scope="col"><form id="form4" name="form4" method="post" action="">
            <input name="button" type="submit" class="Estilo19" id="button" value="Eliminar" />
          </form></th>
        </tr>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col"><form id="form5" name="form5" method="post" action="">
            <label for="textfield3"></label>
            <input type="text" name="textfield3" id="textfield3" />
          </form></th>
        </tr>
        <tr>
          <th scope="col">Raza</th>
          <th scope="col"><form id="form6" name="form6" method="post" action="">
            <label for="textfield4"></label>
            <input type="text" name="textfield4" id="textfield4" />
          </form></th>
        </tr>
        <tr>
          <th scope="col">Foto</th>
          <th scope="col"><img src="images/perro1.jpg" alt="" width="97" height="73" align="middle" /></th>
        </tr>
        <tr>
          <th scope="col">Edad</th>
          <th scope="col"><form id="form7" name="form7" method="post" action="">
            <label for="textfield5"></label>
            <input type="text" name="textfield5" id="textfield5" />
          </form></th>
        </tr>
        <tr>
          <th scope="col">Disponible</th>
          <th scope="col"><form id="form8" name="form8" method="post" action="">
            <label for="textfield6"></label>
            <input type="text" name="textfield6" id="textfield6" />
          </form></th>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><p>&nbsp;</p>
      <form id="form1" name="form1" method="post" action="">
        <label for="button3"></label>
        <input name="button3" type="submit" class="Estilo19" id="button3" value="Eliminar Todos los registros" />
      </form>
    <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
