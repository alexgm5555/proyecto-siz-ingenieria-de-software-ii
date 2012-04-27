<?php include ("paquete1.php")?>

<?php 

//Este bloque de PHP nos permite guardar en la Base de Datos las variables solicitadas 
//al usuario en FormularioRegistro.php
    $conexion = true;
    $UsuarioEliminar = $_POST['UsuarioparaEliminar'];
    $id = $_POST['id'];

    Conectarse($conexion);
    
    if($conexion){
        $query = "select Nombres, Apellidos, Cedula, Ciudad  from zoonosis.Usuarios 
                  where (Cedula = $UsuarioEliminar and TipoUsuario='Particular')";
        $consulta = mysql_query($query) or die(mysql_error());
        if($row = mysql_fetch_array($consulta)){
            echo $row[0];
        }
        else{
            echo "El usuario no se encuentra registrado en el sistema.";
        }

    }
    else{
		echo ("No ha sido posible establecer la conexion");}
		
?>
</body>
</html>



