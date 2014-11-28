<!DOCTYPE html>
<html>
<head>
<title>Página romocional</title>
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
<?php include 'PHP/actualizciones.php' ?>
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
          <li class="active"><a href="#">inicio</a></li>
          <li><a href="pagina_consulta.php">Personas</a></li>
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

                      <!-- Sección redes sociales -->
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
                          <span>Correo electrónico</span>
                          <span class = "oculto" id = "msj_cnv">Introduce un correo de electrónico valido</span>
                          <span class = "oculto" id = "msj_cn">Es necesario un correo electrónico</span>
                          <span class = "oculto" id = "msj_cenv">introduce un correo electrónico valido</span>
                          <input type = "text" class="form-control" name = "correo_electronico" id = "tx_correo" oninput = "remover_validacion()">
                          <span>Contraseña:</span>        
                          <span class = "oculto" id = "msj_pn">Es necesario introducir una contraseña</span>
                          <!-- <span>Los campos contraseña deben coinsidir</span> -->
                          <input type = "password" class="form-control" name = "clave_acceso" id = "tx_passwors" oninput = "remover_validacion()">
                          <span id = "msj_cpi">Confirmar contraseña:</span>
                          <span class = "oculto" id = "msj_cp">Es necesario confirmar tu contraseña</span>
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

                      <!-- Sección redes sociales -->
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
                          <span>Correo electrónico</span>
                          <span class = "oculto" id = "msj_cnl">Es necesario un correo electrónico</span>
                          <input type = "text" class="form-control" name = "correo_electronico" id = "correo_log" oninput = "remover_validacion_login()">
                          <span>Contraseña:</span>
                          <span class = "oculto" id = "msj_pnlog">Es necesario introducir una contraseña</span>
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

	

	<!-- Sección de promoción -->
	<div class = "row">
		<div class = "col-md-12" id = "seccion_descripcion">
			<div class = "col-md-8 col-md-offset-2">
				<h3 class="text-center">Bolsa de trabajo</h3>

				<div class = "lin_sep_dec"></div>

				<p class="text-center">
					
Cada día miles de personas que buscan un trabajo, por las razones diversas como lo son los jóvenes que buscan su primer empleo, personas que renuncian a un empleo. Esta es una manera de darte a coonocer facilmente subindo tus datos aqui...
				</p>
			</div>
		</div>
	</div>

	<!-- Sección de imagenes -->
	<div class = "row" id = "secion_img">
    <h3 class="text-center" id = "titulo_seccion_actualizaciones">Ultimas actualizciones</h3>
		<div class = "col-md-10 col-md-offset-1">
			<div class = "col-md-4">
				<div class = "col-md-10 col-md-offset-1 caja_imagen">
          <img src="img/si.jpg" class = "img_bolsa">
        </div>
			</div>
			<div class = "col-md-4">
				<div class = "col-md-10 col-md-offset-1 caja_imagen">          
          <img src="img/3.jpg" class = "img_bolsa">
        </div>
			</div>
			<div class = "col-md-4">
				<div class = "col-md-10 col-md-offset-1 caja_imagen">
          <img src="img/231.png" class = "img_bolsa">
        </div>
			</div>
		</div>
	</div>

  <div class = "row" id = "secion_actualizciones">
    <div class = "col-md-6">
      
        <?php consulta_col1(); ?>

    </div>
    <div class = "col-md-6">
      
        <?php consulta_col2(); ?>

    </div>


  </div>

	<!-- Pie de página -->
	<div class = "row">
		<div class = "col-md-12" id = "pie_pagina_2"></div>
	</div>
</div>

</body>
</html>