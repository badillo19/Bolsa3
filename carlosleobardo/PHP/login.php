<?php 

session_start();
include 'conexion.php';

$t_correo = $_POST['correo_electronico'];
$t_pass = $_POST['clave_acceso'];
$id = "";
$pass = "";
$session = '';

$sql = mysql_query("SELECT Id_usuario, clave_acceso  FROM datos_usuario WHERE Correo_electronico = '".$t_correo."'");


while($reg = mysql_fetch_array($sql)) {

	$id = $reg['Id_usuario'];
	$pass = $reg['clave_acceso'];
	$session = $reg['Id_usuario'];
}

if($pass == $t_pass) {
	header('location: ../usuario/registro_datos_usario.php');
	$_SESSION['id_usuario'] = $session;
}
else {
	header('location: ../login_invalido.html');
}

?>