<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
error_reporting("E_PARSE");
//Validamos si la sesión ya fue creada:
session_start();
if ( !isset( $_SESSION['usuario'])) {

header ('location:index.php?LoginMesagge=2'); 
}
include ("conexionMySQL.php");

?>
<!--
	Website Name by Adonis Ronquillo for Free Website Templates
	www.freewebsitetemplat.es / www.doni.us
	Images by Image Base http://imagebase.davidniblack.com/
	Released under the Creative Commons Attribution 3.0 License.
-->
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
	var nombreSede = document.form1.nombreSede.value;
        var direccionSede = document.form1.direccionSede.value;
	var emailSede = document.form1.emailSede.value;
	var telefonoSede = document.form1.telefonoSede.value;
	
	var patron = /'/;
	var patron2 = /"/;
	var patron3 = /;/;
	
	//valido el usuario
	
	// El usuario no puede ser vacio:
    if (nombreSede.length==0){ 
       alert("Ingrese un nombre de la Sede") 
       document.form1.nombreSede.focus() 
       return 0; 
    }
    
    //El nombre no puede contener caracteres especiales
	else if (nombreSede.search(patron) != -1 || nombreSede.search(patron2) != -1 || nombreSede.search(patron3) != -1){ 
       alert("El Nombre no puede llevar caracteres especiales.") 
       document.form1.nombreSede.focus() 
       return 0; 
    } 
	
	// El email no puede ser vacio:
    else if (emailSede.length==0){ 
       alert("El email no puede ser vacío.") 
       document.form1.emailSede.focus() 
       return 0; 
    }
    
    //El email no puede contener caracteres especiales
	else if (emailSede.search(patron) != -1 || emailSede.search(patron2) != -1 || emailSede.search(patron3) != -1){ 
       alert("El Email no puede llevar caracteres especiales excepto @.") 
       document.form1.emailSede.focus() 
       return 0; 
    }
    
    //Se valida si el campo de email tiene el formato de email correcto
	
    re=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/
    if(!re.exec(emailSede))    {
        alert("El Email ingresado no tiene un formato correcto. Por favor ingrese un email con el siguiente formato: ejemplo@dominio.com.");
		document.form1.emailSede.focus();
		return 0; 
    }
	
	// El telefono no puede ser vacio:
    else if (telefonoSede.length==0){ 
       alert("El teléfono no puede ser vacío.") 
       document.form1.telefonoSede.focus() 
       return 0; 
    }
    
    //El telefono no puede contener caracteres especiales
	else if (telefonoSede.search(patron) != -1 || telefonoSede.search(patron2) != -1 || telefonoSede.search(patron3) != -1){ 
       alert("El Teléfono no puede llevar caracteres especiales.") 
       document.form1.telefonoSede.focus() 
       return 0; 
    }
    
    //Se valida que el telefono sea numerico
	Numer=parseInt(telefonoSede);
    if (isNaN(Numer)){
            alert("El Teléfono ingresado no es válido.");
			document.form1.telefonoSede.focus();
			return 0; 
    }
    
    // La direccion no puede ser vacia:
    else if (direccionSede.length==0){ 
       alert("La direccion no puede ser vacia.") 
       document.form1.direccionSede.focus() 
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
                    
              <div align="right">Usuario Activo: <?php echo $_SESSION['usuario'];?></div>
</div>
			</div>
			<div id="banner">
				<img src="images/pic01.jpg" width="1120" height="240" alt="" />
			</div>
			<div id="main">
				<div id="content">
				
					<div id="box1">
						<h2>Administración de Sedes</h2>
						<p><img class="left round" src="images/pic02.jpg" width="200" height="180" alt=""  />En esta página podrás administrar las Sedes de Zoonosis.</p>
					  <p>&nbsp;</p>
					</div>
			<?php
			try {
							
							$mensaje = $_GET['Message']; 
							switch ($mensaje) {	
							case 0:
									echo "";
									break;							
								case 1:
									echo "<div id='box1'> 
								<table width='auto' border='0'>
  									  <tr>
										<td><img src='images/correcto.png' alt='' width='40' height='38' /></td>
										<td align='center'><font color='green' size='5px'>&nbsp;Sede creada satisfactoriamente</font></td>
									  </tr>
									</table></div>";	
									break;
								case 2:
									echo "<div id='box1'> 
								<table width='auto' border='0'>
  									  <tr>
										<td><img src='images/correcto.png' alt='' width='40' height='38' /></td>
										<td align='center'><font color='green' size='5px'>&nbsp;Sede eliminada satisfactoriamente</font></td>
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
<div class="AccordionPanelTab">Crear una Sede</div>
                            <div class="AccordionPanelContent">
                              <div align="center">
                                <p>Por favor ingrese la información de la Nueva Sede:</p>
                                <form id="form1" name="form1" method="post" action="CrearSede.php">
                                <table width="600" border="0">
                                <tr>
                                  <td>Nombre:</td>
                                  <td><label for="nombreSede"></label>
                                  <input name="nombreSede" type="text" id="nombreSede" size="45px" maxlength="40"/></td>
                                </tr>
                                <tr>
                                  <td>Ciudad:</td>
                                     <td> 
                                          <?php
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
                                  <td>Dirección:</td>
                                  <td><input name="direccionSede" type="text" id="direccionSede" size="45px" maxlength="40"/></td>
                                </tr>
                                <tr>
                                  <td>Teléfono:</td>
                                  <td><input name="telefonoSede" type="text" id="telefonoSede" size="45px" maxlength="40"/></td>
                                </tr>
                                <tr>
                                  <td>E-mail:</td>
                                  <td><input name="emailSEde" type="text" id="emailSede" size="45px" maxlength="40"/></td>
                                </tr>
                                <tr>
                                  <td colspan="2" ><div align="center">
                                    <input type="button" name="login" value="Crear Sede" class="inputButton" onclick="valida_envia()"/>
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
  <div align="left">Configuración de Sedes</div>
</div>
                           <div class="AccordionPanelContent">
                               <iframe src="BusquedaSedes.php" frameborder="0" width="100%" height="200">
                               </iframe> 
                           </div>
                          </div>
                          
					  </div>
					</div>
					
					<br class="clear" />
				</div>
				<div id="sidebar">
					<h3>
                    
                  </h3>
					<div class="form">
					  <p><?php echo $_SESSION['usuario'];?>, puedes realizar las siguientes actividades</p>
                      <ol>
                        <li><a href='AdministracionUsuarios.php'>Administracion de Usuarios</a></li>
                        <li><a href='#'>Administración de Animales</a></li>
                        <li><a href='AdministracionEmpleados.php'>Administración de Empleados</a></li>
                        <li><a href='AdministracionSedes.php'>Administración de Sedes</a></li>
                        <li><a href='Estadisticas.php'>Estadísticas</a></li>
                      </ol>
                  </div>
				  <h3>Enlaces de Interés</h3>
					<ul class="linkedList">
						<li class="first">
							<a href="http://www.freewebtemplates.com/free-templates/">Templates Gratis</a>
						</li>
						<li>
							<a href="http://www.google.com.co">Google</a>
						</li>
						<li>
							<a href="http://docs.google.com">Google Docs</a>
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
