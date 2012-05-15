<?php include ("conexionMySQL.php")?>
<?php 

session_start();

$sedeEditar = $_SESSION['row'];

echo '
<!DOCTYPE html>
<html>
    <head>
        <title>Editar Sede</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style2.css"/>
    </head>
    <body>
        <div>
                                <p>Por favor diligencie el formulario de la Sede:</p>
                                <form id="form1" method="post" action="CrearSede.php">
                                <table width="600" border="0">
                                <tr>
                                  <td>Nombre:</td>
                                  <td><label for="nombreSede"></label>
                                  <input name="nombreSede" type="text" id="nombreSede" value= '.$sedeEditar[1].' size="45px" /></td>
                                </tr>
                                <tr>
                                  <td>Ciudad:</td>
                                  <td>
                                        ';
                                                 
                                                /*Este bloque PHP mostrara un menu desplegable de ciudades valiendose de los registros 
                                                * de la tabla Ciudades de la Base de Datos.
                                                */

                                                $conexion = true;
                                                Conectarse($conexion);
                                                if($conexion){
                                                    $consulta = mysql_query("select * from zoonosis.ciudades order by Nombre_Ciudad ASC");
                                                    echo "<select name = ciudadSede id = ciudadSede>";
                                                    while($fila = mysql_fetch_array($consulta)){
                                                        echo "<option value='".$fila[1]."'>".($fila[1])."</option>";
                                                    }
                                                echo "</select>";
                                                }
                                        echo '
                                  </td>
                                </tr>
                                <tr>
                                  <td>Dirección:</td>
                                  <td><input name="direccionSede" type="text" id="direccionSede" value= '.$sedeEditar[3].' size="45px" /></td>
                                </tr>
                                <tr>
                                  <td>Teléfono:</td>
                                  <td><input name="telefonoSede" type="text" id="telefonoSede" value= '.$sedeEditar[4].' size="45px" /></td>
                                </tr>
                                <tr>
                                  <td>E-mail:</td>
                                  <td><input name="emailSEde" type="text" id="emailSEde" value= '.$sedeEditar[5].' size="45px" /></td>
                                </tr>
                                <tr>
                                  <td colspan="2" ><div align="center">
                                    <input type="submit" name="login" value="Registrar Sede" class="inputButton" />
                                  </div></td>
                                  </tr>
                              </table>
                                
                                </form>
                                <p>&nbsp;</p>

        </div>
    </body>
</html>
        
';