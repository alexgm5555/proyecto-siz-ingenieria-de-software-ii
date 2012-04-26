<head>
		<link href="http://fonts.googleapis.com/css?family=Cabin" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
        <body>
<p align="center">Por favor ingrese el numero de documento del usuario que desea modificar:</p>
                               <form id="form2" method="post" action="EliminarUsuario.php">
                                <p align="center">
                                  <label for="select"></label>
                                  <input name="UsuarioparaEliminar" type="text" id="UsuarioparaEliminar" size="45px" />
                                </p>
                                <div align="center">
                                  <table width="100" border="0">
                                    <tr>
                                      <td><input type="submit" name="login3" value="Buscar Usuario" class="inputButton" /></td>
                                    </tr>
                                  </table>
                                </div>
                                <p align="center">&nbsp;</p>
                              </form>
<p>&nbsp;</p>

        </body>
<?php
function EncontrarEmpleado(){

$conexion = true;
$EmpleadoEliminar = $_POST['EmpleadoparaEliminar'];

Conectarse($conexion);

if($conexion){
    $query = "select Nombres, Apellidos, Cedula, Ciudad  from zoonosis.Usuarios 
                where (Cedula = 0 and TipoUsuario!='Particular')";
    $consulta = mysql_query($query) or die(mysql_error());
    
}
return $consulta;
}
?>