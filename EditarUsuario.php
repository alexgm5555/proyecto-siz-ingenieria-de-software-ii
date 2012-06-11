<?php include ("conexionMySQL.php")?>
<?php 

session_start();

$Usuario = $_SESSION['row'];

echo '
<!DOCTYPE html>
<html>
    <head>
    
    <script language="javascript">

	function valida_envia(){ 
	var NombresUsuario = document.form1.NombresUsuario.value;
	var ApellidosUsuario = document.form1.ApellidosUsuario.value;
	var DocumentoUsuario = document.form1.DocumentoUsuario.value;
	var emailUsuario = document.form1.emailUsuario.value;
	var telefonoUsuario = document.form1.telefonoUsuario.value;
	var CelularUsuario = document.form1.CelularUsuario.value;
	var UserName = document.form1.UserName.value;
	var Password = document.form1.Password.value;
	var confPassword = document.form1.confPassword.value;
	
	var patron2 = /"/;
	var patron3 = /;/;
	
	//valido el usuario
	
	// El usuario no puede ser vacio:
    if (NombresUsuario.length==0){ 
       alert("Ingrese un nombre de Usuario") 
       document.form1.NombresUsuario.focus() 
       return 0; 
    }
    
    //El nombre no puede contener caracteres especiales
	else if (NombresUsuario.search(patron2) != -1 || NombresUsuario.search(patron3) != -1){ 
       alert("El Nombre no puede llevar caracteres especiales.") 
       document.form1.NombresUsuario.focus() 
       return 0; 
    } 
	
	// El apellido no puede ser vacio:
    else if (ApellidosUsuario.length==0){ 
       alert("El Apellido no puede ser vacío.") 
       document.form1.ApellidosUsuario.focus() 
       return 0; 
    } 
    
    //El apellido no puede contener caracteres especiales
	else if (ApellidosUsuario.search(patron2) != -1 || ApellidosUsuario.search(patron3) != -1){ 
       alert("El Apellido no puede llevar caracteres especiales.") 
       document.form1.ApellidosUsuario.focus() 
       return 0; 
    }
	
	// El documento no puede ser vacio:
    else if (DocumentoUsuario.length==0){ 
       alert("El Documento no puede ser vacío.") 
       document.form1.DocumentoUsuario.focus() 
       return 0; 
    }
    
    //El documento no puede contener caracteres especiales
	else if (DocumentoUsuario.search(patron2) != -1 || DocumentoUsuario.search(patron3) != -1){ 
       alert("El Documento no puede llevar caracteres especiales.") 
       document.form1.DocumentoUsuario.focus() 
       return 0; 
    }
    
    //Se valida que el documento sea numerico
	Numer=parseInt(DocumentoUsuario);
    if (isNaN(Numer)){
            alert("El Documento ingresado no es válido.");
			document.form1.DocumentoUsuario.focus();
			return 0; 
    }
	
	// El email no puede ser vacio:
    else if (emailUsuario.length==0){ 
       alert("El email no puede ser vacío.") 
       document.form1.emailUsuario.focus() 
       return 0; 
    }
    
    //El email no puede contener caracteres especiales
	else if (emailUsuario.search(patron2) != -1 || emailUsuario.search(patron3) != -1){ 
       alert("El Email no puede llevar caracteres especiales excepto @.") 
       document.form1.emailUsuario.focus() 
       return 0; 
    }
    
    //Se valida si el campo de email tiene el formato de email correcto
	
    re=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/
    if(!re.exec(emailUsuario))    {
        alert("El Email ingresado no tiene un formato correcto. Por favor ingrese un email con el siguiente formato: ejemplo@dominio.com.");
		document.form1.emailUsuario.focus();
		return 0; 
    }
	
	// El telefono no puede ser vacio:
    else if (telefonoUsuario.length==0){ 
       alert("El teléfono no puede ser vacío.") 
       document.form1.telefonoUsuario.focus() 
       return 0; 
    }
    
    //El telefono no puede contener caracteres especiales
	else if (telefonoUsuario.search(patron2) != -1 || telefonoUsuario.search(patron3) != -1){ 
       alert("El Teléfono no puede llevar caracteres especiales.") 
       document.form1.telefonoUsuario.focus() 
       return 0; 
    }
    
    //Se valida que el telefono sea numerico
	Numer=parseInt(telefonoUsuario);
    if (isNaN(Numer)){
            alert("El Teléfono ingresado no es válido.");
			document.form1.telefonoUsuario.focus();
			return 0; 
    }
	
	// El celular no puede ser vacio:
    else if (CelularUsuario.length==0){ 
       alert("El celular no puede ser vacío.") 
       document.form1.CelularUsuario.focus() 
       return 0; 
    }
    
    //El celular no puede contener caracteres especiales
	else if (CelularUsuario.search(patron2) != -1 || CelularUsuario.search(patron3) != -1){ 
       alert("El Celular no puede llevar caracteres especiales.") 
       document.form1.CelularUsuario.focus() 
       return 0; 
    }
    
    //Se valida que el celular sea numerico
	Numer=parseInt(CelularUsuario);
    if (isNaN(Numer)){
            alert("El Celular ingresado no es válido.");
			document.form1.CelularUsuario.focus();
			return 0; 
    }
	
	// El usuario no puede ser vacio:
    else if (UserName.length==0){ 
       alert("El usuario no puede ser vacío.") 
       document.form1.UserName.focus() 
       return 0; 
    }
    
    //El usuario no puede contener caracteres especiales
	else if (UserName.search(patron2) != -1 || UserName.search(patron3) != -1){ 
       alert("El Nombre de Usuario no puede llevar caracteres especiales.") 
       document.form1.UserName.focus() 
       return 0; 
    }
	
	// La contraseña no puede ser vacia:
    else if (Password.length==0){ 
       alert("La contraseña no puede ser vacía.") 
       document.form1.Password.focus() 
       return 0; 
    }
    
    //La contraseña no puede contener caracteres especiales
	else if (Password.search(patron) != -1 || Password.search(patron2) != -1 || Password.search(patron3) != -1){ 
       alert("La Contraseña no puede llevar caracteres especiales.") 
       document.form1.Password.focus() 
       return 0; 
    }
	
	//  Confirmar contraseña no puede ser vacia:
    else if (confPassword.length==0){ 
       alert("Ingrese de nuevo la contraseña.") 
       document.form1.confPassword.focus() 
       return 0; 
    }
    
    //La confirmacion de la contraseña no puede contener caracteres especiales
	else if (confPassword.search(patron2) != -1 || confPassword.search(patron3) != -1){ 
       alert("La confirmación de la Contraseña no puede llevar caracteres especiales.") 
       document.form1.confPassword.focus() 
       return 0; 
    }   
	
	//Se valida si las contraseñas son iguales
	if(Password != confPassword){
		alert("Las contraseñas no coinciden. Por favor ingréselas de nuevo.");
		document.form1.CelularUsuario.focus();
		return 0; 
	}
	
	//el formulario se envia 
   
    document.form1.submit(); 
} 

// Funcion que llama a la anterior si en alguno de los campos se presiona la tecla enter
	function onEnter(ev) {  
	if(ev==13)    { 
	valida_envia();  
	}  
	}
	
	</script>

        <title>Editar Usuario</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style2.css"/>
    </head>
    <body>
        <div>
                                        <p>Por favor diligencie el formulario de registro:</p>
                                        <form id="form1" name="form1" method="post" action="EditarUsuarioApp.php">
                                        <table width="600" border="0">
                                        <tr>
                                            <td>Nombres:</td>
                                            <td><label for="NombresUsuario"></label>
                                            <input name="NombresUsuario" type="text" id="NombresUsuario" value= "'.$Usuario[2].'" maxlength="40"></td>
                                        </tr>
                                        <tr>
                                            <td>Apellidos:</td>
                                            <td><label for="ApellidosUsuario"></label>
                                            <input name="ApellidosUsuario" type="text" id="ApellidosUsuario" value= "'.$Usuario[3].'" maxlength="40"></td>
                                        </tr>
                                        <tr>
                                            <td>Documento de Identidad:</td>
                                            <td><label for="DocumentoUsuario"></label>
                                            <input name="DocumentoUsuario" type="text" id="DocumentoUsuario" value= "'.$Usuario[4].'" maxlength="15"></td>
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
                                                    echo "<select name = Ciudad id = Ciudad>";
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
                                            <td><input name="emailUsuario" type="text" id="emailUsuario" value= "'.$Usuario[6].'" maxlength="40"></td>
                                        </tr>
                                        <tr>
                                            <td>Teléfono:</td>
                                            <td><input name="telefonoUsuario" type="text" id="telefonoUsuario" value= "'.$Usuario[7].'" maxlength="40"></td>
                                        </tr>
                                        <tr>
                                            <td>Celular:</td>
                                            <td><input name="CelularUsuario" type="text" id="CelularUsuario" value= "'.$Usuario[8].'" maxlength="40"></td>
                                        </tr>
                                        ';
                                        if($Usuario[1]=='Empleado'){
                                        echo '
                                        <tr>
                                            <td>Tipo de Empleado:</td>
                                            <td>
                                        ';
                                             
                                            /*Este bloque de php muestrara un menu desplegable de tipos de usuario, valiendose
                                            * de la tabla TiposUsuario de la Base de Datos
                                            */
                                            if($conexion){
                                                    $consulta = mysql_query("select * from zoonosis.TiposUsuarios where TipoUser!='particular' order by TipoUser ASC");
                                                    echo "<select name = 'TipoEmpleado' id = 'TipoEmpleado'>";
                                                    while($fila = mysql_fetch_array($consulta)){
                                                            echo "<option value='".$fila[1]."'>".utf8_encode($fila[1])."</option>";
                                                    }
                                                    echo "</select>";
                                            }
                                        echo '
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Contrato:</td>
                                            <td><input name="ContratoEmpleado" type="text" id="ContratoEmpleado" size="45px" value= "'.$Usuario[9].'"></td>
                                        </tr>
                                        <tr>
                                            <td>Sede laboral:</td>
                                            <td> 
                                        ';
                                                                                                                                      
                                                                        /*Este bloque PHP mostrara un menu desplegable de sedes valiendose de los registros 
                                                                        * de la tabla Sedes de la Base de Datos.
                                                                        */
                                                                    
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
                                            <td><input name="InicioEmpleado" type="text" id="InicioEmpleado" size="45px" value= "'.$Usuario[11].'"></td>
                                        </tr>
                                        <tr>
                                            <td>Sueldo Devengado:</td>
                                            <td><input name="DevengadoEmpleado" type="text" id="DevengadoEmpleado" size="45px" value= "'.$Usuario[12].'"></td>
                                        </tr>
                                        ';
                                        }
                                        echo '
                                        <tr>
                                            <td>Nombre de Usuario:</td>
                                            <td><input name="UserName" type="text" id="UserName" value= "'.$Usuario[13].'" maxlength="40"></td>
                                        </tr>
                                        <tr>
                                            <td>Contraseña:</td>
                                            <td><input name="Password" type="password" id="Password" value= "'.$Usuario[14].'" maxlength="40"></td>
                                        </tr>
                                        <tr>
                                            <td>Confirmar Contraseña:</td>
                                            <td><input name="confPassword" type="password" id="confPassword" maxlength="40"/></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" >
                                            <input type="submit" name="login" value="Modificar Usuario" class="inputButton" onclick="valida_envia()"/>
                                            </td>
                                        </tr>                                  
                                        </table>
                                        </form>
                                        <p>&nbsp;</p>

        </div>
    </body>
</html>
        
';

                                        
?>