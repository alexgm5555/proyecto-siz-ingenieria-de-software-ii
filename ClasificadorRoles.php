<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
//error_reporting("E_PARSE");
//Validamos si la sesión ya fue creada:
session_start();
if ( isset( $_SESSION['usuario'])) {

//Permite continuar en la página
}
else{	
	header ('location:index.php?LoginMesagge=2'); 
	} 

?>
<!--
	Website Name by Adonis Ronquillo for Free Website Templates
	www.freewebsitetemplat.es / www.doni.us
	Images by Image Base http://imagebase.davidniblack.com/
	Released under the Creative Commons Attribution 3.0 License.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Zoonisis</title>
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
						<li class="first active"><a href="index.php">Inicio</a></li>			
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
						<h2>Bienvenid@ a Zoonosis <?php echo $_SESSION['usuario'];?></h2>
						<img class="left round" src="images/pic02.jpg" width="200" height="180" alt=""  />En esta página podrás encontrar las estadísticas generales del Sistema de Información Zoonisis.
					</div>
					
					<div id="box2">
						<h2>En Zoonosis ellos son nuestros amigos</h2>
						<img class="left round" src="images/pic03.jpg" width="200" height="180" alt="" />En muchas ocasiones nos preguntamos ¿dónde están nuestros amigos cuando los necesitamos?
					y la respuesta es muy sencilla, están por todo el planeta. En Zoonisis los animales son nuestros amigos, y como amigos nuestro objetivo es brindarles apoyo para todas las necesidades que ellos tengan.</div>
					
					<br class="clear" />
				</div>
				<div id="sidebar">
					<h3>
                    
                  </h3>
					<div class="form">
					  <p><?php 
					  //se capturan datos de la sesión del nombre y tipo de usuario, estos datos fueron generados al iniciar sesión
					  echo $_SESSION['usuario'];?>, según tu rol [<?php echo $_SESSION['tipoUsuario'];?>] puedes realizar las siguientes actividades</p>
                      
                      <p>
                        <?php  // se muestran las opciones que corresponden a cada tipo de usuario dependiente del tipo de usuario que se haya registrado al iniciar sesión.
					  		$tipoUsuario = $_SESSION['usuario'];
							if($tipoUsuario == "Administrador"){$tipo=0;};
							if($tipoUsuario == "Empleado"){$tipo=1;};
							if($tipoUsuario == "Particular"){$tipo=2;};
							switch ($tipoUsuario){
								
								//Caso en que sea Administrador
								case 0:
								echo   "<li>Administracion de Usuarios</li>
                        				<li>Administración de Animales</li>
                        				<li>Administración de Empleados</li>
                        				<li>Administración de Sedes</li>
                        				<li>Estadísticas</li>";
								break;
								
								//Caso en que sea Empleado
								case 1:
								echo   "<li>Registrar Animal</li>
                       					<li>Eliminar Animal</li>
                        				<li>Modificar Animal</li>
                       				    <li>Consultar Adopción</li>";
								break;
								
								//Caso en que sea Particular
								case 2:
								echo   "<li>Realizar Solicitud de Adopción</li>
                        				<li>Búsqueda de Animales</li>";
								break;
							}
					  ?>
                      </p>
                      <p><a href="#">Hola</a> </p>
                      <ol>
                        
                        
                        
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
        Este Sitio Web es desarrollado en la Universidad Nacional de Colombia
			<br />Diseñado y Provisto por Zoonisis Team
			<br />© 2012.</div>
</body>
</html>