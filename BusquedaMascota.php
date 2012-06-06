
<?php


echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

        
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Documento sin título</title>    
        <link rel="stylesheet" type="text/css" href="style2.css" />

    </head>
        <body>
        <div>
            <p align="center">Por favor seleccione el tipo de busqueda:</p>
                <div class="form">
                    <form action="BusquedaMascotaParticular.php" method="post" id="loginform" name="loginform">
                               <tr>
                                    <td>Tipo de busqueda:</td>
                                    <td> <select name = TipoBusqueda id = TipoBusqueda>
                                                 <option value="">Elija una opción...
                                                 <option value="Zoonosis">Registrada por Zoonosis</option>
                                                 <option value="Particular">Registrada por un usuario particular</option>
                                                 </select>
                                    </td>
                               </tr>
                               <tr>
                                    <td><input type="button" name="Buscar" value="Buscar" class="inputButton" /> </td>
                               </tr>
                                 </form>
                 </div>
               </div>                  
            <p>&nbsp;</p>
        </body>
</html>
';

?>