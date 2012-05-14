<?php
// Se destruye la sesión
session_start(); 
session_destroy();
header ('location:index.php?LoginMesagge=3'); 
?>