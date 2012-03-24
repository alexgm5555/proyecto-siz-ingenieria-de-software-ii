<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Zoonosis - Login</title>
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
</style></head>

<body>
<br/><br/><table width="796" border="0" align="center" background="images/Bello Verde_800.jpg"   bgcolor="#FFFFFF" >
  
  <tr>
    <td width="790" height="139" colspan="2"><div align="center">
        <div align="right"><a href="index.php" title="Iniciar Sesi?n" target="_self">Volver a home</a></div><img src="images/images.jpg?q=tbn:ANd9GcSRJ_TeKNnn8Gn_EcTop6MJ0j57XOqV7kjY6Yd62StcrPukKOmc" alt="IMAGEN" width="152" height="108" align="middle"/></div></td>
  </tr>
  <tr>
    <td height="90" colspan="2"><div align="center">
      <p class="Estilo3 Estilo19">&nbsp;</p>
      <p class="Estilo3 Estilo19">Zoonosis</p>
    </div></td>
  </tr>
  <tr>
    <td height="251" colspan="2"><form id="form1" name="form1" method="post" action="validar.php">
        <table width="389" border="0" align="center" >
          <tr>
            <td width="383" height="226"><fieldset>
              <legend class="Estilo18">Inicio de sesi&oacute;n</legend>
              <br/>
              <table width="348" border="0" align="center" bgcolor="#FFFFFF">
                <tr>
                  <td width="99" height="64"><div align="center"><img src="images/usuarioo.jpg" alt="usuario" width="70" height="70" /></div></td>
                  <td width="239"><span class="Estilo14"> </span>
                      <div align="left" ><span class="Estilo14">Usuario:
                        <label> </label>
                        </span>
                          <label><br/>
                          <input name="usuario" type="text"  maxlength="25" tabindex="1" />
                          </label>
                          <br/>
                    </div></td>
                
                  <td height="64"><div align="center"><img src="images/llave.jpg" alt="llaveusuario" width="54" height="72" /></div></td>
                  <td><span class="Estilo14">C&oacute;digo mascota:
                      <label> </label>
                    </span>
                      <label><br/>
                      <input name="codigo_animal" type="text" maxlength="16" tabindex="2" id="codigo_animal" />
                    </label></td>
                </tr>
                <tr>
                  <td height="21" colspan="2"><label></label>
                      <div align="center">
                        <label>
                        <input type="submit" name="Submit" value="Iniciar Sesi&oacute;n" />
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
