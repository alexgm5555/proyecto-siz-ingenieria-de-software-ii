<?php include ("paquete1.php")?>

<?php 

/*
 * Este bloque de PHP nos permite buscar en la Base de Datos las variables solicitadas
 * al usuario en BusquedaUsuario.php 
 */ 
    
session_start();
    $url_anterior = $_SESSION['url'];
    $UsuarioModificar = $_POST['UsuarioparaModificar'];

    $conexion = Conectarse();
    
    if($conexion)
        {
        
        if($url_anterior == '/proyecto-siz-ingenieria-de-software-ii/AdministracionEmpleados.php')
            {
            $query = "select *  from usuarios 
                  where (Cedula = $UsuarioModificar and TipoUsuario = 'Empleado')";
            }
        else
            {
            $query = "select *  from usuarios 
                  where (Cedula = $UsuarioModificar and TipoUsuario = 'Particular')";
            }
        
        $consulta = mysql_query($query) or die(mysql_error());
        $_SESSION['row'] = mysql_fetch_array($consulta);
        
        if($_SESSION['row'] != null)
            {
            header('Location: ConfigurarUsuario.php');
            }
        else
            {  
            echo "<script> alert('El usuario no esta registrado.')
                                location.href='/proyecto-siz-ingenieria-de-software-ii/BusquedaUsuario.php';
                                </script>
                             "; 
            }

        }
    else{
		echo ("No ha sido posible establecer la conexion");}
		
?>




