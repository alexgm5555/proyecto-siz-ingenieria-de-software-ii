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
                                        <p>Por favor diligencie el formulario de registro:</p>
                                        <form id="form1" method="post" action="ResolverFormulario.php">
                                        <table width="600" border="0">
                                        <tr>
                                            <td>Nombres: '.$Usuario[4].'</td>
                                            <td><label for="NombresUsuario"></label>
                                            <input name="NombresUsuario" type="text" id="NombresUsuario" value= '.$Usuario[2].' ></td>
                                        </tr>
                                        <tr>
                                            <td>Apellidos:</td>
                                            <td><label for="ApellidosUsuario"></label>
                                            <input name="ApellidosUsuario" type="text" id="ApellidosUsuario" value='.$Usuario[3].'></td>
                                        </tr>
                                        <tr>
                                            <td>Documento de Identidad:</td>
                                            <td><label for="DocumentoUsuario"></label>
                                            <input name="DocumentoUsuario" type="text" id="DocumentoUsuario" value='.$Usuario[4].'></td>
                                        </tr>
                                        <tr>
                                            <td>Ciudad:</td>
                                            <td> ';
                                                 
                                                /*Este bloque PHP mostrara un menu desplegable de ciudades valiendose de los registros 
                                                * de la tabla Ciudades de la Base de Datos.
                                                */

                                                $conexion = true;
                                                Conectarse($conexion);
                                                if($conexion){
                                                    $consulta = mysql_query("select * from zoonosis.ciudades order by Nombre_Ciudad ASC");
                                                    echo "<select name = CiudadUsuario id = CiudadUsuario>";
                                                    while($fila = mysql_fetch_array($consulta)){
                                                        echo "<option value='".$fila[1]."'>".($fila[1])."</option>";
                                                    }
                                                echo "</select>";
                                                }
                                        echo '        
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>E-mail:</td>
                                            <td><input name="emailUsuario" type="text" id="emailUsuario" value='.$Usuario[6].'></td>
                                        </tr>
                                        <tr>
                                            <td>Teléfono:</td>
                                            <td><input name="telefonoUsuario" type="text" id="telefonoUsuario" value='.$Usuario[7].'></td>
                                        </tr>
                                        <tr>
                                            <td>Celular:</td>
                                            <td><input name="CelularUsuario" type="text" id="CelularUsuario" value='.$Usuario[8].'></td>
                                        </tr>
                                        ';
                                        if($Usuario[1]=='Empleado'){
                                        echo '
                                        <tr>
                                            <td>Contrato:</td>
                                            <td><input name="ContratoEmpleado" type="text" id="ContratoEmpleado" size="45px" value='.$Usuario[9].'></td>
                                        </tr>
                                        <tr>
                                            <td>Sede laboral:</td>
                                            <td> 
                                        ';
                                                                                                                                      
                                                                        /*Este bloque PHP mostrara un menu desplegable de sedes valiendose de los registros 
                                                                        * de la tabla Sedes de la Base de Datos.
                                                                        */
                                                                    
                                                                        $conexion = true;
                                                                        Conectarse($conexion);
                                                                        if($conexion){
                                                                            $consulta = mysql_query("select * from zoonosis.Sedes where Nombre!='Particular' order by Nombre ASC");
                                                                            echo "<select name = 'SedeEmpleado' id = 'SedeEmpleado'>";
                                                                            while($fila = mysql_fetch_array($consulta)){
                                                                                echo "<option value='".$fila[1]."'>".utf8_encode($fila[1])."</option>";
                                                                            }
                                                                        echo "</select>";
                                                                        }
                                        echo '
                                                                    </td>
                                                                </tr>

                                        <tr>
                                            <td>Inicio de contrato:</td>
                                            <td><input name="InicioEmpleado" type="text" id="InicioEmpleado" value="YYYY-MM-DD" size="45px" value='.$Usuario[11].'></td>
                                        </tr>
                                        <tr>
                                            <td>Sueldo Devengado:</td>
                                            <td><input name="DevengadoEmpleado" type="text" id="DevengadoEmpleado" size="45px" value='.$Usuario[12].'></td>
                                        </tr>
                                        ';
                                        }
                                        echo '
                                        <tr>
                                            <td>Nombre de Usuario:</td>
                                            <td><input name="UserName" type="text" id="UserName" value='.$Usuario[13].'></td>
                                        </tr>
                                        <tr>
                                            <td>Contraseña:</td>
                                            <td><input name="Password" type="password" id="Password" value='.$Usuario[14].'></td>
                                        </tr>
                                        <tr>
                                            <td>Confirmar Contraseña:</td>
                                            <td><input name="confPassword" type="password" id="confPassword"/></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" >
                                            <input type="submit" name="login" value="Registrar Usuario" class="inputButton" />
                                            </td>
                                        </tr>                                  
                                        </table>
                                        </form>
                                        <p>&nbsp;</p>

        </div>
    </body>
</html>
        
';