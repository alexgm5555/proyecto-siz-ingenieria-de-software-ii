<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
//error_reporting("E_PARSE");
//Validamos si la sesión ya fue creada:
error_reporting("E_PARSE");
    session_start();
    if ( !isset( $_SESSION['usuario'])) {
        header ('location:index.php?LoginMesagge=2'); 
    }
    include ("conexionMySQL.php");
    $conexion = Conectarse();

    $_SESSION['url'] = $_SERVER['REQUEST_URI'];

?>

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
		document.form1.onkeypress = stopRKey; 
	</script>
    
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
	
	var patron = /'/;
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
	else if (NombresUsuario.search(patron) != -1 || NombresUsuario.search(patron2) != -1 || NombresUsuario.search(patron3) != -1){ 
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
	else if (ApellidosUsuario.search(patron) != -1 || ApellidosUsuario.search(patron2) != -1 || ApellidosUsuario.search(patron3) != -1){ 
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
	else if (DocumentoUsuario.search(patron) != -1 || DocumentoUsuario.search(patron2) != -1 || DocumentoUsuario.search(patron3) != -1){ 
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
	else if (emailUsuario.search(patron) != -1 || emailUsuario.search(patron2) != -1 || emailUsuario.search(patron3) != -1){ 
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
	else if (telefonoUsuario.search(patron) != -1 || telefonoUsuario.search(patron2) != -1 || telefonoUsuario.search(patron3) != -1){ 
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
	else if (CelularUsuario.search(patron) != -1 || CelularUsuario.search(patron2) != -1 || CelularUsuario.search(patron3) != -1){ 
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
	else if (UserName.search(patron) != -1 || UserName.search(patron2) != -1 || UserName.search(patron3) != -1){ 
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
	else if (confPassword.search(patron) != -1 || confPassword.search(patron2) != -1 || confPassword.search(patron3) != -1){ 
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

        
            
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Zoonosis</title>
		<link href="http://fonts.googleapis.com/css?family=Cabin" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
                <script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
                <link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
        </head>
    
	<body>
		<div id="outer">
			<div id="header">
				<div id="logo">
					<h1> Zoonosis</h1>
				</div>
                                        <div id="nav">
			  		
                                            <ul>
						<li class="first active"><a href="ClasificadorRoles.php">Inicio</a></li>			
						<li><a href="#">Acerca de</a></li>
                                                <li class="last"><a href="#">Contacto</a></li>
						<li class="last"><a href="Logout.php">Cerrar Sesión</a></li>							
                                            </ul>
                    
                                                <div class="usuario">Usuario Activo: <?php echo $_SESSION['usuario'];?></div>
                                        
                                        </div>
			</div>
			
                                <div id="banner">
                                    <img src="images/pic01.jpg" width="1120" height="240" alt="" />
                                </div>
                    
                                    <div id="main">
                                            <div id="content">

                                                    <div id="box1">
                                                            <h2>Administración de Usuarios</h2>
                                                            <p><img class="left round" src="images/pic02.jpg" width="200" height="180" alt=""  />En esta página podrás administrar los usuarios de Zoonosis.</p>
                                                            <p>&nbsp;</p>
                                                    </div>
			<?php
			try {
							
							$mensaje = $_GET['Message'];
                                                        echo $mensaje;
							switch ($mensaje) {								
								case 1:
                                                                    echo 80;
									echo "<div id='box1'> 
								<table width='auto' border='0'>
  									  <tr>
										<td><img src='images/correcto.png' alt='' width='40' height='38' /></td>
										<td align='center'><font color='green' size='5px'>&nbsp;Usuario creado satisfactoriamente</font></td>
									  </tr>
									</table></div>";	
									break;
								case 2:
									echo "<div id='box1'> 
								<table width='auto' border='0'>
  									  <tr>
										<td><img src='images/correcto.png' alt='' width='40' height='38' /></td>
										<td align='center'><font color='green' size='5px'>&nbsp;Usuario eliminado satisfactoriamente</font></td>
									  </tr>
									</table></div>";	
									break;	
							}				
							
							}  
						catch (Exception $e)  
						{  
    						echo "Sucedió un error inesperado.".$e->getMessage();
				}	
			?>
					<div id="box2">
                                            <div id="Accordion1" class="Accordion" tabindex="0">
                                                <div class="AccordionPanel">
                                                    <div class="AccordionPanelTab">Registrar un Usuario</div>
                                                        <div class="AccordionPanelContent1">
                                                            <div align="center">
                                                                <p>Por favor diligencie el formulario de registro:</p>
                                                                <form id="form1" name="form1" method="post" action="ResolverFormulario.php">
                                                                <table width="600" border="0">
                                                                    <tr>
                                                                        <td>Nombres:</td>
                                                                        <td><label for="NombresUsuario"></label>
                                                                        <input name="NombresUsuario" type="text" id="NombresUsuario" size="45px" maxlength="40" onkeyup="onEnter(event.keyCode);"/></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Apellidos:</td>
                                                                        <td><input name="ApellidosUsuario" type="text" id="ApellidosUsuario" size="45px" maxlength="40"/></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Documento de Identidad:</td>
                                                                        <td><input name="DocumentoUsuario" type="text" id="DocumentoUsuario" size="45px" maxlength="15"/></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Ciudad:</td>
                                                                        <td> 
                                                                            <?php
                                                                            $conexion = true;
                                                                            Conectarse($conexion);
                                                                            if($conexion){
                                                                                $consulta = mysql_query("select * from ciudades order by Nombre_Ciudad ASC");
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
                                                                        <td><input name="emailUsuario" type="text" id="emailUsuario" size="45px" maxlength="40"/></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Teléfono:</td>
                                                                        <td><input name="telefonoUsuario" type="text" id="telefonoUsuario" size="45px" maxlength="40"/></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Celular:</td>
                                                                        <td><input name="CelularUsuario" type="text" id="CelularUsuario" size="45px" maxlength="40"/></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Nombre de Usuario:</td>
                                                                        <td><input name="UserName" type="text" id="UserName" size="45px" maxlength="40"/></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Contraseña:</td>
                                                                        <td><input name="Password" type="password" id="Password" size="45px" maxlength="40"/></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Confirmar Contraseña:</td>
                                                                        <td><input name="confPassword" type="password" id="confPassword" size="45px" maxlength="40"/></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2" ><div align="center">
                                                                        <input type="button" name="login" value="Registrar Usuario" class="inputButton" onclick="valida_envia()"/>
                                                                        </div></td>
                                                                    </tr>                                  
                                                            </table>
                                                        </form>
                                                            <p>&nbsp;</p>
                                
                                                    </div>
                                                </div>
                                            </div>
                                                
                                            <div class="AccordionPanel">
                                                <div class="AccordionPanelTab">
                                                    <div align="left">Configuración de usuario</div>
                                                </div>
                                                <div class="AccordionPanelContent1">
                                                        
                                                        <iframe src="BusquedaUsuario.php" frameborder="0" width="100%" height="200">
                                                        </iframe>                             
                                                    </div>
                                            </div>
                                          </div>
                                        </div>
					
					<br class="clear" />
				
                                    </div>
                                        <div id="sidebar">
					<h3></h3>
					<div class="form">
                                            <p><?php echo $_SESSION['usuario'];?>, puedes realizar las siguientes actividades</p>
                                            <ol>
                                                <li><a href='AdministracionUsuarios.php'>Administracion de Usuarios</a></li>
                                                <li><a href='AdministracionAnimales.php'>Administración de Animales</a></li>
                                                <li><a href='AdministracionEmpleados.php'>Administración de Empleados</a></li>
                                                <li><a href='AdministracionSedes.php'>Administración de Sedes</a></li>
                                                <li><a href='Estadisticas.php'>Estadísticas</a></li>
                                            </ol>
                                        </div>
                                        <h3>Enlaces de Interés</h3>
					<ul class="linkedList">
						<li class="first">
							<a href="http://www.bogota.gov.co/mad/info_sitio.php?id_sitio=14790">Zoonosis - Ficha Tecnica</a>
						</li>
						<li>
							<a href="http://www.saludcapital.gov.co/Paginas/AdopcionCanina.aspx/">Centro de Zoonosis</a>
						</li>
						<li>
							<a href="http://www.sirab.co/">SIRAB</a>
						</li>
					</ul>
				  <p>&nbsp;</p>
                                </div>
				<br class="clear" />
			</div>
		</div>
            
		<div style="margin: 1em 0 3em 0; text-align: center;">
        Este Sitio Web es desarrollado por estudiantes de la Universidad Nacional de Colombia
			<br />Diseñado y Provisto por Zoonosis Team
			<br />© 2012.</div>
    
                <script type="text/javascript">
                    var Accordion1 = new Spry.Widget.Accordion("Accordion1");
                </script>
        </body>
</html>