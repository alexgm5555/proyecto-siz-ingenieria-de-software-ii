<?php include ("paquete1.php")?>

<?php 

//Este bloque de PHP nos permite buscar en la Base de Datos las variables solicitadas 
//al usuario en BusquedaUsuario.php
    
session_start();
    $url_anterior = $_SESSION['url'];
    $UsuarioModificar = $_POST['UsuarioparaModificar'];

    $conexion = Conectarse();
    
    if($conexion){
        
        if($url_anterior == '/proyecto-siz-ingenieria-de-software-ii/AdministracionEmpleados.php'){
            $query = "select Nombres, Apellidos, Cedula, Ciudad  from zoonosis.Usuarios 
                  where (Cedula = $UsuarioModificar and TipoUsuario = 'Empleado')";
        }
        else{
            $query = "select Nombres, Apellidos, Cedula, Ciudad  from zoonosis.Usuarios 
                  where (Cedula = $UsuarioModificar and TipoUsuario = 'Particular')";
        }
        $consulta = mysql_query($query) or die(mysql_error());
        $_SESSION['row'] = mysql_fetch_array($consulta);
        
        if($_SESSION['row'] != null){            
            header('Location: ModificarUsuario.php');
        }
        else{
            echo "El usuario no se encuentra registrado en el sistema.";
        }

    }
    else{
		echo ("No ha sido posible establecer la conexion");}
		
?>




