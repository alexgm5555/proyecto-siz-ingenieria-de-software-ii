<?php include ("paquete1.php")?>

<?php 

/*
 * Este bloque de PHP nos permite buscar en la Base de Datos las variables solicitadas
 * al usuario en BusquedaUsuario.php 
 */ 
    
session_start();

    $Usuario = $_SESSION['row'];
    $url_anterior = $_SESSION['url'];
    
    $Nombre = $_POST['Nombres'];
    $Apellido = $_POST['Apellidos'];
    $TipoEmpleado = $_POST['TipoEmpleado'];
    $Documento = $_POST['Documento'];
    $Ciudad = $_POST['Ciudad'];
    $Correo = $_POST['email'];
    $Telefono = $_POST['telefono'];
    $Celular = $_POST['Celular'];
    $ContratoEmpleado = $_POST['ContratoEmpleado'];
    $SedeEmpleado = $_POST['SedeEmpleado'];
    $InicioEmpleado = $_POST['InicioEmpleado'];
    $DevengadoEmpleado = $_POST['DevengadoEmpleado'];
    $NombredeUsuario = $_POST['UserName'];
    $ContraseñadeUsuario = $_POST['Password'];
    $ConfContraseñadeUsuario = $_POST['confPassword'];

    $conexion = Conectarse();
    
    if($conexion)
        {
        
        if($url_anterior == '/proyecto-siz-ingenieria-de-software-ii/AdministracionEmpleados.php')
            {
            $query = "UPDATE zoonosis.Usuarios SET Nombres = '$Nombre', Apellidos = '$Apellido', 
                                                   Cedula = '$Documento', Ciudad = '$Ciudad', 
                                                   Email = '$Correo', Telefono_Fij = '$Telefono',
                                                   Telefono_Cel = '$Celular', Contrato = '$ContratoEmpleado',
                                                   SedeLaboral = '$SedeEmpleado', FechaInicio = '$InicioEmpleado', 
                                                   SuelDevengado = '$DevengadoEmpleado',UserName = '$NombredeUsuario',
                                                   Password = '$ContraseñadeUsuario', TipoUsuario = '$TipoEmpleado' 
                      where (Cedula = $Usuario[4])";
            }
        else
            {
            $query = "UPDATE zoonosis.Usuarios SET Nombres = '$Nombre', Apellidos = '$Apellido', 
                                                   Cedula = '$Documento', Ciudad = '$Ciudad', 
                                                   Email = '$Correo', Telefono_Fij = '$Telefono',
                                                   Telefono_Cel = '$Celular', UserName = '$NombredeUsuario',
                                                   Password = '$ContraseñadeUsuario'
                      where (Cedula = $Usuario[4])";
            }
        
            $ErrorBase = "<script> alert('Ha ocurrido algún error.')
                                location.href='/proyecto-siz-ingenieria-de-software-ii/BusquedaUsuario.php';
                                </script>
                             ";

        mysql_query($query) or die($ErrorBase);
        
      
        }
    else{
		echo ("No ha sido posible establecer la conexion");}
		
?>
