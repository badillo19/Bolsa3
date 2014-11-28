<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
	$conexion = mysql_connect('localhost', 'root', '');
	$selec_bd = mysql_select_db('bolsadetrabajo', $conexion);

	if(!$selec_bd) {
		die('No se ha podido establecer conexión con la base de datos');
	}

	if(!$conexion) {
		die('Ha ocurrido un error con la conexión');

	}

?>