<?php 

session_start();


	header('location: ../usuario/registro_datos_usario.php');
	$_SESSION['id_usuario'] = $_GET["id"];

?>