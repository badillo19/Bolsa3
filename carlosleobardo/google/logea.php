<?php 

session_start();


include '../PHP/conexion.php';

	
$_SESSION['id_usuario'] = $_GET["id"];




header('location: ../usuario/registro_datos_usario.php');
	

?>