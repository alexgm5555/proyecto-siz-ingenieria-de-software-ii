<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
session_start();

include ("conexionMySQL.php");
#hola
$conexion = Conectarse();
#
$ArregloAnimalesRegistrados=mysql_query("select * from animal ORDER BY idAnimal DESC");
$MaxImagenes=8;
?>
<head>
<title>jCoverflip Test</title>

    

    <link rel="stylesheet" href="jquery-ui-1.7.2/css/ui-lightness/jquery-ui-1.7.2.custom.css" type="text/css" media="all" />

    <style>

      .ui-jcoverflip {

        position: relative;

      }

      

      .ui-jcoverflip--item {

        position: absolute;

        display: block;

      }

      

      /* Basic sample CSS */

      #flip {

        height: 200px;

        width: 730px;

        margin-bottom: 50px;

      }

      

      #flip .ui-jcoverflip--title {

        position: absolute;

        bottom: -30px;

        width: 100%;

        text-align: center;

        color: #555;

      }

      

      #flip img {

        display: block;

        border: 0;

        outline: none;

      }

      

      #flip a {

        outline: none;

      }

      

      

      #wrapper {

        height: 400px;

        width: 680px;

        overflow: hidden;

        position: relative;

      }

      

      .ui-jcoverflip--item {

        cursor: pointer;

      }

      

      

      

      body {

        font-family: Arial, sans-serif;

        width: 730px;

        padding: 0;

        margin: 0;

      }

      

      ul,

      ul li {

        margin: 0;

        padding: 0;

        display: block;

        list-style-type: none;

      }

      

      #scrollbar {
	position: absolute;
	left: 30px;
	right: 20px;
	
        

      }

      



    </style>

    

<script type="text/javascript" src="jquery-1.3.2.js"></script>

    <script type="text/javascript" src="jquery-ui-1.7.2.custom.js"></script>

    <script type="text/javascript" src="jquery.jcoverflip.js"></script>

    <script>

    jQuery( document ).ready( function(){

        jQuery( '#flip' ).jcoverflip({

          current: 2,

          beforeCss: function( el, container, offset ){

            return [

              $.jcoverflip.animationElement( el, { left: ( container.width( )/2 - 210 - 110*offset + 20*offset )+'px', bottom: '20px' }, { } ),

              $.jcoverflip.animationElement( el.find( 'img' ), { width: Math.max(10,100-20*offset*offset) + 'px' }, {} )

            ];

          },

          afterCss: function( el, container, offset ){

            return [

              $.jcoverflip.animationElement( el, { left: ( container.width( )/2 + 110 + 110*offset )+'px', bottom: '20px' }, { } ),

              $.jcoverflip.animationElement( el.find( 'img' ), { width: Math.max(10,100-20*offset*offset) + 'px' }, {} )

            ];

          },

          currentCss: function( el, container ){

            return [

              $.jcoverflip.animationElement( el, { left: ( container.width( )/2 - 100 )+'px', bottom: 0 }, { } ),

              $.jcoverflip.animationElement( el.find( 'img' ), { width: '200px' }, { } )

            ];

          },

          change: function(event, ui){

            jQuery('#scrollbar').slider('value', ui.to*25);

          }

        });

        

        

        jQuery('#scrollbar').slider({

          value:150,

          stop: function(event, ui) {

            if(event.originalEvent) {

              var newVal = Math.round(ui.value/25);

              jQuery( '#flip' ).jcoverflip( 'current', newVal );

              jQuery('#scrollbar').slider('value', newVal*25);

            }

          }

        });

      });

      

      

    </script>

        

  </head>

  <body>
    <div id="wrapper"  >

    <ul id="flip">
		<?php
                $contador =1;
	 	#Se hace un mientras para colocar todas las mascotas que se han registrado, para enviarselas a flip que hace que se vea el carrusel en el index
		#en el f queda un arreglo de los datos de cada animal registrado en la BD
                while(($f=mysql_fetch_array($ArregloAnimalesRegistrados))AND ($contador<=$MaxImagenes)){
		?>
      		<li><span class="title">
	  		<?php 
                        #codigo para colocar la Nombre de la mascota 
	  		echo $f['Sexo'];?><br /><?php echo $f['idAnimal'];?></span><?php
			#codigo para colocar la imagen de la mascota 
			echo'<img src="'.$f['Foto'].'"width="500" heigth="450"/>';
                        $contador++;
			?></li>
                <?php
		}
	  	?>

      
	</ul>

    <div id="scrollbar">c</div>
    </div>

  </body>

</html>