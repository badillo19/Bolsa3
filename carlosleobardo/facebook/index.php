<?php


/* INCLUSION OF LIBRARY FILEs*/
	require_once( 'lib/Facebook/FacebookSession.php');
	require_once( 'lib/Facebook/FacebookRequest.php' );
	require_once( 'lib/Facebook/FacebookResponse.php' );
	require_once( 'lib/Facebook/FacebookSDKException.php' );
	require_once( 'lib/Facebook/FacebookRequestException.php' );
	require_once( 'lib/Facebook/FacebookRedirectLoginHelper.php');
	require_once( 'lib/Facebook/FacebookAuthorizationException.php' );
	require_once( 'lib/Facebook/GraphObject.php' );
	require_once( 'lib/Facebook/GraphUser.php' );
	require_once( 'lib/Facebook/GraphSessionInfo.php' );
	require_once( 'lib/Facebook/Entities/AccessToken.php');
	require_once( 'lib/Facebook/HttpClients/FacebookCurl.php' );
	require_once( 'lib/Facebook/HttpClients/FacebookHttpable.php');
	require_once( 'lib/Facebook/HttpClients/FacebookCurlHttpClient.php');

/* USE NAMESPACES */
	
	use Facebook\FacebookSession;
	use Facebook\FacebookRedirectLoginHelper;
	use Facebook\FacebookRequest;
	use Facebook\FacebookResponse;
	use Facebook\FacebookSDKException;
	use Facebook\FacebookRequestException;
	use Facebook\FacebookAuthorizationException;
	use Facebook\GraphObject;
	use Facebook\GraphUser;
	use Facebook\GraphSessionInfo;
	use Facebook\FacebookHttpable;
	use Facebook\FacebookCurlHttpClient;
	use Facebook\FacebookCurl;

/*PROCESS*/
	
	//1.Stat Session
	 session_start();
	//2.Use app id,secret and redirect url
	 $app_id = '858317160865438';
	 $app_secret = '5435c1e852ccb1759aec22f7e81716e5';
	 $redirect_url='http://localhost/carlosleobardo/facebook';
	 
	 //3.Initialize application, create helper object and get fb sess
	 FacebookSession::setDefaultApplication($app_id,$app_secret);
	 $helper = new FacebookRedirectLoginHelper($redirect_url);
	 $sess = $helper->getSessionFromRedirect();

	//4. if fb sess exists echo name 
	 	if(isset($sess)){
	 	
		


$request = new FacebookRequest($sess, 'GET', '/me');
$response = $request->execute();
$me= $response->getGraphObject();

$nombre = $me->getProperty('name');
$correo = $me->getProperty('email');



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
		'TemporalFacebook',
		'Facebook'
		)",$conexion);
		$id=mysql_insert_id();
		
		}else{
		
		
		$id=$dRow["Id_usuario"];
		
		}
		
		
		
		
		
		header("Location: logea.php?id=$id");


		
		
		
		
	}else{
		//else echo login
		//echo '<a href='.$helper->getLoginUrl(array('email')).'>Login with facebook</a>';
			
			$url = $helper->getLoginUrl(array('email'));
			
			header("Location: $url");
	
	}

?>