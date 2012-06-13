<?php include ("paquete1.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php 


//Este bloque de PHP nos permite guardar en la Base de Datos las variables solicitadas 
//al usuario en FormularioRegistro.php
session_start();

$conexion = true;

if(isset($_SESSION['url'])){
$url_anterior = $_SESSION['url'];}
else{
	$url_anterior=$_SERVER['REQUEST_URI'];
	}
$NombreUsuario = $_POST['NombresUsuario'];
$ApellidoUsuario = $_POST['ApellidosUsuario'];
$DocumentoUsuario = $_POST['DocumentoUsuario'];
$CiudadUsuario = $_POST['CiudadUsuario'];
$CorreoUsuario = $_POST['emailUsuario'];
$TelefonoUsuario = $_POST['telefonoUsuario'];
$CelularUsuario = $_POST['CelularUsuario'];
$NombredeUsuario = $_POST['UserName'];
$ContraseñadeUsuario = $_POST['Password'];
$ConfContraseñadeUsuario = $_POST['confPassword'];

Conectarse($conexion);

	if($conexion){
		
            if($ContraseñadeUsuario == $ConfContraseñadeUsuario){
		$query = sprintf("insert into zoonosis.usuarios(Nombres, Apellidos, Cedula, Ciudad, Email, Telefono_Fij, Telefono_Cel, UserName, Password) 
                        values ( '".mysql_real_escape_string($NombreUsuario)."', '".mysql_real_escape_string($ApellidoUsuario)."', '".mysql_real_escape_string($DocumentoUsuario)."', '".mysql_real_escape_string($CiudadUsuario)."' , '".mysql_real_escape_string($CorreoUsuario)."' , '".mysql_real_escape_string($TelefonoUsuario)."',  '".mysql_real_escape_string($CelularUsuario)."' , '".mysql_real_escape_string($NombredeUsuario)."' , '".mysql_real_escape_string($ContraseñadeUsuario)."')");
		$ErrorBase = "<script> alert('El documento ya esta registrado.')
                                location.href='/proyecto-siz-ingenieria-de-software-ii/FormularioRegistro.php';
                                </script>
                             ";
                mysql_query($query)or die($ErrorBase); 
                
                if($url_anterior == '/proyecto-siz-ingenieria-de-software-ii/AdministracionUsuarios.php'){
                    header ('location: AdministracionUsuarios.php');
                }
                else{
                    header ('location:index.php?LoginMesagge=4'); //Esta funcion hace que despues del registro se vuelva a la pagina index.php                   
                }                
                }
            else{
                echo "Error en la contraseña";
                header('location:'.$_SERVER['HTTP_REFERER']);
                }
        }
	else{
		echo ("No ha sido posible establecer la conexion");
                
                }
		
?>
</body>
</html>



