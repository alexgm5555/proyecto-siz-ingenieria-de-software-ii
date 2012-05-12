<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php

session_start();

$_SESSION['DATOS'] = $_SESSION['row'];
$url_anterior = $_SESSION['url'];

if($url_anterior == '/proyecto-siz-ingenieria-de-software-ii/AdministracionEmpleados.php'){
    $tipo = 'Empleado';
}
else{
    $tipo = 'Usuario';
}

echo '
    
<html>

    <head>

        <link rel="stylesheet" type="text/css" href="style2.css" />

    </head>
        <body>
            <div id="box1">
 
						<p>
                                                        '.$tipo.' encontrado: <br>
							Nombre: '.$_SESSION['row'][2].' '.$_SESSION['row'][3].' <br>
                                                        Cedula: '.$_SESSION['row'][4].' <br>
                                                        Ciudad: '.$_SESSION['row'][5].' <br>
                                                        
                                                </p>
                                                
                                                <a href="EditarUsuario.php"><button><strong>Editar</strong>></button></a>
                                                <a href="EliminarUsuario.php"><button><strong>Eliminar</strong>></button></a>
            </div>
                                                
            <p>&nbsp;</p>
        </body>
</html>

';

?>
