<?php include ("conexionMySQL.php")?>
<?php 

//Este bloque de PHP nos permite guardar en la Base de Datos las variables solicitadas 
//al usuario en FormularioRegistro.php

$conexion = true;
$NombreEmpleado = $_POST['NombresEmpleado'];
$ApellidoEmpleado = $_POST['ApellidosEmpleado'];
$TipoEmpleado = $_POST['TipoEmpleado'];
$DocumentoEmpleado = $_POST['DocumentoEmpleado'];
$CiudadEmpleado = $_POST['CiudadEmpleado'];
$CorreoEmpleado = $_POST['emailEmpleado'];
$TelefonoEmpleado = $_POST['telefonoEmpleado'];
$CelularEmpleado = $_POST['CelularEmpleado'];
$ContratoEmpleado = $_POST['ContratoEmpleado'];
$SedeEmpleado = $_POST['SedeEmpleado'];
$InicioEmpleado = $_POST['InicioEmpleado'];
$DevengadoEmpleado = $_POST['DevengadoEmpleado'];
$NombredeUsuario = $_POST['UserName'];
$ContraseñadeUsuario = $_POST['Password'];
$ConfContraseñadeUsuario = $_POST['confPassword'];

Conectarse($conexion);

	if($conexion){
		
            if($ContraseñadeUsuario == $ConfContraseñadeUsuario){
		$query = ("insert into zoonosis.usuarios(Nombre, Apellidos, Cedula, Ciudad, Email, Telefono_Fij, Telefono_Cel, UserName, Password) 
                        values ( '$NombreEmpleado', '$ApellidoEmpleado', $DocumentoEmpleado, '$SedeEmpleado' , '$CorreoEmpleado' , '$TelefonoEmpleado',  '$CelularEmpleado' , '$NombredeUsuario' , '$ContraseñadeUsuario')");
		mysql_query($query)or die(mysql_error()); 
            
		header ('location:index.php'); //Esta funcion hace que despues del registro se vuelva a la pagina index.php
		}
            else{
                echo "Error en la contraseña";
                header('location:'.$_SERVER['HTTP_REFERER']);
                }
        }
	else{
		echo ("No ha sido posible establecer la conexion");}
		
?>




