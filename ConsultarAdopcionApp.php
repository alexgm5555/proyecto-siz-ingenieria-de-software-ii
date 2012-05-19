<?php include ("conexionMySQL.php")?>
<?php
session_start();
isset( $_SESSION['usuario']); 
$idUsuario = $_SESSION['usuario'];
echo  $idUsuario;
$conexion = Conectarse();
$conexion = true;
 if($conexion){
	 
 	$solicitudes=mysql_query("select * from solicitud_adopcion where CC_Solicitante= '.$idUsuario.'");
	echo  "Aca va el codigo de consultad adopcion.php";
	
		?><div class="form">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <th scope="col"><p align="center">&nbsp; </p>
        <table width="70%" border="1" align="center">
          <?php
														  	#Se hace un mientras para colocar todas las mascotas que se han registrado
															
															/*if(($Tipo!="Todos")||($Ciudad!="Todos")||($Sexo!="Todos")){
																if($Tipo=="Todos"){$Tipo="";}
																if($Sexo=="Todos"){$Sexo="";}
																if($Ciudad=="Todos"){$Ciudad="";}
																$re=mysql_query("select * from animal where TipoAnimal='$Tipo',Sexo='$Sexo'");
																}*/
																#Se hace un mientras para colocar todas las mascotas que se han registrado
															
                                    						while($f=mysql_fetch_array($solicitudes)){
		$idAnimal=$f['id_Animal'];
		echo $idAnimal;
		$fa=mysql_query("select * from animal where idAnimal= $idAnimal");
		$fanimal=mysql_fetch_array($fa);
		echo $fanimal['Nombre'];
		
																
															?>
          <tr>
            <th scope="col"> <table width="100%" height="83" border="0">
              <tr>
                <th width="18%" height="79"  align="center"  scope="col"border=""> <?php
																					#codigo para colocar la imagen de la mascota 
																					echo'<img src="'.$fanimal['Foto'].'"width="70" heigth="90"/>';
																					?>
                </th>
                <th width="7%"  scope="col"border="" >&nbsp;</th>
                <th width="45%" align="left" scope="col">Nombre:
                  <?php
																					echo $fanimal['Nombre'];
																					?>
                  <br />
                  Sexo:
                  <?php
																					echo $f['idSolicitud_Adopcion'];
																					?></th>
                <th width="30%" align="center" scope="col"> </iframe></th>
              </tr>
            </table>
              <?php
																}
																
																			?>
            </th>
          </tr>
        </table>
        </p>
        <p></p></th>
    </tr>
  </table>
  <p align="center">&nbsp;</p>
</div>

		
		
		<?php
		
	
 }
 else
?>