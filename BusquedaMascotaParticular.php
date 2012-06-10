
<?php

session_start();


$tipo = $_POST['TipoBusquedaOculto'];



echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

        
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
		document.form2.onkeypress = stopRKey; 
	</script>
        
    <script language="javascript">

	function valida_envia(){
        var UserName = document.form2.UsuarioAsociado.value;
        
        var patron2 = /"/;
	var patron3 = /;/;
        
        // El usuario no puede ser vacio:
        if (UserName.length==0){ 
        alert("El usuario no puede ser vacío.") 
        document.form1.UserName.focus() 
        return 0; 
        }

        //El usuario no puede contener caracteres especiales
	else if (UserName.search(patron2) != -1 || UserName.search(patron3) != -1){ 
        alert("El Nombre de Usuario no puede llevar caracteres especiales.") 
        document.form1.UserName.focus() 
        return 0; 
        }

        document.form2.submit();

    }
    
    // Funcion que llama a la anterior si en alguno de los campos se presiona la tecla enter
	function onEnter(ev) {  
	if(ev==13)    { 
	valida_envia();  
	}  
	}
        
    </script>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Documento sin título</title>    
        <link rel="stylesheet" type="text/css" href="style2.css" />

    </head>
        <body>
            <p align="center">Por favor ingrese el nombre de un usuario:</p>
                               <form id="form2" name="form2" method="post" action="MascotasRegistradasIFrame.php">
                                   <input type="hidden" value="1" name="id"/>
                                <p align="center">
                                  <label for="select"></label>
                                  <input name="UsuarioAsociado" type="text" id="UsuarioAsociado" maxlength="40"/>
                                </p>
                                <div align="center">
                                  <table width="100" border="0">
                                    <tr>
                                      <td><input type="submit" name="login3" value="Buscar" class="inputButton" onclick="valida_envia()"/></td>
                                    </tr>
                                  </table>
                                </div>
                                <p align="center">&nbsp;</p>
                              </form>
            <p>&nbsp;</p>
        </body>
</html>
';

?>