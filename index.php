<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
error_reporting("E_PARSE");
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
		document.onkeypress = stopRKey; 
	</script>
    
    <script language="javascript">

	function valida_envia(){ 
	var usuarioc = document.loginform.usuario.value;
	var contrasenac = document.loginform.contrasena.value;
	var patron = /'/;
	var patron2 = /"/;
	
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
						<li class="first active">
							<a href="index.php">Inicio</a>
						</li>
						<li>
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
				<div id="box3">
					  <h2>Bienvenid@ a Zoonosis</h2>
					  <iframe align="top" id="tree" name="tree" src="jquery1.php" frameborder="0" width="830" height="230"  scrolling="no"></iframe>
				  </div>
					<div id="box1">
						<h2>&nbsp;</h2>
						<img class="left round" src="images/pic02.jpg" width="200" height="180" alt=""  />
						<p>
							En Zoonosis nos preocupamos por el estado y los derechos de los animales, por ello nos dedicamos a desarrollar actividades que procuren por su bienestar. Si quieres se parte de Zoonosis Colombia regístrate y forma parte de nuestra comunidad.</p>
					</div>
					
			  <div id="box2">
						<h2>En Zoonosis ellos son nuestros amigos</h2>
						<img class="left round" src="images/pic03.jpg" width="200" height="180" alt="" />En muchas ocasiones nos preguntamos ¿dónde están nuestros amigos cuando los necesitamos?
					y la respuesta es muy sencilla, están por todo el planeta. En Zoonisis los animales son nuestros amigos, y como amigos nuestro objetivo es brindarles apoyo para todas las necesidades que ellos tengan.</div>
					
					
					<br class="clear" />
				</div>
				<div id="sidebar">
					<h3>
                    <?php		
						try { 
							$mensaje = $_GET['LoginMesagge']; 
							switch ($mensaje) {
								case 0:
									echo "Iniciar Sesión";
									break;
								case 1:
									echo " 
								<table width='auto' border='0'>
  									  <tr>
										<td><img src='images/Advertencia.png' alt='' width='40' height='38' /></td>
										<td align='center'><font color='red' size='5px'>Usuario y/o Contraseña inválidos.</font></td>
									  </tr>
									</table>";	
									break;
								case 2:
									echo " 
								<table width='auto' border='0'>
  									  <tr>
										<td><img src='images/Advertencia.png' alt='' width='40' height='38' /></td>
										<td align='center'><font color='red' size='5px'>Acceso Restringido. Por favor inicia sesión.</font></td>
									  </tr>
									</table>";
									break;
								case 3:	
									echo "
									<table width='auto' border='0'>
  									  <tr>
										<td><img src='images/correcto.png' alt='' width='40' height='38' /></td>
										<td align='center'><font color='green' size='5px'>Tu Sesión ha finalizado correctamente.</font></td>
									  </tr>
									</table>";
									break;
							}				
							
							}  
						catch (Exception $e)  
						{  
    						echo "Sucedió un error PHP.";
						}
	  
	  
	  ?>
                    </h3>
					<div class="form">
						<form action="loginApp.php" method="post" id="formularioregistro">
<p>
				<label for="usuario" class="login">Usuario</label> <input type="text" name="usuario" id="usuario" value="Usuario" class="inputBox" />
						</p>
<p>
				<label for="contrasena" class="login">Contraseña</label> <input type="password" name="contrasena" id="contrasena" value="password" class="inputBox" />
						</p>
<p>
		  <span><input type="checkbox" name="remember" /> 
		  &nbsp;Recordarme</span> 
							<input type="submit" name="login" value="Login" class="inputButton" /></form>
						</p>
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
        Este Sitio Web es desarrollado en la Universidad Nacional de Colombia
			<br />Diseñado y Provisto por Zoonosis Team
			<br />© 2012.</div>
</body>
</html>