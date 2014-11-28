<?php 

include 'conexion.php';

$correo = $_POST['correo_electronico'];
$pass = $_POST['clave_acceso'];

$insert = "INSERT INTO datos_usuario (Correo_electronico, clave_acceso) VALUES ('".$correo."', '".$pass."')";

if(mysql_query($insert)) {
	//hacer página de confirmación;
	header('location: ../registro_completo.html');
}
else {
	echo 'No se guardo'.mysql_error();	
}

?>