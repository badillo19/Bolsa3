<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset = "utf-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
<link rel="stylesheet" type="text/css" href="css/estilo_sitio.css">

<!-- jQuery Version 1.11.0 -->
<script src="js/jquery-1.11.0.js"></script>
<script src = "js/bootstrap.min.js"></script>
<script type="text/javascript" src = "js/validaciones.js"></script>
<script>
	$('.carousel').carousel({
  		interval: 2000
	})
</script>

<?php include 'PHP/consulta_personas.php' ?>

<style type="text/css">
.auto-style1 {
	text-align: center;
}
.auto-style2 {
	text-align: left;
	font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
}
.auto-style6 {
	font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
	font-size: x-small;
}
.auto-style7 {
	background-color: #333333;
}
</style>

</head>
<body>

<!-- Contenedor principal -->
<div class = "container-fluid">

<!-- Cavecera -->
	<div class = "row">
		<nav class="navbar navbar-default" role="navigation">
      <div class = "sep_m"></div>

          <div class = "row">
            <div class = "col-md-6">
                <a href="#">
                  <img src="img/el_siglo_de_torreon_logo.jpg" id = "logo_siglo">
                </a>
            </div>


          <div class = "col-md-6">
          <ul class="nav nav-pills col-md-offset-5">
          <li><a href="index.php">inicio</a></li>
          <li class="active"><a href="#">Personas</a></li>
          <li><a class="btn" data-toggle="modal" href="#modal_registro">Registro</a></li>
          <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
            <div class="modal fade" id = "modal_registro">
              <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      <h4 class="modal-title">Registro de usuario</h4>
                    </div>
                    <div class="modal-body">

                      <!-- SecciÃƒÂ³n redes sociales -->
                      <div class = "row">
                        <div class = "col-md-12" id = "sec_redes_sociales">
                          <a href="google/index.php"><img src="img/1411345748_square-google-plus-128.png"></a>
                          <a href="twitter/redirect.php"><img src="img/1411345738_square-twitter-128.png"></a>
                          <a href="facebook/index.php"><img src="img/1411345726_square-facebook-128.png"></a>
                        </div>
                      </div>

                      <!-- Formulario de registro -->
                      <div class = "row">
                        <div class = "col-md-8 col-md-offset-2">


                        <form id = "formulario_registro" action = "PHP/registro_usuario.php" method = "POST">
                          <span>Correo electrÃƒÂ³nico</span>
                          <span class = "oculto" id = "msj_cnv">Introduce un correo de electrÃƒÂ³nico valido</span>
                          <span class = "oculto" id = "msj_cn">Es necesario un correo electrÃƒÂ³nico</span>
                          <span class = "oculto" id = "msj_cenv">introduce un correo electrÃƒÂ³nico valido</span>
                          <input type = "text" class="form-control" name = "correo_electronico" id = "tx_correo" oninput = "remover_validacion()">
                          <span>ContraseÃƒÂ±a:</span>        
                          <span class = "oculto" id = "msj_pn">Es necesario introducir una contraseÃƒÂ±a</span>
                          <!-- <span>Los campos contraseÃƒÂ±a deben coinsidir</span> -->
                          <input type = "password" class="form-control" name = "clave_acceso" id = "tx_passwors" oninput = "remover_validacion()">
                          <span id = "msj_cpi">Confirmar contraseÃƒÂ±a:</span>
                          <span class = "oculto" id = "msj_cp">Es necesario confirmar tu contraseÃƒÂ±a</span>
                          <input type = "password" class="form-control" id = "tx_repit_password" oninput = "remover_validacion()">
                      </div>
                      </div>
              
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                      <button type="button" class="btn btn-primary" onclick = "validar_form_registro(), validar_password()">Registrarse</button>
                      </form>
                    </div>
                </div>
            </div>
          </div>
          <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
          <li><a href="#modal_login" class="btn" data-toggle="modal">Login</a></li>
          <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
            <div class="modal fade" id = "modal_login">
              <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      <h4 class="modal-title">Registro de usuario</h4>
                    </div>
                    <div class="modal-body">

                      <!-- SecciÃƒÂ³n redes sociales -->
                      <div class = "row">
                        <div class = "col-md-12" id = "sec_redes_sociales">
                          <a href="google/index.php"><img src="img/1411345748_square-google-plus-128.png"></a>
                          <a href="twitter/redirect.php"><img src="img/1411345738_square-twitter-128.png"></a>
                          <a href="facebook/index.php"><img src="img/1411345726_square-facebook-128.png"></a>
                        </div>
                      </div>

                      <!-- Formulario de registro -->
                      <div class = "row">
                        <div class = "col-md-8 col-md-offset-2">
                        <form action = "PHP/login.php" method = "POST" id = "form_login">
                          <span>Correo electrÃƒÂ³nico</span>
                          <span class = "oculto" id = "msj_cnl">Es necesario un correo electrÃƒÂ³nico</span>
                          <input type = "text" class="form-control" name = "correo_electronico" id = "correo_log" oninput = "remover_validacion_login()">
                          <span>ContraseÃƒÂ±a:</span>
                          <span class = "oculto" id = "msj_pnlog">Es necesario introducir una contraseÃƒÂ±a</span>
                          <input type = "password" class="form-control" name = "clave_acceso" id = "clave_log" oninput = "remover_validacion_login()">
                        </form>
                      </div>
                      </div>
              
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                      <button type="button" class="btn btn-primary" onclick = "validacion_login()">Entrar</button>
                    </div>
                </div>
            </div>
          </div>
          <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
      </ul>
            </div>


          </div>

      <div class = "sep_m"></div>
    </nav>
	</div>

	<!-- Columna izquierda -->
	<div class = "row">
		<div class = "col-md-4">
			
			<?PHP
			
			include("menu.php");
			
			?>
			
		</div>

		<!-- Contenido principal -->
			<div class = "col-md-8">
				<!-- Caja de consulta de personas -->
				<div class = "col-md-11" id = "caja_consulta" style="left: 0px; top: 0px">

				<div class = "sep"></div>
					<!-- informaciÃƒÂ³n de la persona -->
				<div>



						

					
					
					
		<?PHP
		
		error_reporting(NULL);
			
		if($_GET["t02idcarrera"] == ""){
		$consulta_personas = mysql_query("SELECT * FROM datos_usuario LIMIT 10",$conexion);
		}else{
		$consulta_personas = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = '$_GET[t02idcarrera]'",$conexion);
		}
		
		
		$dRow = mysql_fetch_array($consulta_personas);
if(mysql_num_rows($consulta_personas) != ""){		
do{
			

$consulta_carreras = mysql_query("SELECT * FROM t02carrera WHERE t02idcarrera = '$dRow[Especialidad]'",$conexion);
$carRow = mysql_fetch_array($consulta_carreras);


if($dRow['Foto_perfil'] == ""){
$foto_perfil = "img/1409003949_user-alt.png";
}else{
$foto_perfil = "usuario/archivos/fotos_perfil/".$dRow['Foto_perfil'];
}

		
echo '<table cellpadding="0" cellspacing="0" style="width: 100%">
	<tr>
		<td>
		<table cellpadding="0" cellspacing="0" style="width: 100%">
			<tr>
				<td class="auto-style1" style="width: 150px">
				<img alt="" height="128" src="'.$foto_perfil.'" width="128"></td>
				<td>
				<table cellpadding="0" cellspacing="0" style="width: 100%">
					<tr>
						<td class="auto-style2" style="width: 116px">Nombre:</td>
						<td>
						<table cellpadding="0" cellspacing="0" style="width: 100%">
							<tr>
								<td class="auto-style6" style="width: 671px">&nbsp;'.$dRow["Nombre"].' '.$dRow["Apellido Paterno"].' '.$dRow["Apellido_materno"].'&nbsp;&nbsp;</td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td class="auto-style2" style="width: 116px">
						Especialidad:</td>
						<td class="auto-style6">&nbsp;'.$carRow["t02carrera"].'&nbsp;</td>
					</tr>
					<tr>
						<td class="auto-style2" style="width: 116px">Celular:</td>
						<td class="auto-style6" style="width: 290px">
						'.$dRow["No_movil"].'&nbsp;</td>
					</tr>
					<tr>
						<td class="auto-style2" style="width: 116px">Telefono de 
						Casa:</td>
						<td class="auto-style6" style="width: 290px">&nbsp;'.$dRow["Tel_casa"].'</td>
					</tr>
					<tr>
						<td class="auto-style2" style="width: 116px">Correo 
						Electronico:</td>
						<td class="auto-style6" style="width: 290px">&nbsp;'.$dRow["Correo_electronico"].'</td>
					</tr>
					<tr>
						<td class="auto-style2" style="width: 116px">
						<a href="usuario/archivos/curriculums/'.$dRow["Curriculum"].'" target="_new">
						<img alt="" height="32" src="img/1416745149_curriculum_vitae.png" width="32"></a></td>
						<td class="auto-style6" style="width: 290px">&nbsp;</td>
					</tr>
				</table>
				</td>
			</tr>
		</table>
		</td>
	</tr>
</table>
					<table cellpadding="0" cellspacing="0" style="width: 100%">
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td class="auto-style7" style="height: 9px"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
</table>';

}while($dRow = mysql_fetch_array($consulta_personas));

}else{
echo 'No se Encontraron Resultados';
}

?>


				</div>
			</div>
		</div>
	</div>

	<!-- Pie de pÃƒÂ¡gina -->
	<div class = "row">
		<div class = "col-md-12" id = "pie_pagina"></div>
	</div>
</div>

</body>
</html>