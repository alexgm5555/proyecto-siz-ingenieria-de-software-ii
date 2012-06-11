<?php
include ("conexionMySQL.php");
?>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$conexion = Conectarse();

if($conexion){
    
session_start();

$SedeModificar = $_POST['Sede'];

$Query = "select *  from zoonosis.Sedes  where Nombre = '$SedeModificar'";
$Consulta = mysql_query($Query) or die(mysql_error());
$_SESSION['row'] = mysql_fetch_array($Consulta);

echo '<html>

    <head>

        <link rel="stylesheet" type="text/css" href="style2.css" />

    </head>
        <body>
            <div id="box1">
 
						<p>
                                                        Sede seleccionada: <br>
							Nombre: '.$_SESSION['row'][1].' <br>
                                                        Ciudad: '.$_SESSION['row'][2].' <br>
                                                        Telefono: '.$_SESSION['row'][4].' <br>
                                                        Email: '.$_SESSION['row'][5].' <br>
                                                        
                                                </p>
                                                
                                                <a href="EditarSede.php" class="button">Editar</a>
                                                <a href="EliminarSede.php" class="button">Eliminar</a>
            </div>
                                                
            <p>&nbsp;</p>
        </body>
</html>

        ';

}



?>
