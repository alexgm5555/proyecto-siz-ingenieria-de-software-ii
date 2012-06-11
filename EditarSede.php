<?php include ("conexionMySQL.php")?>
<?php 

session_start();

$sedeEditar = $_SESSION['row'];

echo '
<!DOCTYPE html>
<html>
    <head>
    
    <!--
    Script que permite capturar la tecla enter y enviar el formulario
    -->
    <script language="javascript "type="text/javascript">
		function stopRKey(evt) { 
		var evt = (evt) ? evt : ((event) ? event : null);
		var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
		if ((evt.keyCode == 13) && (node.type=="text")) {return false;}
		}
		document.form1.onkeypress = stopRKey; 
	</script>
    
    <script language="javascript">

	function valida_envia(){ 
	var nombreSede = document.form1.nombreSede.value;
        var direccionSede = document.form1.direccionSede.value;
	var emailSede = document.form1.emailSede.value;
	var telefonoSede = document.form1.telefonoSede.value;
	
	var patron2 = /"/;
	var patron3 = /;/;
	
		//valido el usuario
	
	// El usuario no puede ser vacio:
    if (nombreSede.length==0){ 
       alert("Ingrese un nombre de la Sede") 
       document.form1.nombreSede.focus() 
       return 0; 
    }
    
    //El nombre no puede contener caracteres especiales
	else if (nombreSede.search(patron) != -1 || nombreSede.search(patron2) != -1 || nombreSede.search(patron3) != -1){ 
       alert("El Nombre no puede llevar caracteres especiales.") 
       document.form1.nombreSede.focus() 
       return 0; 
    } 
	
	// El email no puede ser vacio:
    else if (emailSede.length==0){ 
       alert("El email no puede ser vacío.") 
       document.form1.emailSede.focus() 
       return 0; 
    }
    
    //El email no puede contener caracteres especiales
	else if (emailSede.search(patron) != -1 || emailSede.search(patron2) != -1 || emailSede.search(patron3) != -1){ 
       alert("El Email no puede llevar caracteres especiales excepto @.") 
       document.form1.emailSede.focus() 
       return 0; 
    }
    
    //Se valida si el campo de email tiene el formato de email correcto
	
    re=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/
    if(!re.exec(emailSede))    {
        alert("El Email ingresado no tiene un formato correcto. Por favor ingrese un email con el siguiente formato: ejemplo@dominio.com.");
		document.form1.emailSede.focus();
		return 0; 
    }
	
	// El telefono no puede ser vacio:
    else if (telefonoSede.length==0){ 
       alert("El teléfono no puede ser vacío.") 
       document.form1.telefonoSede.focus() 
       return 0; 
    }
    
    //El telefono no puede contener caracteres especiales
	else if (telefonoSede.search(patron) != -1 || telefonoSede.search(patron2) != -1 || telefonoSede.search(patron3) != -1){ 
       alert("El Teléfono no puede llevar caracteres especiales.") 
       document.form1.telefonoSede.focus() 
       return 0; 
    }
    
    //Se valida que el telefono sea numerico
	Numer=parseInt(telefonoSede);
    if (isNaN(Numer)){
            alert("El Teléfono ingresado no es válido.");
			document.form1.telefonoSede.focus();
			return 0; 
    }
    
    // La direccion no puede ser vacia:
    else if (direccionSede.length==0){ 
       alert("La direccion no puede ser vacia.") 
       document.form1.direccionSede.focus() 
       return 0; 
    }

	//el formulario se envia 
   
    document.form1.submit(); 
} 

// Funcion que llama a la anterior si en alguno de los campos se presiona la tecla enter
	function onEnter(ev) {  
	if(ev==13)    { 
	valida_envia();  
	}  
	}
	
	</script>

        <title>Editar Sede</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style2.css"/>
    </head>
    <body>
        <div>
                                <p>Por favor diligencie el formulario de la Sede:</p>
                                <form id="form1" name="form1" method="post" action="ActualizarSede.php">
                                <table width="600" border="0">
                                <tr>
                                  <td>Nombre:</td>
                                  <td><label for="nombreSede"></label>
                                  <input name="nombreSede" type="text" id="nombreSede" value= "'.$sedeEditar[1].'" size="45px" /></td>
                                </tr>
                                <tr>
                                  <td>Ciudad:</td>
                                  <td>
                                        ';
                                                 
                                                /*Este bloque PHP mostrara un menu desplegable de ciudades valiendose de los registros 
                                                * de la tabla Ciudades de la Base de Datos.
                                                */

                                                $conexion = true;
                                                Conectarse($conexion);
                                                if($conexion){
                                                    $consulta = mysql_query("select * from zoonosis.ciudades order by Nombre_Ciudad ASC");
                                                    echo "<select name = ciudadSede id = ciudadSede>";
                                                    while($fila = mysql_fetch_array($consulta)){
                                                        echo "<option value='".$fila[1]."'>".($fila[1])."</option>";
                                                    }
                                                echo "</select>";
                                                }
                                        echo '
                                  </td>
                                </tr>
                                <tr>
                                  <td>Dirección:</td>
                                  <td><input name="direccionSede" type="text" id="direccionSede" value= "'.$sedeEditar[3].'" size="45px" maxlength="40"/></td>
                                </tr>
                                <tr>
                                  <td>Teléfono:</td>
                                  <td><input name="telefonoSede" type="text" id="telefonoSede" value= "'.$sedeEditar[4].'" size="45px" maxlength="40"/></td>
                                </tr>
                                <tr>
                                  <td>E-mail:</td>
                                  <td><input name="emailSEde" type="text" id="emailSede" value= "'.$sedeEditar[5].'" size="45px" maxlength="40"/></td>
                                </tr>
                                <tr>
                                  <td colspan="2" ><div align="center">
                                    <input type="button" name="login" value="Registrar Cambios" class="inputButton" onclick="valida_envia()"/>
                                  </div></td>
                                  </tr>
                              </table>
                                
                                </form>
                                <p>&nbsp;</p>

        </div>
    </body>
</html>
        
';