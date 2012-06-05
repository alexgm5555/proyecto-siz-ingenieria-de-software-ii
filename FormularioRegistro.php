<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
error_reporting("E_PARSE");
?>
<?php include ("conexionMySQL.php")?>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
    
    <!--
    Script que permite capturar la tecla enter y enviar el formulario
    -->
    <script language="javascript "type="text/javascript">
		function stopRKey(evt) { 
		var evt = (evt) ? evt : ((event) ? event : null);
		var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
		if ((evt.keyCode == 13) && (node.type=="text")) {return false;}
		}
		document.onkeypress = stopRKey; 
	</script>
    
    <script language="javascript">

	function valida_envia(){ 
	var NombresUsuario = document.loginform.NombresUsuario.value;
	var ApellidosUsuario = document.loginform.ApellidosUsuario.value;
	var DocumentoUsuario = document.loginform.DocumentoUsuario.value;
	var emailUsuario = document.loginform.emailUsuario.value;
	var telefonoUsuario = document.loginform.telefonoUsuario.value;
	var CelularUsuario = document.loginform.CelularUsuario.value;
	var UserName = document.loginform.UserName.value;
	var Password = document.loginform.Password.value;
	var confPassword = document.loginform.confPassword.value;
	
	var patron = /'/;
	var patron2 = /"/;
	var patron3 = /;/;
	
	//valido el usuario
	
	// El usuario no puede ser vacio:
    if (NombresUsuario.length==0){ 
       alert("Ingrese un nombre de Usuario") 
       document.loginform.NombresUsuario.focus() 
       return 0; 
    } 
	
	// El apellido no puede ser vacio:
    else if (ApellidosUsuario.length==0){ 
       alert("El Apellido no puede ser vacío.") 
       document.loginform.ApellidosUsuario.focus() 
       return 0; 
    } 
	
	// El documento no puede ser vacio:
    else if (DocumentoUsuario.length==0){ 
       alert("El Documento no puede ser vacío.") 
       document.loginform.DocumentoUsuario.focus() 
       return 0; 
    }
	
	// El email no puede ser vacio:
    else if (emailUsuario.length==0){ 
       alert("El email no puede ser vacío.") 
       document.loginform.emailUsuario.focus() 
       return 0; 
    }
	
	// El telefono no puede ser vacio:
    else if (telefonoUsuario.length==0){ 
       alert("El teléfono no puede ser vacío.") 
       document.loginform.telefonoUsuario.focus() 
       return 0; 
    }
	
	// El celular no puede ser vacio:
    else if (CelularUsuario.length==0){ 
       alert("El celular no puede ser vacío.") 
       document.loginform.CelularUsuario.focus() 
       return 0; 
    }
	
	// El usuario no puede ser vacio:
    else if (UserName.length==0){ 
       alert("El usuario no puede ser vacío.") 
       document.loginform.UserName.focus() 
       return 0; 
    }
	
	// La contraseña no puede ser vacia:
    else if (Password.length==0){ 
       alert("La contraseña no puede ser vacía.") 
       document.loginform.Password.focus() 
       return 0; 
    }
	
	//  Confirmar contraseña no puede ser vacia:
    else if (confPassword.length==0){ 
       alert("Ingrese de nuevo la contraseña.") 
       document.loginform.confPassword.focus() 
       return 0; 
    }             
	
		
	//El nombre no puede contener caracteres especiales
	else if (NombresUsuario.search(patron) != -1 || NombresUsuario.search(patron2) != -1 || NombresUsuario.search(patron3) != -1){ 
       alert("El Nombre no puede llevar caracteres especiales.") 
       document.loginform.NombresUsuario.focus() 
       return 0; 
    } 
	
	//El apellido no puede contener caracteres especiales
	else if (ApellidosUsuario.search(patron) != -1 || ApellidosUsuario.search(patron2) != -1 || ApellidosUsuario.search(patron3) != -1){ 
       alert("El Apellido no puede llevar caracteres especiales.") 
       document.loginform.ApellidosUsuario.focus() 
       return 0; 
    }
	
	//El documento no puede contener caracteres especiales
	else if (DocumentoUsuario.search(patron) != -1 || DocumentoUsuario.search(patron2) != -1 || DocumentoUsuario.search(patron3) != -1){ 
       alert("El Documento no puede llevar caracteres especiales.") 
       document.loginform.DocumentoUsuario.focus() 
       return 0; 
    }
	
	//El email no puede contener caracteres especiales
	else if (emailUsuario.search(patron) != -1 || emailUsuario.search(patron2) != -1 || emailUsuario.search(patron3) != -1){ 
       alert("El Email no puede llevar caracteres especiales excepto @.") 
       document.loginform.emailUsuario.focus() 
       return 0; 
    }
	
	//El email no puede contener caracteres especiales
	else if (telefonoUsuario.search(patron) != -1 || telefonoUsuario.search(patron2) != -1 || telefonoUsuario.search(patron3) != -1){ 
       alert("El Teléfono no puede llevar caracteres especiales.") 
       document.loginform.telefonoUsuario.focus() 
       return 0; 
    }  
	
	//El email no puede contener caracteres especiales
	else if (CelularUsuario.search(patron) != -1 || CelularUsuario.search(patron2) != -1 || CelularUsuario.search(patron3) != -1){ 
       alert("El Celular no puede llevar caracteres especiales.") 
       document.loginform.CelularUsuario.focus() 
       return 0; 
    }
	
	//El usuario no puede contener caracteres especiales
	else if (UserName.search(patron) != -1 || UserName.search(patron2) != -1 || UserName.search(patron3) != -1){ 
       alert("El Nombre de Usuario no puede llevar caracteres especiales.") 
       document.loginform.UserName.focus() 
       return 0; 
    }
	
	
	//La contraseña no puede contener caracteres especiales
	else if (Password.search(patron) != -1 || Password.search(patron2) != -1 || Password.search(patron3) != -1){ 
       alert("La Contraseña no puede llevar caracteres especiales.") 
       document.loginform.Password.focus() 
       return 0; 
    }
	
	//La confirmacion de la contraseña no puede contener caracteres especiales
	else if (confPassword.search(patron) != -1 || confPassword.search(patron2) != -1 || confPassword.search(patron3) != -1){ 
       alert("La confirmación de la Contraseña no puede llevar caracteres especiales.") 
       document.loginform.confPassword.focus() 
       return 0; 
    }                  
	
	//el formulario se envia 
   
    document.loginform.submit(); 
} 

// Funcion que llama a la anterior si en alguno de los campos se presiona la tecla enter
	function onEnter(ev) {  
	if(ev==13)    { 
	valida_envia();  
	}  
	}
	
	</script>

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Zoonosis</title>
		<link href="http://fonts.googleapis.com/css?family=Cabin" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div id="outer">
			<div id="header">
				<div id="logo">
					<h1> Zoonosis</h1>
				</div>
                <div id="nav">
                    <ul>
			<li>
                            <a href="index.php">Inicio</a>
                        </li>
                        <li  class="first active">
                            <a href="FormularioRegistro.php">Registro</a>
                        </li>
			<li>
                            <a href="#">Acerca de</a>
			</li>
			<li class="last">
                            <a href="#">Contacto</a>
			</li>
                     </ul>
                        <br class="clear" />
				</div>
			</div>
			<div id="banner">
				<img src="images/pic01.jpg" width="1120" height="240" alt="" />
			</div>
			<div id="main">
                            <div id="content">
				<div id="box2">
                                    <div>
                                        <p>Por favor diligencie el formulario de registro:</p>
                                        <form id="loginform"  name="loginform" method="post" action="ResolverFormulario.php">
                                        <table width="600" border="0">
                                        <tr>
                                            <td>Nombres:</td>
                                            <td><label for="NombresUsuario"></label>
                                            <input name="NombresUsuario" type="text" id="NombresUsuario" size="45px" maxlength="40" onkeyup="onEnter(event.keyCode);"/></td>
                                        </tr>
                                        <tr>
                                            <td>Apellidos:</td>
                                            <td><input name="ApellidosUsuario" type="text" id="ApellidosUsuario" size="45px" maxlength="40" /></td>
                                        </tr>
                                        <tr>
                                            <td>Documento de Identidad:</td>
                                            <td><input name="DocumentoUsuario" type="text" id="DocumentoUsuario" size="45px" maxlength="15" /></td>
                                        </tr>
                                        <tr>
                                            <td>Ciudad:</td>
                                            <td> 
                                                <?php 

                                                /*Este bloque PHP mostrara un menu desplegable de ciudades valiendose de los registros 
                                                * de la tabla Ciudades de la Base de Datos.
                                                */

                                                $conexion = true;
                                                Conectarse($conexion);
                                                if($conexion){
                                                    $consulta = mysql_query("select * from zoonosis.ciudades order by Nombre_Ciudad ASC");
                                                    echo "<select name = 'CiudadUsuario' id = 'CiudadUsuario'>";
                                                    while($fila = mysql_fetch_array($consulta)){
                                                        echo "<option value='".$fila[1]."'>".($fila[1])."</option>";
                                                    }
                                                echo "</select>";
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>E-mail:</td>
                                            <td><input name="emailUsuario" type="text" id="emailUsuario" size="45px" maxlength="40" /></td>
                                        </tr>
                                        <tr>
                                            <td>Teléfono:</td>
                                            <td><input name="telefonoUsuario" type="text" id="telefonoUsuario" size="45px" maxlength="40" /></td>
                                        </tr>
                                        <tr>
                                            <td>Celular:</td>
                                            <td><input name="CelularUsuario" type="text" id="CelularUsuario" size="45px" maxlength="40" /></td>
                                        </tr>
                                        <tr>
                                            <td>Nombre de Usuario:</td>
                                            <td><input name="UserName" type="text" id="UserName" size="45px" maxlength="40" /></td>
                                        </tr>
                                        <tr>
                                            <td>Contraseña:</td>
                                            <td><input name="Password" type="password" id="Password" size="45px" maxlength="40" /></td>
                                        </tr>
                                        <tr>
                                            <td>Confirmar Contraseña:</td>
                                            <td><input name="confPassword" type="password" id="confPassword" size="45px" maxlength="40" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" >
                                            <input type="button" name="login" value="Registrar Usuario" class="inputButton" onclick="valida_envia()"/>
                                            </td>
                                        </tr>                                  
                                        </table>
                                        </form>
                                        <p>&nbsp;</p>

                                    </div>
                                    <br class="clear" />
                                        
				</div>
                                <br class="clear" />
                                
                          </div>
                            
                    </div>
                    
              </div>
                    
		<div style="margin: 40em 0 3em 0; text-align: center;">
        Este Sitio Web es desarrollado en la Universidad Nacional de Colombia
			<br />Diseñado y Provisto por Zoonisis Team
			<br />© 2012.</div>
</body>
</html>