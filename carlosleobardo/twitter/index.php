<?php

session_start();
require('twitteroauth/twitteroauth.php');
require('config.php');

if (empty($_SESSION['access_token']) || empty($_SESSION['access_token']['oauth_token']) || empty($_SESSION['access_token']['oauth_token_secret'])) {
    header('Location: ./clearsessions.php');
}
$access_token = $_SESSION['access_token'];

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);

$content = $connection->get('account/verify_credentials');


//var_dump($content);


$id_token = $content->id;
$nombre = $content->name;

include("../PHP/conexion.php");


		$consulta_existencia = mysql_query("SELECT * FROM datos_usuario WHERE token_twitter = '$id_token'",$conexion);
		$dRow = mysql_fetch_array($consulta_existencia);
		
		if($dRow["token_twitter"] == ""){

		$inserta_registro = mysql_query("INSERT INTO datos_usuario (
		Nombre,
		clave_acceso,
		registro_via,
		token_twitter
		)VALUES(
		'$nombre',
		'TemporalTwitter',
		'Twitter',
		'$id_token'
		)",$conexion);

		$id=mysql_insert_id();
		
		}else{
		
		
		$id=$dRow["Id_usuario"];
		
		}



header("Location: logea.php?id=$id");


?>