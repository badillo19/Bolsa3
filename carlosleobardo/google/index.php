<?php
/*
 * Copyright 2011 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
require_once 'src/Google_Client.php'; // include the required calss files for google login
require_once 'src/contrib/Google_PlusService.php';
require_once 'src/contrib/Google_Oauth2Service.php';
session_start();
$client = new Google_Client();
$client->setApplicationName("Bolsatrabajo"); // Set your applicatio name
$client->setScopes(array('https://www.googleapis.com/auth/userinfo.email', 'https://www.googleapis.com/auth/plus.me')); // set scope during user login
$client->setClientId('674111198262-4v00duong9vo1sgadnupce7kh4eq9be0.apps.googleusercontent.com'); // paste the client id which you get from google API Console
$client->setClientSecret('lfePSG-ep0CFZ3bzW7sJF_pz'); // set the client secret
$client->setRedirectUri('http://localhost/carlosleobardo/google'); // paste the redirect URI where you given in APi Console. You will get the Access Token here during login success
$client->setDeveloperKey('peppy-castle-776'); // Developer key
$plus 		= new Google_PlusService($client);
$oauth2 	= new Google_Oauth2Service($client); // Call the OAuth2 class for get email address
if(isset($_GET['code'])) {
	$client->authenticate(); // Authenticate
	$_SESSION['access_token'] = $client->getAccessToken(); // get the access token here
	header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
}

if(isset($_SESSION['access_token'])) {
	$client->setAccessToken($_SESSION['access_token']);
}

if ($client->getAccessToken()) {
  $user 		= $oauth2->userinfo->get();
  $me 			= $plus->people->get('me');
  $optParams 	= array('maxResults' => 100);
  $activities 	= $plus->activities->listActivities('me', 'public',$optParams);
  // The access token may have been updated lazily.
  $_SESSION['access_token'] 		= $client->getAccessToken();
  $email 							= filter_var($user['email'], FILTER_SANITIZE_EMAIL); // get the USER EMAIL ADDRESS using OAuth2
} else {
	$authUrl = $client->createAuthUrl();
}

if(isset($me)){ 
	$_SESSION['gplusuer'] = $me; // start the session
}

if(isset($_GET['logout'])) {
  unset($_SESSION['access_token']);
  unset($_SESSION['gplusuer']);
  session_destroy();
  header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']); // it will simply destroy the current seesion which you started before
  #header('Location: https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
  
  /*NOTE: for logout and clear all the session direct goole jus un comment the above line an comment the first header function */
}


if(isset($authUrl)) {
	//echo "<a class='login' href='$authUrl'><img src=\"google-login-button-asif18.png\" alt=\"Google login using php api for your website\" title=\"login with google\" /></a>";
	
	header("Location: $authUrl");


	} else {
	//echo "<a class='logout' href='index.php?logout'>Logout</a>";
}


if(isset($_SESSION['gplusuer'])){


	$correo = $user['email'];
	$nombre = $me['displayName'];

include("../PHP/conexion.php");


		$consulta_existencia = mysql_query("SELECT * FROM datos_usuario WHERE Correo_electronico = '$correo'",$conexion);
		$dRow = mysql_fetch_array($consulta_existencia);
		
		if($dRow["Correo_electronico"] == ""){

		$inserta_registro = mysql_query("INSERT INTO datos_usuario (
		Nombre,
		Correo_electronico,
		clave_acceso,
		registro_via
		)VALUES(
		'$nombre',
		'$correo',
		'TemporalGoogle+',
		'Google+'
		)",$conexion);


		$id=mysql_insert_id();
		
		}else{
		
		
		$id=$dRow["Id_usuario"];
		
		}
		
		

		header("Location: logea.php?id=$id");




}


?>