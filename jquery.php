<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
session_start();

include ("conexionMySQL.php");
#hola
$conexion = Conectarse();
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
$url_anterior = $_SESSION['url'];
$re=mysql_query("select * from animal");

?>
<script>

</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js" type="text/javascript"><!--mce:0--></script>
<script src="custom.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<style type="text/css">
#wrappera {
	width:560px;
	margin-left:auto;
	margin-right:auto;
        margin-top: 19px;
	overflow:visible;
}

#slider {
	background-color: #f7f7f7;
	position:relative;
	padding:20px;
	overflow:hidden;
}
.contenta {
	width:520px;
	float: left;
	position: relative;
}
.inslider a {
	text-decoration:none;
}
.contentholder {
	height:250px;
	width: 520px;
	overflow: hidden;
	position: relative;
}
.contentslider {
	position: absolute;
	top: 0; left: 0;
}
.imgslider img {
	float: left;
}
.contentnav {
	position: absolute; 
        bottom: 30px; left:200px;
	height:30px;
	z-index: 100;
	text-align: center;
	line-height: 30px;
}
.contenta h2 a  {
        text-decoration: none;
	color: #aa2222;
}
.contentnav a{
        padding-top: 5px;
        padding-bottom: 5px;
        padding-right: 10px;
        padding-left: 10px;
	text-decoration: none;
	color: #aa2222;
}
.contentnav a.active {
	font-weight: bold;
	color:#FFF;
	background: #aa2222;
        -moz-border-radius: 25px;
        -webkit-border-radius: 25px;
        border-radius: 25px;
}

</style>
<body>
<div id="wrappera">
 <div id="slider">
  <div class="inslider">
    <!-- Content holder will hold content -->
    <div class="contentholder">
     <div class="contentslider">
      <?php
	  $numerodemascotas=0;
		#Se hace un mientras para colocar todas las mascotas que se han registrado
		while($f=mysql_fetch_array($re)){
			$numerodemascotas=$numerodemascotas+1;
			?>
      <div class="contenta" align="center">
        
            <th width="18%" height="79"  align="center"  scope="col"border=""> 
			<?php
			#codigo para colocar la imagen de la mascota 
			echo'<img src="'.$f['Foto'].'"width="300" heigth="250"/>';
				?>
             </th>
            
      </div> <?php
																}
																
																			?>
              
   </div>
   </div>
 
<!-- Navigation for content slider -->
      <div class="contentnav">
      	<?php
		$contador=0;
		#Se hace un mientras para colocar todas las mascotas que se han registrado
		while($contador<$numerodemascotas){
			$contador=$contador+1;
			
			?>
          <a rel="<?php echo $contador?>" href=index.php><?php echo $contador?></a>
          <?php
		}
		  ?>
          
      </div>
    </div>
   </div>
 </div>
</div>
</body>
</html>