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
		$query = "insert into zoonosis.usuarios(TipoUsuario, Nombres, Apellidos, Cedula, Ciudad, Email, Telefono_Fij, Telefono_Cel, Contrato, SedeLaboral, FechaInicio, SuelDevengado, UserName, Password)
                        values ( '$TipoEmpleado', '$NombreEmpleado', '$ApellidoEmpleado', '$DocumentoEmpleado', '$CiudadEmpleado' , '$CorreoEmpleado' , '$TelefonoEmpleado',  '$CelularEmpleado' , '$ContratoEmpleado', '$SedeEmpleado', '$InicioEmpleado', '$DevengadoEmpleado', '$NombredeUsuario' , '$ContraseñadeUsuario')";
		
                $ErrorBase = "<script> alert('El documento ya esta registrado.')
                                location.href='/proyecto-siz-ingenieria-de-software-ii/AdministracionEmpleados.php';
                                </script>
                             ";
                
                mysql_query($query)or die($ErrorBase); 
            
		header ('location:AdministracionEmpleados.php'); //Esta funcion hace que despues del registro se vuelva a la pagina index.php
		}
            else{
                echo "Error en la contraseña";
                header('location:'.$_SERVER['HTTP_REFERER']);
                }
        }
	else{
		echo ("No ha sido posible establecer la conexion");}
		
?>




