<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset = "utf-8">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="../js/bootstrap.min.js">
<link rel="stylesheet" type="text/css" href="../css/estilo_sitio.css">

<script src = "../js/validaciones.js"></script>
<?php 
session_start();
include '../PHP/conexion.php'; include '../PHP/consulta_registro.php';

error_reporting(NULL);


$consulta_datos_usuario = mysql_query("SELECT * FROM datos_usuario WHERE Id_usuario = '$_SESSION[id_usuario]'",$conexion);
$dRow = mysql_fetch_array($consulta_datos_usuario);


if($dRow["registro_via"] == "Twitter"){
$msg = $dRow["token_twitter"];
}else{
$msg = $dRow["Correo_electronico"];
}


?>
</head>
<body>
<!-- Contenedor principal -->
<div class = "container-fluid">


	<!-- Cavecera -->
	<div class = "row">
		<nav class="navbar navbar-default" role="navigation">
			<div class = "sep_m">Bienvenid@: <?PHP echo $msg; ?></div>
			<ul class="nav nav-pills" id = "menu_usuario">
  				<li class="active"><a href="#">Registro de datos</a></li>
  				<li><a href="../PHP/cerrar_sesion.php">Salir</a></li>
			</ul>
			<div class = "sep_m"></div>
		</nav>
		<div class = "sep"></div>
	</div>

	<!-- Columna izqierda -->
	<div class = "col-md-5">
		<div class = "col-md-8 col-md-offset-2" id = "caja_informativa">
			<div class = "row">
				<!-- Carrucel de imagenes -->
				<div class = "col-md-12" id = "temporal_img">
					<img src="../img/bolsa1.jpg">
				</div>
			</div>
			<div class = "row">
				<div class = "col-md-10 col-md-offset-1" id = "caja_parrafo">
					<span>Registro de datos personales y de contacto</span>
					<p>
					..
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Columna derecha -->
	<div class = "col-md-7">
		<form id = "formulario_registro" action = "../PHP/alta_datos_usuario.php" method = "POST" enctype = "multipart/form-data">		

			<?php Consultar_datos_registro($_SESSION['id_usuario']); ?>
			
		</form>
	</div>

	<!-- Pie de página -->
	<div class = "row">
		<div class = "col-md-12" id = "pie_pagina"></div>
	</div>
</div>

</body>
</html>

