
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset = "utf-8">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="../js/bootstrap.min.js">
<link rel="stylesheet" type="text/css" href="../css/estilo_sitio.css">

<!-- jQuery Version 1.11.0 -->
<script src="../js/jquery-1.11.0.js"></script>
<script src = "../js/bootstrap.min.js"></script>
<script>
	$('.carousel').carousel({
  		interval: 2000
	})
</script>

<?php include '../PHP/consulta_maestrias.php' ?>

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
                  <img src="../img/el_siglo_de_torreon_logo.jpg" id = "logo_siglo">
                </a>
            </div>


          <div class = "col-md-6">
          <ul class="nav nav-pills col-md-offset-5">
          <li><a href="../promocional.php">inicio</a></li>
          <li class="active"><a href="..pagina_consulta.php">Personas</a></li>
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
                          <a href="#"><img src="../img/1411345748_square-google-plus-128.png"></a>
                          <a href="#"><img src="../img/1411345738_square-twitter-128.png"></a>
                          <a href="#"><img src="../img/1411345726_square-facebook-128.png"></a>
                        </div>
                      </div>

                      <!-- Formulario de registro -->
                      <div class = "row">
                        <div class = "col-md-8 col-md-offset-2">


                        <form id = "formulario_registro" action = "PHP/alta_datos_temporales.php" method = "POST">
                          <span>Correo electrónico</span>
                          <input type = "text" class="form-control" name = "correo_electronico">
                          <span>Contraseña:</span>
                          <input type = "text" class="form-control" name = "clave_acceso">
                          <span>Confirmar contraseña:</span>
                          <input type = "text" class="form-control">
                      </div>
                      </div>
              
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                      <button type="button" class="btn btn-primary" onclick = "enviar_datos()">Registrarse</button>
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
                          <a href="#"><img src="../img/1411345748_square-google-plus-128.png"></a>
                          <a href="#"><img src="../img/1411345738_square-twitter-128.png"></a>
                          <a href="#"><img src="../img/1411345726_square-facebook-128.png"></a>
                        </div>
                      </div>

                      <!-- Formulario de registro -->
                      <div class = "row">
                        <div class = "col-md-8 col-md-offset-2">
                        <form action = "#" method = "#">
                          <span>Correo electrónico</span>
                          <input type = "text" class="form-control">
                          <span>Contraseña:</span>
                          <input type = "text" class="form-control">
                        </form>
                      </div>
                      </div>
              
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                      <button type="button" class="btn btn-primary">Registrarse</button>
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
			<div class = "col-md-10 col-md-offset-1" id = "filtro_grados">
				<div id = "listas_especialidades">
					<div>
						<label>Ingenierías</label>
            <a href="../pagina_consulta.php">General</a>
            <a href="ing_aeroespacial.php">Ing. Aeroespacial</a>
            <a href="Ing_aeronautica.php">Ing. Aeronáutica</a>
            <a href="ing_agroindustrial.php">Ing. Agroindustrial</a>
            <a href="ing_adm_sistemas.php">Ing. Administrador de Sistemas</a>
            <a href="ing_ambiental.php">Ing. Ambiental</a>
            <a href="ing_biomedica.php">Ing. Biomédica</a>
            <a href="ing_bionica.php">Ing. Biónica</a>
            <a href="ing_biotecnologia.php">Ing. Biotecnología</a>
            <a href="ing_bioquimica.php">Ing. Bioquímica</a>
            <a href="ing_civi.php">Ing. Civil</a>
            <a href="ing_comercial.php">Ing. Comercial</a>
            <a href="ing_alimentos.php">Ing. de Alimentos</a>
            <a href="ing_arquitectura.php">Ing. en Arquitectura</a>
            <a href="ing_software.php">Ing. de Software</a>
            <a href="ing_minas_metalurgia.php">Ing. de Minas y Metalurgia</a>
            <a href="ing_comunicacion_electronica.php">Ing. en Comunicaciones y Electrónica</a>
            <a href="ing_control_automatizacion.php">Ing. en Control y Automatización</a>
            <a href="ing_electronica_automatizacion.php">Ing. en Electrónica y Automatización</a>
            <a href="ing_energia.php">Ing. en Energía</a>
            <a href="ing_energias_renovables.php">Ing. en Energías Renovables</a>            
            <a href="informatica.php">Ingeniería informática</a>
            <a href="ing_irrigacion.php">Ing. en Irrigación</a> 
            <a href="ing_tec_proceso.php">Ing. Tecnología de Procesos</a> 
            <a href="ing_telecomunicaciones.php">Ing. Telecomunicaciones</a>
            <a href="ing_telematica.php">Ing. Telemática</a>
            <a href="ing_quimica.php">Ing. Química</a>
            <a href="ing_quimica_industrial.php">Ing. Química Industrial</a>            
            <a href="ing_quimica_petrolera.php">Ing. Química Petrolera</a>
            <a href="ing_materiales.php">Ing. en Materiales</a>
            <a href="ing_manofactura.php">Ing. en Manufactura</a>
            <a href="ing_mecatronica.php">Ing. en Mecatrónica</a>
            <a href="ing_negocios.php">Ing. en Negocios</a>
            <a href="ing_robotica_industrial.php">Ing. en Robótica Industrial</a>
            <a href="ing_semiconductores_microelectrica.php">Ing. en Semiconductores y Microelectrónica</a>
            <a href="ing_sistemas_ambientales.php">Ing. en Sistemas Ambientales</a>
            <a href="ing_sistemas_automotrices.php">Ing. en Sistemas Automotrices</a>          
            <a href="sistemas_computacionales.php">Ingeniería en Sistemas computacionales</a>
            <a href="ing_sistemas_automotrices.php">Ing. en Sistemas Automotrices</a>
            <a href="ing_tecnologia_de_software.php">Ing. en Tecnología de Software</a>
            <a href="ing_transporte.php">Ing. en Transporte</a>
            <a href="ing_farmaceutica.php">Ing. Farmacéutica</a>
            <a href="ing_fisica.php">Ing. Física</a>
            <a href="ing_geomatica.php">Ing. Geomática</a>            
            <a href="ing_geofisica.php">Ing. Geofísica</a>
            <a href="industrial.php">Ingenería industrial</a>
            <a href="ing_matematica.php">Ing. Matemática</a>
            <a href="electronica.php">Ingeniería Electrónica</a>                  
					</div>
					<div>
						<label>Licenciaturas</label>
            <a href="lic_admin_agroindustrial.php">Licenciatura Administración Agroindustrial</a>
					</div>
					<div>
						<label>Maestrías</label>
					</div>
					<div>
						<label>Doctorado</label>
					</div>
				</div>
			</div>
		</div>

		<!-- Contenido principal -->
			<div class = "col-md-8">
				<!-- Caja de consulta de personas -->
				<div class = "col-md-11" id = "caja_consulta">

				<div class = "sep"></div>
					<!-- información de la persona -->
				<div class = "col-md-10 col-md-offset-1">					

					<?php						
						consulta_mc_fisica_quimica();
					?>
					
					<div class = "lin_sep"></div>
				</div>
			</div>
		</div>
		<!-- Indices de páginas -->
		<!-- <div class = "row col-md-11" id = "div_indices">
			<a href = "#">Final</a>
			<a href = "#">1</a>
			<a href = "#">2</a>
			<a href = "#">3</a>
			<a href = "#">4</a>
			<a href = "#">5</a>
			<a href = "#">...</a>
			<a href = "#" href="#">Principio</a>
		</div> -->
	</div>

	<!-- Pie de página -->
	<div class = "row">
		<div class = "col-md-12" id = "pie_pagina"></div>
	</div>
</div>

</body>
</html>