<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:ice="http://ns.adobe.com/incontextediting">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Zoonosis -  Registrar Mascota-Empleado</title>
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
<!--
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
<style type="text/css">
-->
.contenedor{
	height: 280px;
	width: 790px;
	overflow: scroll;
	visibility: visible;
	}
-->
</style>
</head>

<body bgproperties="fixed">
<br/><br/><table width="796" border="0" align="center" background="images/Bello Verde_800.jpg"   bgcolor="#FFFFFF" > 
  
  <tr>
    <td width="790" height="139" colspan="2"><div align="center">
        <div align="right">
          <p><a href="index.php" title="Buscar Mascota" target="_self">Cerrar Sesión</a></p>
          <p><a href="MenuUsuarioParticular.php">Menu de Usuario</a></p>
        </div><img src="images/images.jpg?q=tbn:ANd9GcSRJ_TeKNnn8Gn_EcTop6MJ0j57XOqV7kjY6Yd62StcrPukKOmc" alt="IMAGEN" width="152" height="108" align="middle"/></div></td>
  </tr>
  <tr>
    <td height="76" colspan="2"><div align="center">
      <p class="Estilo3 Estilo19">Registro  de Mascotas</p>
      <p class="Estilo3 Estilo19">Zoonosis</p>
    </div></td>
  </tr>
  <tr>
    <td height="251" colspan="2">
<form action="RegistrarMascotaEmpleadoApp.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>
      
       <div style class="contenedor">
        <table width="500" height="100"  border="0" align="center">
          <tr>
            <td width="600" height="999"><fieldset>
              <legend class="Estilo18">Registrar Mascotas</legend>
              
              
              
              
              
              
              
              
              
              
              
              
          <noscript><br><br>Your browser must support javascript.</noscript>
<link href='//docs.google.com/static/spreadsheets/client/css/4237256498-waffle_k_ltr.css' type='text/css' rel='stylesheet'><style type="text/css">.waffle td, .grid-fixed-table td, td.mimic-overlay-cell {white-space:normal;}
    html { margin: 0; padding: 0; }
    body { margin: 0; padding: 0; }

    .error {
      font: 14px arial, sans, sans-serif;
      position: absolute;
      top: 50%;
      left: 50%;
      width: 100px;
      height: 80px;
      margin-top: -40px;
      margin-left: -150px;
      padding: 10px;
      border: 1px solid;
      background: #6F0;
      z-index: 100;
      text-align: center;
    }
</style>  
              
              
              
              
              
              
              
              
              
              <table class="waffle" >
                <thead>
                  <tr>
                    <th height="24" class="row-header freezebar-origin-ltr"></th>
                    <th style="width:90px" class="column-headers-background"></th>
                    <th style="width:120px" class="column-headers-background">Imagen</th>
                    <th style="width:90px" class="column-headers-background">Tipo</th>
                    <th style="width:90px" class="column-headers-background">Sexo</th>
                    <th style="width:90px" class="column-headers-background">Raza</th>
                    <th style="width:90px" class="column-headers-background">Color</th>
                    <th style="width:40px" class="column-headers-background">Tamaño</th>
                    <th style="width:40px" class="column-headers-background">Edad-</th>
                    <th style="width:40px" class="column-headers-background">Peso</th>
                  </tr>
                </thead>
                <tbody>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">1</div></th>
                    <td colspan="2" ice:editable="*"><label for="1_Aimage"></label>
                      <input name="1_Aimage" type="file" id="1_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><label for="1_B"></label>
                      <select name="1_B" id="1_B">
                        <option>Perro</option>
                        <option>Gato</option>
                      </select></td>
                    <td ice:editable="*"><label for="1_C"></label>
                      <select name="1_C" id="1_C">
                        <option>Macho</option>
                        <option>Hembra</option>
                      </select></td>
                    <td ice:editable="*"><input type="text" name="1_D" id="1_D" /></td>
                    <td ice:editable="*"><input type="text" name="1_E" id="1_E" /></td>
                    <td ice:editable="*"><input type="text" name="1_F" id="1_F" /></td>
                    <td ice:editable="*"><input type="text" name="1_G" id="1_G" /></td>
                    <td ice:editable="*"><input type="text" name="1_H" id="1_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">2</div></th>
                    <td colspan="2" ice:editable="*"><label for="2_Aimage"></label>
                      <input name="2_Aimage" type="file" id="2_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="2_B" id="2_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="2_C" id="2_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="2_D" id="2_D" /></td>
                    <td ice:editable="*"><input type="text" name="2_E" id="2_E" /></td>
                    <td ice:editable="*"><input type="text" name="2_F" id="2_F" /></td>
                    <td ice:editable="*"><input type="text" name="2_G" id="2_G" /></td>
                    <td ice:editable="*"><input type="text" name="2_H" id="2_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">3</div></th>
                    <td colspan="2" ice:editable="*"><label for="3_Aimage"></label>
                      <input name="3_Aimage" type="file" id="3_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="3_B" id="3_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="3_C" id="3_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="3_D" id="3_D" /></td>
                    <td ice:editable="*"><input type="text" name="3_E" id="3_E" /></td>
                    <td ice:editable="*"><input type="text" name="3_F" id="3_F" /></td>
                    <td ice:editable="*"><input type="text" name="3_G" id="3_G" /></td>
                    <td ice:editable="*"><input type="text" name="3_H" id="3_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">4</div></th>
                    <td colspan="2" ice:editable="*"><label for="4_Aimage"></label>
                      <input name="4_Aimage" type="file" id="4_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="4_B" id="4_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="4_C" id="4_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="4_D" id="4_D" /></td>
                    <td ice:editable="*"><input type="text" name="4_E" id="4_E" /></td>
                    <td ice:editable="*"><input type="text" name="4_F" id="4_F" /></td>
                    <td ice:editable="*"><input type="text" name="4_G" id="4_G" /></td>
                    <td ice:editable="*"><input type="text" name="4_H" id="4_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">5</div></th>
                    <td colspan="2" ice:editable="*"><label for="5_Aimage"></label>
                      <input name="5_Aimage" type="file" id="5_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="5_B" id="5_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="5_C" id="5_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="5_D" id="5_D" /></td>
                    <td ice:editable="*"><input type="text" name="5_E" id="5_E" /></td>
                    <td ice:editable="*"><input type="text" name="5_F" id="5_F" /></td>
                    <td ice:editable="*"><input type="text" name="5_G" id="5_G" /></td>
                    <td ice:editable="*"><input type="text" name="5_H" id="5_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">6</div></th>
                    <td colspan="2" ice:editable="*"><label for="6_Aimage"></label>
                      <input name="6_Aimage" type="file" id="6_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="6_B" id="6_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="6_C" id="6_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="6_D" id="6_D" /></td>
                    <td ice:editable="*"><input type="text" name="6_E" id="6_E" /></td>
                    <td ice:editable="*"><input type="text" name="6_F" id="6_F" /></td>
                    <td ice:editable="*"><input type="text" name="6_G" id="6_G" /></td>
                    <td ice:editable="*"><input type="text" name="6_H" id="6_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">7</div></th>
                    <td colspan="2" ice:editable="*"><label for="7_Aimage"></label>
                      <input name="7_Aimage" type="file" id="7_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="7_B" size="1" id="7_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="7_C" id="7_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="7_D" id="7_D" /></td>
                    <td ice:editable="*"><input type="text" name="7_E" id="7_E" /></td>
                    <td ice:editable="*"><input type="text" name="7_F" id="7_F" /></td>
                    <td ice:editable="*"><input type="text" name="7_G" id="7_G" /></td>
                    <td ice:editable="*"><input type="text" name="7_H" id="7_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">8</div></th>
                    <td colspan="2" ice:editable="*"><label for="8_Aimage"></label>
                      <input name="8_Aimage" type="file" id="8_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="8_B" id="8_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="8_C" id="8_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="8_D" id="8_D" /></td>
                    <td ice:editable="*"><input type="text" name="8_E" id="8_E" /></td>
                    <td ice:editable="*"><input type="text" name="8_F" id="8_F" /></td>
                    <td ice:editable="*"><input type="text" name="8_G" id="8_G" /></td>
                    <td ice:editable="*"><input type="text" name="8_H" id="8_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">9</div></th>
                    <td colspan="2" ice:editable="*"><label for="9_Aimage"></label>
                      <input name="9_Aimage" type="file" id="9_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="9_B" id="9_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="9_C" id="9_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="9_D" id="9_D" /></td>
                    <td ice:editable="*"><input type="text" name="9_E" id="9_E" /></td>
                    <td ice:editable="*"><input type="text" name="9_F" id="9_F" /></td>
                    <td ice:editable="*"><input type="text" name="9_G" id="9_G" /></td>
                    <td ice:editable="*"><input type="text" name="9_H" id="9_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">10</div></th>
                    <td colspan="2" ice:editable="*"><label for="10_Aimage"></label>
                      <input name="10_Aimage" type="file" id="10_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="10_B" id="10_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="10_C" id="10_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="10_D" id="10_D" /></td>
                    <td ice:editable="*"><input type="text" name="10_E" id="10_E" /></td>
                    <td ice:editable="*"><input type="text" name="10_F" id="10_F" /></td>
                    <td ice:editable="*"><input type="text" name="10_G" id="10_G" /></td>
                    <td ice:editable="*"><input type="text" name="10_H" id="10_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">11</div></th>
                    <td colspan="2" ice:editable="*"><label for="11_Aimage"></label>
                      <input name="11_Aimage" type="file" id="11_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="11_B" id="11_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="11_C" id="11_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="11_D" id="11_D" /></td>
                    <td ice:editable="*"><input type="text" name="11_E" id="11_E" /></td>
                    <td ice:editable="*"><input type="text" name="11_F" id="11_F" /></td>
                    <td ice:editable="*"><input type="text" name="11_G" id="11_G" /></td>
                    <td ice:editable="*"><input type="text" name="11_H" id="11_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">12</div></th>
                    <td colspan="2" ice:editable="*"><label for="12_Aimage"></label>
                      <input name="12_Aimage" type="file" id="12_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="12_B" id="12_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="12_C" id="12_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="12_D" id="12_D" /></td>
                    <td ice:editable="*"><input type="text" name="12_E" id="12_E" /></td>
                    <td ice:editable="*"><input type="text" name="12_F" id="12_F" /></td>
                    <td ice:editable="*"><input type="text" name="12_G" id="12_G" /></td>
                    <td ice:editable="*"><input type="text" name="12_H" id="12_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">13</div></th>
                    <td colspan="2" ice:editable="*"><label for="13_Aimage"></label>
                      <input name="13_Aimage" type="file" id="13_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="13_B" id="13_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="13_C" id="13_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="13_D" id="13_D" /></td>
                    <td ice:editable="*"><input type="text" name="13_E" id="13_E" /></td>
                    <td ice:editable="*"><input type="text" name="13_F" id="13_F" /></td>
                    <td ice:editable="*"><input type="text" name="13_G" id="13_G" /></td>
                    <td ice:editable="*"><input type="text" name="13_H" id="13_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">14</div></th>
                    <td colspan="2" ice:editable="*"><label for="14_Aimage"></label>
                      <input name="14_Aimage" type="file" id="14_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="14_B" id="14_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="14_C" id="14_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="14_D" id="14_D" /></td>
                    <td ice:editable="*"><input type="text" name="14_E" id="14_E" /></td>
                    <td ice:editable="*"><input type="text" name="14_F" id="14_F" /></td>
                    <td ice:editable="*"><input type="text" name="14_G" id="14_G" /></td>
                    <td ice:editable="*"><input type="text" name="14_H" id="14_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">15</div></th>
                    <td colspan="2" ice:editable="*"><label for="15_Aimage"></label>
                      <input name="15_Aimage" type="file" id="15_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="15_B" id="15_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="15_C" id="15_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="15_D" id="15_D" /></td>
                    <td ice:editable="*"><input type="text" name="15_E" id="15_E" /></td>
                    <td ice:editable="*"><input type="text" name="15_F" id="15_F" /></td>
                    <td ice:editable="*"><input type="text" name="15_G" id="15_G" /></td>
                    <td ice:editable="*"><input type="text" name="15_H" id="15_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">16</div></th>
                    <td colspan="2" ice:editable="*"><label for="16_Aimage"></label>
                      <input name="16_Aimage" type="file" id="16_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="16_B" id="16_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="16_C" id="16_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="16_D" id="16_D" /></td>
                    <td ice:editable="*"><input type="text" name="16_E" id="16_E" /></td>
                    <td ice:editable="*"><input type="text" name="16_F" id="16_F" /></td>
                    <td ice:editable="*"><input type="text" name="16_G" id="16_G" /></td>
                    <td ice:editable="*"><input type="text" name="16_H" id="16_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">17</div></th>
                    <td colspan="2" ice:editable="*"><label for="17_Aimage"></label>
                      <input name="17_Aimage" type="file" id="17_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="17_B" id="17_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="17_C" id="17_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="17_D" id="17_D" /></td>
                    <td ice:editable="*"><input type="text" name="17_E" id="17_E" /></td>
                    <td ice:editable="*"><input type="text" name="17_F" id="17_F" /></td>
                    <td ice:editable="*"><input type="text" name="17_G" id="17_G" /></td>
                    <td ice:editable="*"><input type="text" name="17_H" id="17_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">18</div></th>
                    <td colspan="2" ice:editable="*"><label for="18_Aimage"></label>
                      <input name="18_Aimage" type="file" id="18_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="18_B" id="18_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="18_C" id="18_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="18_D" id="18_D" /></td>
                    <td ice:editable="*"><input type="text" name="18_E" id="18_E" /></td>
                    <td ice:editable="*"><input type="text" name="18_F" id="18_F" /></td>
                    <td ice:editable="*"><input type="text" name="18_G" id="18_G" /></td>
                    <td ice:editable="*"><input type="text" name="18_H" id="18_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">19</div></th>
                    <td colspan="2" ice:editable="*"><label for="19_Aimage"></label>
                      <input name="19_Aimage" type="file" id="19_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="19_B" id="19_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="19_C" id="19_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="19_D" id="19_D" /></td>
                    <td ice:editable="*"><input type="text" name="19_E" id="19_E" /></td>
                    <td ice:editable="*"><input type="text" name="19_F" id="19_F" /></td>
                    <td ice:editable="*"><input type="text" name="19_G" id="19_G" /></td>
                    <td ice:editable="*"><input type="text" name="19_H" id="19_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">20</div></th>
                    <td colspan="2" ice:editable="*"><label for="20_Aimage"></label>
                      <input name="20_Aimage" type="file" id="20_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="20_B" id="20_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="20_C" id="20_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="20_D" id="20_D" /></td>
                    <td ice:editable="*"><input type="text" name="20_E" id="20_E" /></td>
                    <td ice:editable="*"><input type="text" name="20_F" id="20_F" /></td>
                    <td ice:editable="*"><input type="text" name="20_G" id="20_G" /></td>
                    <td ice:editable="*"><input type="text" name="20_H" id="20_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">21</div></th>
                    <td colspan="2" ice:editable="*"><label for="21_Aimage"></label>
                      <input name="21_Aimage" type="file" id="21_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="21_B" id="21_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="21_C" id="21_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="21_D" id="21_D" /></td>
                    <td ice:editable="*"><input type="text" name="21_E" id="21_E" /></td>
                    <td ice:editable="*"><input type="text" name="21_F" id="21_F" /></td>
                    <td ice:editable="*"><input type="text" name="21_G" id="21_G" /></td>
                    <td ice:editable="*"><input type="text" name="21_H" id="21_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">22</div></th>
                    <td colspan="2" ice:editable="*"><label for="22_Aimage"></label>
                      <input name="22_Aimage" type="file" id="22_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="22_B" id="22_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="22_C" id="22_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="22_D" id="22_D" /></td>
                    <td ice:editable="*"><input type="text" name="22_E" id="22_E" /></td>
                    <td ice:editable="*"><input type="text" name="22_F" id="22_F" /></td>
                    <td ice:editable="*"><input type="text" name="22_G" id="22_G" /></td>
                    <td ice:editable="*"><input type="text" name="22_H" id="22_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">23</div></th>
                    <td colspan="2" ice:editable="*"><label for="23_Aimage"></label>
                      <input name="23_Aimage" type="file" id="23_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="23_B" id="23_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="23_C" id="23_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="23_D" id="23_D" /></td>
                    <td ice:editable="*"><input type="text" name="23_E" id="23_E" /></td>
                    <td ice:editable="*"><input type="text" name="23_F" id="23_F" /></td>
                    <td ice:editable="*"><input type="text" name="23_G" id="23_G" /></td>
                    <td ice:editable="*"><input type="text" name="23_H" id="23_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">24</div></th>
                    <td colspan="2" ice:editable="*"><label for="24_Aimage"></label>
                      <input name="24_Aimage" type="file" id="24_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="24_B" id="24_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="24_C" id="24_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="24_D" id="24_D" /></td>
                    <td ice:editable="*"><input type="text" name="24_E" id="24_E" /></td>
                    <td ice:editable="*"><input type="text" name="24_F" id="24_F" /></td>
                    <td ice:editable="*"><input type="text" name="24_G" id="24_G" /></td>
                    <td ice:editable="*"><input type="text" name="24_H" id="24_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">25</div></th>
                    <td colspan="2" ice:editable="*"><label for="25_Aimage"></label>
                      <input name="25_Aimage" type="file" id="25_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="25_B" id="25_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="25_C" id="25_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="25_D" id="25_D" /></td>
                    <td ice:editable="*"><input type="text" name="25_E" id="25_E" /></td>
                    <td ice:editable="*"><input type="text" name="25_F" id="25_F" /></td>
                    <td ice:editable="*"><input type="text" name="25_G" id="25_G" /></td>
                    <td ice:editable="*"><input type="text" name="25_H" id="25_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">26</div></th>
                    <td colspan="2" ice:editable="*"><label for="26_Aimage"></label>
                      <input name="26_Aimage" type="file" id="26_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="26_B" id="26_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="26_C" id="26_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="26_D" id="26_D" /></td>
                    <td ice:editable="*"><input type="text" name="26_E" id="26_E" /></td>
                    <td ice:editable="*"><input type="text" name="26_F" id="26_F" /></td>
                    <td ice:editable="*"><input type="text" name="26_G" id="26_G" /></td>
                    <td ice:editable="*"><input type="text" name="26_H" id="26_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">27</div></th>
                    <td colspan="2" ice:editable="*"><label for="27_Aimage"></label>
                      <input name="27_Aimage" type="file" id="27_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="27_B" id="27_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="27_C" id="27_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="27_D" id="27_D" /></td>
                    <td ice:editable="*"><input type="text" name="27_E" id="27_E" /></td>
                    <td ice:editable="*"><input type="text" name="27_F" id="27_F" /></td>
                    <td ice:editable="*"><input type="text" name="27_G" id="27_G" /></td>
                    <td ice:editable="*"><input type="text" name="27_H" id="27_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">28</div></th>
                    <td colspan="2" ice:editable="*"><label for="28_Aimage"></label>
                      <input name="28_Aimage" type="file" id="28_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="28_B" id="28_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="28_C" id="28_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="28_D" id="28_D" /></td>
                    <td ice:editable="*"><input type="text" name="28_E" id="28_E" /></td>
                    <td ice:editable="*"><input type="text" name="28_F" id="28_F" /></td>
                    <td ice:editable="*"><input type="text" name="28_G" id="28_G" /></td>
                    <td ice:editable="*"><input type="text" name="28_H" id="28_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">29</div></th>
                    <td colspan="2" ice:editable="*"><label for="29_Aimage"></label>
                      <input name="29_Aimage" type="file" id="29_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="29_B" id="29_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="29_C" id="29_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="29_D" id="29_D" /></td>
                    <td ice:editable="*"><input type="text" name="29_E" id="29_E" /></td>
                    <td ice:editable="*"><input type="text" name="29_F" id="29_F" /></td>
                    <td ice:editable="*"><input type="text" name="29_G" id="29_G" /></td>
                    <td ice:editable="*"><input type="text" name="29_H" id="29_H" /></td>
                    <td class="">﻿</td>
                  </tr>
                  <tr style='height:16px;'>
                    <th style="height: 16px;" class="row-headers-background"><div class="row-header-wrapper" style="height: 16px;">30</div></th>
                    <td colspan="2" ice:editable="*"><label for="30_Aimage"></label>
                      <input name="30_Aimage" type="file" id="30_Aimage" value="" size="12" />
                      <label for="1"></label></td>
                    <td ice:editable="*"><select name="30_B" id="30_B">
                      <option>Perro</option>
                      <option>Gato</option>
                    </select></td>
                    <td ice:editable="*"><select name="30_C" id="30_C">
                      <option>Macho</option>
                      <option>Hembra</option>
                    </select></td>
                    <td ice:editable="*"><input type="text" name="30_D" id="30_D" /></td>
                    <td ice:editable="*"><input type="text" name="30_E" id="30_E" /></td>
                    <td ice:editable="*"><input type="text" name="30_F" id="30_F" /></td>
                    <td ice:editable="*"><input type="text" name="30_G" id="30_G" /></td>
                    <td ice:editable="*"><input type="text" name="30_H" id="30_H" /></td>
                   
                </tbody>
              </table>
              
              <p>
              <div align="center">
                <input name="Generar registro" type="submit" class="Estilo14" id="Generar registro" value="Generar Registro" /></div>
              </p>
              <legend class="Estilo18"><br/>
              
              </legend>
              
              <tr>
                  <td height="21" colspan="5"><label></label>
                      <div align="center"></div></td>
                </tr>
              
              
              
              

  
  
  
              
              
              
              
              <p><br/>
              </p>
            </fieldset></td>
          </tr>
        </table>
        
        
        
        <br/>
    </form></td>
  </tr>
</table>

</body>
</html>

