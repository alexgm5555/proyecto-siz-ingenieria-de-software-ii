<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

        
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Documento sin título</title>    
        <link rel="stylesheet" type="text/css" href="style2.css" />

    </head>
        <body>
            
            
            <p align="center">Por favor seleccione la sede que desea modificar:</p>
                              <form id="form2" method="post" action="ModificarSede.php">
                                <p align="center">
                                  <label for="select"></label>
                                  Sede a Modificar:
                                  <select name="select" id="select">
                                    <?PHP
                                    
                                    include ("conexionMySQL.php");
                                    $conexion = Conectarse();
                                    $consulta = "SELECT idSedes, Nombre FROM SEDES";
                                    $resultado = mysql_query($consulta, $conexion) or die(mysql_error());
                                    $numfilas = mysql_num_rows($resultado);
                                    
                                    if ($numfilas > 0) {
                                        while ($rowEmp = mysql_fetch_assoc($resultado)) {
                                            echo " <option value='".$rowEmp['idSedes']."'>".$rowEmp['Nombre']."</option>";
                                            }
                                    }
				  ?>    
                                  </select>
                                </p>
                                <div align="center">
                                  <table width="100" border="0">
                                    <tr>
                                      <td><input type="submit" name="login2" value="Seleccionar Sede" class="inputButton" /></td>
                                    </tr>
                                  </table>
                                </div>
                                <p align="center">&nbsp;</p>
                                  
            <p>&nbsp;</p>
        </body>
</html