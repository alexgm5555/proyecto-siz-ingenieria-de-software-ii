
<?php

session_start();


$tipo = $_POST['TipoBusquedaOculto'];



echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

        
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Documento sin título</title>    
        <link rel="stylesheet" type="text/css" href="style2.css" />

    </head>
        <body>
            <p align="center">Por favor ingrese el nombre de un usuario:</p>
                               <form id="form2" method="post" action="MascotasRegistradasIFrame.php">
                                   <input type="hidden" value="1" name="id"/>
                                <p align="center">
                                  <label for="select"></label>
                                  <input name="UsuarioAsociado" type="text" id="UsuarioAsociado" />
                                </p>
                                <div align="center">
                                  <table width="100" border="0">
                                    <tr>
                                      <td><input type="submit" name="login3" value="Buscar" class="inputButton" /></td>
                                    </tr>
                                  </table>
                                </div>
                                <p align="center">&nbsp;</p>
                              </form>
            <p>&nbsp;</p>
        </body>
</html>
';

?>