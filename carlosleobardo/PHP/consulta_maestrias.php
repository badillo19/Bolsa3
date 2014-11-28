<?php 

include 'conexion.php';

//MC en Administración pública
function consulta_mc_admin_publica() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_admin_publica'");
	$numero_registros =	mysql_num_rows($consulta);

	$tamanio_consulta = 5;

	@$pagina = $_GET['pagina'];
	if(!isset($pagina) || empty($pagina)) {

		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina -1) * $tamanio_consulta;
	}

	$total_paginas = ceil($numero_registros / $tamanio_consulta);

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_admin_publica' LIMIT ".$inicio.",".$tamanio_consulta);

	while($registros = mysql_fetch_array($consulta)) {
		
		echo "<div class = 'row'>
						<div class = 'col-md-2'>
							<div id = 'foto'>
								<img src='../usuario/archivos/fotos_perfil/".$registros['Foto_perfil']."'>
							</div>
						</div>
						<div class = 'col-md-6 datos_persona col-md-offset-1'>
							<label>Nombre: <span>".$registros['Nombre']."</span></label>
							<label>Especialidad: <span>".$registros['Especialidad']."</span></label>

							<div class = 'lin_sep'></div>

							<label>Número celular: <span>".$registros['No_movil']."</span></label>
							<label>Tel casa: <span>".$registros['Tel_casa']."</span></label>
							<label>Correo Electrónico: <span>".$registros['Correo_electronico']."</span></label>
						</div>
						<div class = 'col-md-2 col-md-offset-1'>
							<a target = '_blank' href='../usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "mc_admin_publica.php";

	echo '<div class = "row" id = "indices">';

	if ($total_paginas > 1) {

   		if ($pagina != 1)
      		echo '<a href="'.$url.'?pagina='.($pagina-1).'">Atras</a>';
      	for ($i=1;$i<=$total_paginas;$i++) {
        if ($pagina == $i)
            
            echo $pagina;

         else        
            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
      }
      if ($pagina != $total_paginas)
         echo '<a href="'.$url.'?pagina='.($pagina+1).'">Siguiente</a>';
	}

	echo '</di>';
}


//MC Ciencias agrarias
function consulta_mc_ciencias_sociales_humanidades() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_ciencias_sociales_humanidades'");
	$numero_registros =	mysql_num_rows($consulta);

	$tamanio_consulta = 5;

	@$pagina = $_GET['pagina'];
	if(!isset($pagina) || empty($pagina)) {

		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina -1) * $tamanio_consulta;
	}

	$total_paginas = ceil($numero_registros / $tamanio_consulta);

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_ciencias_sociales_humanidades' LIMIT ".$inicio.",".$tamanio_consulta);

	while($registros = mysql_fetch_array($consulta)) {
		
		echo "<div class = 'row'>
						<div class = 'col-md-2'>
							<div id = 'foto'>
								<img src='../usuario/archivos/fotos_perfil/".$registros['Foto_perfil']."'>
							</div>
						</div>
						<div class = 'col-md-6 datos_persona col-md-offset-1'>
							<label>Nombre: <span>".$registros['Nombre']."</span></label>
							<label>Especialidad: <span>".$registros['Especialidad']."</span></label>

							<div class = 'lin_sep'></div>

							<label>Número celular: <span>".$registros['No_movil']."</span></label>
							<label>Tel casa: <span>".$registros['Tel_casa']."</span></label>
							<label>Correo Electrónico: <span>".$registros['Correo_electronico']."</span></label>
						</div>
						<div class = 'col-md-2 col-md-offset-1'>
							<a target = '_blank' href='../usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "mc_ciencias_sociales_humanidades.php";

	echo '<div class = "row" id = "indices">';

	if ($total_paginas > 1) {

   		if ($pagina != 1)
      		echo '<a href="'.$url.'?pagina='.($pagina-1).'">Atras</a>';
      	for ($i=1;$i<=$total_paginas;$i++) {
        if ($pagina == $i)
            
            echo $pagina;

         else        
            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
      }
      if ($pagina != $total_paginas)
         echo '<a href="'.$url.'?pagina='.($pagina+1).'">Siguiente</a>';
	}

	echo '</di>';
}

//MC deportes educación Fisica
function consulta_mc_deportes_educacion_fisica() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_deportes_educacion_fisica'");
	$numero_registros =	mysql_num_rows($consulta);

	$tamanio_consulta = 5;

	@$pagina = $_GET['pagina'];
	if(!isset($pagina) || empty($pagina)) {

		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina -1) * $tamanio_consulta;
	}

	$total_paginas = ceil($numero_registros / $tamanio_consulta);

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_deportes_educacion_fisica' LIMIT ".$inicio.",".$tamanio_consulta);

	while($registros = mysql_fetch_array($consulta)) {
		
		echo "<div class = 'row'>
						<div class = 'col-md-2'>
							<div id = 'foto'>
								<img src='../usuario/archivos/fotos_perfil/".$registros['Foto_perfil']."'>
							</div>
						</div>
						<div class = 'col-md-6 datos_persona col-md-offset-1'>
							<label>Nombre: <span>".$registros['Nombre']."</span></label>
							<label>Especialidad: <span>".$registros['Especialidad']."</span></label>

							<div class = 'lin_sep'></div>

							<label>Número celular: <span>".$registros['No_movil']."</span></label>
							<label>Tel casa: <span>".$registros['Tel_casa']."</span></label>
							<label>Correo Electrónico: <span>".$registros['Correo_electronico']."</span></label>
						</div>
						<div class = 'col-md-2 col-md-offset-1'>
							<a target = '_blank' href='../usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "mc_deportes_educacion_fisica.php";

	echo '<div class = "row" id = "indices">';

	if ($total_paginas > 1) {

   		if ($pagina != 1)
      		echo '<a href="'.$url.'?pagina='.($pagina-1).'">Atras</a>';
      	for ($i=1;$i<=$total_paginas;$i++) {
        if ($pagina == $i)
            
            echo $pagina;

         else        
            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
      }
      if ($pagina != $total_paginas)
         echo '<a href="'.$url.'?pagina='.($pagina+1).'">Siguiente</a>';
	}

	echo '</di>';
}

//MC Educación
function consulta_mc_educacion() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_educacion'");
	$numero_registros =	mysql_num_rows($consulta);

	$tamanio_consulta = 5;

	@$pagina = $_GET['pagina'];
	if(!isset($pagina) || empty($pagina)) {

		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina -1) * $tamanio_consulta;
	}

	$total_paginas = ceil($numero_registros / $tamanio_consulta);

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_educacion' LIMIT ".$inicio.",".$tamanio_consulta);

	while($registros = mysql_fetch_array($consulta)) {
		
		echo "<div class = 'row'>
						<div class = 'col-md-2'>
							<div id = 'foto'>
								<img src='../usuario/archivos/fotos_perfil/".$registros['Foto_perfil']."'>
							</div>
						</div>
						<div class = 'col-md-6 datos_persona col-md-offset-1'>
							<label>Nombre: <span>".$registros['Nombre']."</span></label>
							<label>Especialidad: <span>".$registros['Especialidad']."</span></label>

							<div class = 'lin_sep'></div>

							<label>Número celular: <span>".$registros['No_movil']."</span></label>
							<label>Tel casa: <span>".$registros['Tel_casa']."</span></label>
							<label>Correo Electrónico: <span>".$registros['Correo_electronico']."</span></label>
						</div>
						<div class = 'col-md-2 col-md-offset-1'>
							<a target = '_blank' href='../usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "mc_educacion.php";

	echo '<div class = "row" id = "indices">';

	if ($total_paginas > 1) {

   		if ($pagina != 1)
      		echo '<a href="'.$url.'?pagina='.($pagina-1).'">Atras</a>';
      	for ($i=1;$i<=$total_paginas;$i++) {
        if ($pagina == $i)
            
            echo $pagina;

         else        
            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
      }
      if ($pagina != $total_paginas)
         echo '<a href="'.$url.'?pagina='.($pagina+1).'">Siguiente</a>';
	}

	echo '</di>';
}

//MC en Hotelería y Turismo
function consulta_mc_hoteleria_turismo() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_hoteleria_turismo'");
	$numero_registros =	mysql_num_rows($consulta);

	$tamanio_consulta = 5;

	@$pagina = $_GET['pagina'];
	if(!isset($pagina) || empty($pagina)) {

		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina -1) * $tamanio_consulta;
	}

	$total_paginas = ceil($numero_registros / $tamanio_consulta);

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_hoteleria_turismo' LIMIT ".$inicio.",".$tamanio_consulta);

	while($registros = mysql_fetch_array($consulta)) {
		
		echo "<div class = 'row'>
						<div class = 'col-md-2'>
							<div id = 'foto'>
								<img src='../usuario/archivos/fotos_perfil/".$registros['Foto_perfil']."'>
							</div>
						</div>
						<div class = 'col-md-6 datos_persona col-md-offset-1'>
							<label>Nombre: <span>".$registros['Nombre']."</span></label>
							<label>Especialidad: <span>".$registros['Especialidad']."</span></label>

							<div class = 'lin_sep'></div>

							<label>Número celular: <span>".$registros['No_movil']."</span></label>
							<label>Tel casa: <span>".$registros['Tel_casa']."</span></label>
							<label>Correo Electrónico: <span>".$registros['Correo_electronico']."</span></label>
						</div>
						<div class = 'col-md-2 col-md-offset-1'>
							<a target = '_blank' href='../usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "mc_hoteleria_turismo.php";

	echo '<div class = "row" id = "indices">';

	if ($total_paginas > 1) {

   		if ($pagina != 1)
      		echo '<a href="'.$url.'?pagina='.($pagina-1).'">Atras</a>';
      	for ($i=1;$i<=$total_paginas;$i++) {
        if ($pagina == $i)
            
            echo $pagina;

         else        
            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
      }
      if ($pagina != $total_paginas)
         echo '<a href="'.$url.'?pagina='.($pagina+1).'">Siguiente</a>';
	}

	echo '</di>';
}

//MC Informática e Información
function consulta_mc_informatica_e_informacion() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_informatica_e_informacion'");
	$numero_registros =	mysql_num_rows($consulta);

	$tamanio_consulta = 5;

	@$pagina = $_GET['pagina'];
	if(!isset($pagina) || empty($pagina)) {

		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina -1) * $tamanio_consulta;
	}

	$total_paginas = ceil($numero_registros / $tamanio_consulta);

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_informatica_e_informacion' LIMIT ".$inicio.",".$tamanio_consulta);

	while($registros = mysql_fetch_array($consulta)) {
		
		echo "<div class = 'row'>
						<div class = 'col-md-2'>
							<div id = 'foto'>
								<img src='../usuario/archivos/fotos_perfil/".$registros['Foto_perfil']."'>
							</div>
						</div>
						<div class = 'col-md-6 datos_persona col-md-offset-1'>
							<label>Nombre: <span>".$registros['Nombre']."</span></label>
							<label>Especialidad: <span>".$registros['Especialidad']."</span></label>

							<div class = 'lin_sep'></div>

							<label>Número celular: <span>".$registros['No_movil']."</span></label>
							<label>Tel casa: <span>".$registros['Tel_casa']."</span></label>
							<label>Correo Electrónico: <span>".$registros['Correo_electronico']."</span></label>
						</div>
						<div class = 'col-md-2 col-md-offset-1'>
							<a target = '_blank' href='../usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "mc_informatica_e_informacion.php";

	echo '<div class = "row" id = "indices">';

	if ($total_paginas > 1) {

   		if ($pagina != 1)
      		echo '<a href="'.$url.'?pagina='.($pagina-1).'">Atras</a>';
      	for ($i=1;$i<=$total_paginas;$i++) {
        if ($pagina == $i)
            
            echo $pagina;

         else        
            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
      }
      if ($pagina != $total_paginas)
         echo '<a href="'.$url.'?pagina='.($pagina+1).'">Siguiente</a>';
	}

	echo '</di>';
}

//MC Periodismo y Ciencis de la Información
function consulta_mc_periodosmo_ciencias_informacion() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_periodosmo_ciencias_informacion'");
	$numero_registros =	mysql_num_rows($consulta);

	$tamanio_consulta = 5;

	@$pagina = $_GET['pagina'];
	if(!isset($pagina) || empty($pagina)) {

		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina -1) * $tamanio_consulta;
	}

	$total_paginas = ceil($numero_registros / $tamanio_consulta);

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_periodosmo_ciencias_informacion' LIMIT ".$inicio.",".$tamanio_consulta);

	while($registros = mysql_fetch_array($consulta)) {
		
		echo "<div class = 'row'>
						<div class = 'col-md-2'>
							<div id = 'foto'>
								<img src='../usuario/archivos/fotos_perfil/".$registros['Foto_perfil']."'>
							</div>
						</div>
						<div class = 'col-md-6 datos_persona col-md-offset-1'>
							<label>Nombre: <span>".$registros['Nombre']."</span></label>
							<label>Especialidad: <span>".$registros['Especialidad']."</span></label>

							<div class = 'lin_sep'></div>

							<label>Número celular: <span>".$registros['No_movil']."</span></label>
							<label>Tel casa: <span>".$registros['Tel_casa']."</span></label>
							<label>Correo Electrónico: <span>".$registros['Correo_electronico']."</span></label>
						</div>
						<div class = 'col-md-2 col-md-offset-1'>
							<a target = '_blank' href='../usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "mc_periodosmo_ciencias_informacion.php";

	echo '<div class = "row" id = "indices">';

	if ($total_paginas > 1) {

   		if ($pagina != 1)
      		echo '<a href="'.$url.'?pagina='.($pagina-1).'">Atras</a>';
      	for ($i=1;$i<=$total_paginas;$i++) {
        if ($pagina == $i)
            
            echo $pagina;

         else        
            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
      }
      if ($pagina != $total_paginas)
         echo '<a href="'.$url.'?pagina='.($pagina+1).'">Siguiente</a>';
	}

	echo '</di>';
}

//MC Publicidad Marketing
function consulta_mc_publicidad_marketing() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_publicidad_marketing'");
	$numero_registros =	mysql_num_rows($consulta);

	$tamanio_consulta = 5;

	@$pagina = $_GET['pagina'];
	if(!isset($pagina) || empty($pagina)) {

		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina -1) * $tamanio_consulta;
	}

	$total_paginas = ceil($numero_registros / $tamanio_consulta);

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_publicidad_marketing' LIMIT ".$inicio.",".$tamanio_consulta);

	while($registros = mysql_fetch_array($consulta)) {
		
		echo "<div class = 'row'>
						<div class = 'col-md-2'>
							<div id = 'foto'>
								<img src='../usuario/archivos/fotos_perfil/".$registros['Foto_perfil']."'>
							</div>
						</div>
						<div class = 'col-md-6 datos_persona col-md-offset-1'>
							<label>Nombre: <span>".$registros['Nombre']."</span></label>
							<label>Especialidad: <span>".$registros['Especialidad']."</span></label>

							<div class = 'lin_sep'></div>

							<label>Número celular: <span>".$registros['No_movil']."</span></label>
							<label>Tel casa: <span>".$registros['Tel_casa']."</span></label>
							<label>Correo Electrónico: <span>".$registros['Correo_electronico']."</span></label>
						</div>
						<div class = 'col-md-2 col-md-offset-1'>
							<a target = '_blank' href='../usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "mc_periodosmo_ciencias_informacion.php";

	echo '<div class = "row" id = "indices">';

	if ($total_paginas > 1) {

   		if ($pagina != 1)
      		echo '<a href="'.$url.'?pagina='.($pagina-1).'">Atras</a>';
      	for ($i=1;$i<=$total_paginas;$i++) {
        if ($pagina == $i)
            
            echo $pagina;

         else        
            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
      }
      if ($pagina != $total_paginas)
         echo '<a href="'.$url.'?pagina='.($pagina+1).'">Siguiente</a>';
	}

	echo '</di>';
}

//MC Salud y Medicina
function consulta_mc_salud_medicina() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_salud_medicina'");
	$numero_registros =	mysql_num_rows($consulta);

	$tamanio_consulta = 5;

	@$pagina = $_GET['pagina'];
	if(!isset($pagina) || empty($pagina)) {

		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina -1) * $tamanio_consulta;
	}

	$total_paginas = ceil($numero_registros / $tamanio_consulta);

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_salud_medicina' LIMIT ".$inicio.",".$tamanio_consulta);

	while($registros = mysql_fetch_array($consulta)) {
		
		echo "<div class = 'row'>
						<div class = 'col-md-2'>
							<div id = 'foto'>
								<img src='../usuario/archivos/fotos_perfil/".$registros['Foto_perfil']."'>
							</div>
						</div>
						<div class = 'col-md-6 datos_persona col-md-offset-1'>
							<label>Nombre: <span>".$registros['Nombre']."</span></label>
							<label>Especialidad: <span>".$registros['Especialidad']."</span></label>

							<div class = 'lin_sep'></div>

							<label>Número celular: <span>".$registros['No_movil']."</span></label>
							<label>Tel casa: <span>".$registros['Tel_casa']."</span></label>
							<label>Correo Electrónico: <span>".$registros['Correo_electronico']."</span></label>
						</div>
						<div class = 'col-md-2 col-md-offset-1'>
							<a target = '_blank' href='../usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "mc_salud_medicina.php";

	echo '<div class = "row" id = "indices">';

	if ($total_paginas > 1) {

   		if ($pagina != 1)
      		echo '<a href="'.$url.'?pagina='.($pagina-1).'">Atras</a>';
      	for ($i=1;$i<=$total_paginas;$i++) {
        if ($pagina == $i)
            
            echo $pagina;

         else        
            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
      }
      if ($pagina != $total_paginas)
         echo '<a href="'.$url.'?pagina='.($pagina+1).'">Siguiente</a>';
	}

	echo '</di>';
}

//MC Arte y Bellas Artes
function consulta_mc_arte_bellas_artes() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_arte_bellas_artes'");
	$numero_registros =	mysql_num_rows($consulta);

	$tamanio_consulta = 5;

	@$pagina = $_GET['pagina'];
	if(!isset($pagina) || empty($pagina)) {

		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina -1) * $tamanio_consulta;
	}

	$total_paginas = ceil($numero_registros / $tamanio_consulta);

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_arte_bellas_artes' LIMIT ".$inicio.",".$tamanio_consulta);

	while($registros = mysql_fetch_array($consulta)) {
		
		echo "<div class = 'row'>
						<div class = 'col-md-2'>
							<div id = 'foto'>
								<img src='../usuario/archivos/fotos_perfil/".$registros['Foto_perfil']."'>
							</div>
						</div>
						<div class = 'col-md-6 datos_persona col-md-offset-1'>
							<label>Nombre: <span>".$registros['Nombre']."</span></label>
							<label>Especialidad: <span>".$registros['Especialidad']."</span></label>

							<div class = 'lin_sep'></div>

							<label>Número celular: <span>".$registros['No_movil']."</span></label>
							<label>Tel casa: <span>".$registros['Tel_casa']."</span></label>
							<label>Correo Electrónico: <span>".$registros['Correo_electronico']."</span></label>
						</div>
						<div class = 'col-md-2 col-md-offset-1'>
							<a target = '_blank' href='../usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "mc_arte_bellas_artes.php";

	echo '<div class = "row" id = "indices">';

	if ($total_paginas > 1) {

   		if ($pagina != 1)
      		echo '<a href="'.$url.'?pagina='.($pagina-1).'">Atras</a>';
      	for ($i=1;$i<=$total_paginas;$i++) {
        if ($pagina == $i)
            
            echo $pagina;

         else        
            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
      }
      if ($pagina != $total_paginas)
         echo '<a href="'.$url.'?pagina='.($pagina+1).'">Siguiente</a>';
	}

	echo '</di>';
}

//MC Ciencias Biológicas
function consulta_mc_ciencias_biologicas() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_ciencias_biologicas'");
	$numero_registros =	mysql_num_rows($consulta);

	$tamanio_consulta = 5;

	@$pagina = $_GET['pagina'];
	if(!isset($pagina) || empty($pagina)) {

		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina -1) * $tamanio_consulta;
	}

	$total_paginas = ceil($numero_registros / $tamanio_consulta);

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_ciencias_biologicas' LIMIT ".$inicio.",".$tamanio_consulta);

	while($registros = mysql_fetch_array($consulta)) {
		
		echo "<div class = 'row'>
						<div class = 'col-md-2'>
							<div id = 'foto'>
								<img src='../usuario/archivos/fotos_perfil/".$registros['Foto_perfil']."'>
							</div>
						</div>
						<div class = 'col-md-6 datos_persona col-md-offset-1'>
							<label>Nombre: <span>".$registros['Nombre']."</span></label>
							<label>Especialidad: <span>".$registros['Especialidad']."</span></label>

							<div class = 'lin_sep'></div>

							<label>Número celular: <span>".$registros['No_movil']."</span></label>
							<label>Tel casa: <span>".$registros['Tel_casa']."</span></label>
							<label>Correo Electrónico: <span>".$registros['Correo_electronico']."</span></label>
						</div>
						<div class = 'col-md-2 col-md-offset-1'>
							<a target = '_blank' href='../usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "mc_ciencias_biologicas.php";

	echo '<div class = "row" id = "indices">';

	if ($total_paginas > 1) {

   		if ($pagina != 1)
      		echo '<a href="'.$url.'?pagina='.($pagina-1).'">Atras</a>';
      	for ($i=1;$i<=$total_paginas;$i++) {
        if ($pagina == $i)
            
            echo $pagina;

         else        
            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
      }
      if ($pagina != $total_paginas)
         echo '<a href="'.$url.'?pagina='.($pagina+1).'">Siguiente</a>';
	}

	echo '</di>';
}

//MC Contabilidad Empresarial
function consulta_mc_contabilidad_empresarial() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_contabilidad_empresarial'");
	$numero_registros =	mysql_num_rows($consulta);

	$tamanio_consulta = 5;

	@$pagina = $_GET['pagina'];
	if(!isset($pagina) || empty($pagina)) {

		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina -1) * $tamanio_consulta;
	}

	$total_paginas = ceil($numero_registros / $tamanio_consulta);

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_contabilidad_empresarial' LIMIT ".$inicio.",".$tamanio_consulta);

	while($registros = mysql_fetch_array($consulta)) {
		
		echo "<div class = 'row'>
						<div class = 'col-md-2'>
							<div id = 'foto'>
								<img src='../usuario/archivos/fotos_perfil/".$registros['Foto_perfil']."'>
							</div>
						</div>
						<div class = 'col-md-6 datos_persona col-md-offset-1'>
							<label>Nombre: <span>".$registros['Nombre']."</span></label>
							<label>Especialidad: <span>".$registros['Especialidad']."</span></label>

							<div class = 'lin_sep'></div>

							<label>Número celular: <span>".$registros['No_movil']."</span></label>
							<label>Tel casa: <span>".$registros['Tel_casa']."</span></label>
							<label>Correo Electrónico: <span>".$registros['Correo_electronico']."</span></label>
						</div>
						<div class = 'col-md-2 col-md-offset-1'>
							<a target = '_blank' href='../usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "mc_contabilidad_empresarial.php";

	echo '<div class = "row" id = "indices">';

	if ($total_paginas > 1) {

   		if ($pagina != 1)
      		echo '<a href="'.$url.'?pagina='.($pagina-1).'">Atras</a>';
      	for ($i=1;$i<=$total_paginas;$i++) {
        if ($pagina == $i)
            
            echo $pagina;

         else        
            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
      }
      if ($pagina != $total_paginas)
         echo '<a href="'.$url.'?pagina='.($pagina+1).'">Siguiente</a>';
	}

	echo '</di>';
}

//MC Dercho Leyes
function consulta_mc_derecho_leyes() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_derecho_leyes'");
	$numero_registros =	mysql_num_rows($consulta);

	$tamanio_consulta = 5;

	@$pagina = $_GET['pagina'];
	if(!isset($pagina) || empty($pagina)) {

		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina -1) * $tamanio_consulta;
	}

	$total_paginas = ceil($numero_registros / $tamanio_consulta);

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_derecho_leyes' LIMIT ".$inicio.",".$tamanio_consulta);

	while($registros = mysql_fetch_array($consulta)) {
		
		echo "<div class = 'row'>
						<div class = 'col-md-2'>
							<div id = 'foto'>
								<img src='../usuario/archivos/fotos_perfil/".$registros['Foto_perfil']."'>
							</div>
						</div>
						<div class = 'col-md-6 datos_persona col-md-offset-1'>
							<label>Nombre: <span>".$registros['Nombre']."</span></label>
							<label>Especialidad: <span>".$registros['Especialidad']."</span></label>

							<div class = 'lin_sep'></div>

							<label>Número celular: <span>".$registros['No_movil']."</span></label>
							<label>Tel casa: <span>".$registros['Tel_casa']."</span></label>
							<label>Correo Electrónico: <span>".$registros['Correo_electronico']."</span></label>
						</div>
						<div class = 'col-md-2 col-md-offset-1'>
							<a target = '_blank' href='../usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "mc_derecho_leyes.php";

	echo '<div class = "row" id = "indices">';

	if ($total_paginas > 1) {

   		if ($pagina != 1)
      		echo '<a href="'.$url.'?pagina='.($pagina-1).'">Atras</a>';
      	for ($i=1;$i<=$total_paginas;$i++) {
        if ($pagina == $i)
            
            echo $pagina;

         else        
            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
      }
      if ($pagina != $total_paginas)
         echo '<a href="'.$url.'?pagina='.($pagina+1).'">Siguiente</a>';
	}

	echo '</di>';
}


//MC Física y Quimica
function consulta_mc_fisica_quimica() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_fisica_quimica'");
	$numero_registros =	mysql_num_rows($consulta);

	$tamanio_consulta = 5;

	@$pagina = $_GET['pagina'];
	if(!isset($pagina) || empty($pagina)) {

		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina -1) * $tamanio_consulta;
	}

	$total_paginas = ceil($numero_registros / $tamanio_consulta);

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_fisica_quimica' LIMIT ".$inicio.",".$tamanio_consulta);

	while($registros = mysql_fetch_array($consulta)) {
		
		echo "<div class = 'row'>
						<div class = 'col-md-2'>
							<div id = 'foto'>
								<img src='../usuario/archivos/fotos_perfil/".$registros['Foto_perfil']."'>
							</div>
						</div>
						<div class = 'col-md-6 datos_persona col-md-offset-1'>
							<label>Nombre: <span>".$registros['Nombre']."</span></label>
							<label>Especialidad: <span>".$registros['Especialidad']."</span></label>

							<div class = 'lin_sep'></div>

							<label>Número celular: <span>".$registros['No_movil']."</span></label>
							<label>Tel casa: <span>".$registros['Tel_casa']."</span></label>
							<label>Correo Electrónico: <span>".$registros['Correo_electronico']."</span></label>
						</div>
						<div class = 'col-md-2 col-md-offset-1'>
							<a target = '_blank' href='../usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "mc_fisica_quimica.php";

	echo '<div class = "row" id = "indices">';

	if ($total_paginas > 1) {

   		if ($pagina != 1)
      		echo '<a href="'.$url.'?pagina='.($pagina-1).'">Atras</a>';
      	for ($i=1;$i<=$total_paginas;$i++) {
        if ($pagina == $i)
            
            echo $pagina;

         else        
            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
      }
      if ($pagina != $total_paginas)
         echo '<a href="'.$url.'?pagina='.($pagina+1).'">Siguiente</a>';
	}

	echo '</di>';
}


//MC idiomas
function consulta_mc_idiomas() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_idiomas'");
	$numero_registros =	mysql_num_rows($consulta);

	$tamanio_consulta = 5;

	@$pagina = $_GET['pagina'];
	if(!isset($pagina) || empty($pagina)) {

		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina -1) * $tamanio_consulta;
	}

	$total_paginas = ceil($numero_registros / $tamanio_consulta);

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_idiomas' LIMIT ".$inicio.",".$tamanio_consulta);

	while($registros = mysql_fetch_array($consulta)) {
		
		echo "<div class = 'row'>
						<div class = 'col-md-2'>
							<div id = 'foto'>
								<img src='../usuario/archivos/fotos_perfil/".$registros['Foto_perfil']."'>
							</div>
						</div>
						<div class = 'col-md-6 datos_persona col-md-offset-1'>
							<label>Nombre: <span>".$registros['Nombre']."</span></label>
							<label>Especialidad: <span>".$registros['Especialidad']."</span></label>

							<div class = 'lin_sep'></div>

							<label>Número celular: <span>".$registros['No_movil']."</span></label>
							<label>Tel casa: <span>".$registros['Tel_casa']."</span></label>
							<label>Correo Electrónico: <span>".$registros['Correo_electronico']."</span></label>
						</div>
						<div class = 'col-md-2 col-md-offset-1'>
							<a target = '_blank' href='../usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "mc_idiomas.php";

	echo '<div class = "row" id = "indices">';

	if ($total_paginas > 1) {

   		if ($pagina != 1)
      		echo '<a href="'.$url.'?pagina='.($pagina-1).'">Atras</a>';
      	for ($i=1;$i<=$total_paginas;$i++) {
        if ($pagina == $i)
            
            echo $pagina;

         else        
            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
      }
      if ($pagina != $total_paginas)
         echo '<a href="'.$url.'?pagina='.($pagina+1).'">Siguiente</a>';
	}

	echo '</di>';
}

//MC Ingeniería y Tecnología
function consulta_mc_ingenieria_tecnologia() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_ingenieria_tecnologia'");
	$numero_registros =	mysql_num_rows($consulta);

	$tamanio_consulta = 5;

	@$pagina = $_GET['pagina'];
	if(!isset($pagina) || empty($pagina)) {

		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina -1) * $tamanio_consulta;
	}

	$total_paginas = ceil($numero_registros / $tamanio_consulta);

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_ingenieria_tecnologia' LIMIT ".$inicio.",".$tamanio_consulta);

	while($registros = mysql_fetch_array($consulta)) {
		
		echo "<div class = 'row'>
						<div class = 'col-md-2'>
							<div id = 'foto'>
								<img src='../usuario/archivos/fotos_perfil/".$registros['Foto_perfil']."'>
							</div>
						</div>
						<div class = 'col-md-6 datos_persona col-md-offset-1'>
							<label>Nombre: <span>".$registros['Nombre']."</span></label>
							<label>Especialidad: <span>".$registros['Especialidad']."</span></label>

							<div class = 'lin_sep'></div>

							<label>Número celular: <span>".$registros['No_movil']."</span></label>
							<label>Tel casa: <span>".$registros['Tel_casa']."</span></label>
							<label>Correo Electrónico: <span>".$registros['Correo_electronico']."</span></label>
						</div>
						<div class = 'col-md-2 col-md-offset-1'>
							<a target = '_blank' href='../usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "mc_ingenieria_tecnologia.php";

	echo '<div class = "row" id = "indices">';

	if ($total_paginas > 1) {

   		if ($pagina != 1)
      		echo '<a href="'.$url.'?pagina='.($pagina-1).'">Atras</a>';
      	for ($i=1;$i<=$total_paginas;$i++) {
        if ($pagina == $i)
            
            echo $pagina;

         else        
            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
      }
      if ($pagina != $total_paginas)
         echo '<a href="'.$url.'?pagina='.($pagina+1).'">Siguiente</a>';
	}

	echo '</di>';
}

//MC programas_empresariales
function consulta_mc_programas_empresariales() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_programas_empresariales'");
	$numero_registros =	mysql_num_rows($consulta);

	$tamanio_consulta = 5;

	@$pagina = $_GET['pagina'];
	if(!isset($pagina) || empty($pagina)) {

		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina -1) * $tamanio_consulta;
	}

	$total_paginas = ceil($numero_registros / $tamanio_consulta);

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_programas_empresariales' LIMIT ".$inicio.",".$tamanio_consulta);

	while($registros = mysql_fetch_array($consulta)) {
		
		echo "<div class = 'row'>
						<div class = 'col-md-2'>
							<div id = 'foto'>
								<img src='../usuario/archivos/fotos_perfil/".$registros['Foto_perfil']."'>
							</div>
						</div>
						<div class = 'col-md-6 datos_persona col-md-offset-1'>
							<label>Nombre: <span>".$registros['Nombre']."</span></label>
							<label>Especialidad: <span>".$registros['Especialidad']."</span></label>

							<div class = 'lin_sep'></div>

							<label>Número celular: <span>".$registros['No_movil']."</span></label>
							<label>Tel casa: <span>".$registros['Tel_casa']."</span></label>
							<label>Correo Electrónico: <span>".$registros['Correo_electronico']."</span></label>
						</div>
						<div class = 'col-md-2 col-md-offset-1'>
							<a target = '_blank' href='../usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "mc_programas_empresariales.php";

	echo '<div class = "row" id = "indices">';

	if ($total_paginas > 1) {

   		if ($pagina != 1)
      		echo '<a href="'.$url.'?pagina='.($pagina-1).'">Atras</a>';
      	for ($i=1;$i<=$total_paginas;$i++) {
        if ($pagina == $i)
            
            echo $pagina;

         else        
            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
      }
      if ($pagina != $total_paginas)
         echo '<a href="'.$url.'?pagina='.($pagina+1).'">Siguiente</a>';
	}

	echo '</di>';
}

//MC Reursos Humanos
function consulta_mc_recursos_humanos() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_recursos_humanos'");
	$numero_registros =	mysql_num_rows($consulta);

	$tamanio_consulta = 5;

	@$pagina = $_GET['pagina'];
	if(!isset($pagina) || empty($pagina)) {

		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina -1) * $tamanio_consulta;
	}

	$total_paginas = ceil($numero_registros / $tamanio_consulta);

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_recursos_humanos' LIMIT ".$inicio.",".$tamanio_consulta);

	while($registros = mysql_fetch_array($consulta)) {
		
		echo "<div class = 'row'>
						<div class = 'col-md-2'>
							<div id = 'foto'>
								<img src='../usuario/archivos/fotos_perfil/".$registros['Foto_perfil']."'>
							</div>
						</div>
						<div class = 'col-md-6 datos_persona col-md-offset-1'>
							<label>Nombre: <span>".$registros['Nombre']."</span></label>
							<label>Especialidad: <span>".$registros['Especialidad']."</span></label>

							<div class = 'lin_sep'></div>

							<label>Número celular: <span>".$registros['No_movil']."</span></label>
							<label>Tel casa: <span>".$registros['Tel_casa']."</span></label>
							<label>Correo Electrónico: <span>".$registros['Correo_electronico']."</span></label>
						</div>
						<div class = 'col-md-2 col-md-offset-1'>
							<a target = '_blank' href='../usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "mc_recursos_humanos.php";

	echo '<div class = "row" id = "indices">';

	if ($total_paginas > 1) {

   		if ($pagina != 1)
      		echo '<a href="'.$url.'?pagina='.($pagina-1).'">Atras</a>';
      	for ($i=1;$i<=$total_paginas;$i++) {
        if ($pagina == $i)
            
            echo $pagina;

         else        
            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
      }
      if ($pagina != $total_paginas)
         echo '<a href="'.$url.'?pagina='.($pagina+1).'">Siguiente</a>';
	}

	echo '</di>';
}

//MC Calidad
function consulta_mc_calidad() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_calidad'");
	$numero_registros =	mysql_num_rows($consulta);

	$tamanio_consulta = 5;

	@$pagina = $_GET['pagina'];
	if(!isset($pagina) || empty($pagina)) {

		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina -1) * $tamanio_consulta;
	}

	$total_paginas = ceil($numero_registros / $tamanio_consulta);

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_calidad' LIMIT ".$inicio.",".$tamanio_consulta);

	while($registros = mysql_fetch_array($consulta)) {
		
		echo "<div class = 'row'>
						<div class = 'col-md-2'>
							<div id = 'foto'>
								<img src='../usuario/archivos/fotos_perfil/".$registros['Foto_perfil']."'>
							</div>
						</div>
						<div class = 'col-md-6 datos_persona col-md-offset-1'>
							<label>Nombre: <span>".$registros['Nombre']."</span></label>
							<label>Especialidad: <span>".$registros['Especialidad']."</span></label>

							<div class = 'lin_sep'></div>

							<label>Número celular: <span>".$registros['No_movil']."</span></label>
							<label>Tel casa: <span>".$registros['Tel_casa']."</span></label>
							<label>Correo Electrónico: <span>".$registros['Correo_electronico']."</span></label>
						</div>
						<div class = 'col-md-2 col-md-offset-1'>
							<a target = '_blank' href='../usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "mc_calidad.php";

	echo '<div class = "row" id = "indices">';

	if ($total_paginas > 1) {

   		if ($pagina != 1)
      		echo '<a href="'.$url.'?pagina='.($pagina-1).'">Atras</a>';
      	for ($i=1;$i<=$total_paginas;$i++) {
        if ($pagina == $i)
            
            echo $pagina;

         else        
            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
      }
      if ($pagina != $total_paginas)
         echo '<a href="'.$url.'?pagina='.($pagina+1).'">Siguiente</a>';
	}

	echo '</di>';
}

//MC Ecoomia Finanzas
function consulta_mc_economia_finanzas() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_economia_finanzas'");
	$numero_registros =	mysql_num_rows($consulta);

	$tamanio_consulta = 5;

	@$pagina = $_GET['pagina'];
	if(!isset($pagina) || empty($pagina)) {

		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina -1) * $tamanio_consulta;
	}

	$total_paginas = ceil($numero_registros / $tamanio_consulta);

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_economia_finanzas' LIMIT ".$inicio.",".$tamanio_consulta);

	while($registros = mysql_fetch_array($consulta)) {
		
		echo "<div class = 'row'>
						<div class = 'col-md-2'>
							<div id = 'foto'>
								<img src='../usuario/archivos/fotos_perfil/".$registros['Foto_perfil']."'>
							</div>
						</div>
						<div class = 'col-md-6 datos_persona col-md-offset-1'>
							<label>Nombre: <span>".$registros['Nombre']."</span></label>
							<label>Especialidad: <span>".$registros['Especialidad']."</span></label>

							<div class = 'lin_sep'></div>

							<label>Número celular: <span>".$registros['No_movil']."</span></label>
							<label>Tel casa: <span>".$registros['Tel_casa']."</span></label>
							<label>Correo Electrónico: <span>".$registros['Correo_electronico']."</span></label>
						</div>
						<div class = 'col-md-2 col-md-offset-1'>
							<a target = '_blank' href='../usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "mc_economia_finanzas.php";

	echo '<div class = "row" id = "indices">';

	if ($total_paginas > 1) {

   		if ($pagina != 1)
      		echo '<a href="'.$url.'?pagina='.($pagina-1).'">Atras</a>';
      	for ($i=1;$i<=$total_paginas;$i++) {
        if ($pagina == $i)
            
            echo $pagina;

         else        
            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
      }
      if ($pagina != $total_paginas)
         echo '<a href="'.$url.'?pagina='.($pagina+1).'">Siguiente</a>';
	}

	echo '</di>';
}

//MC Matemáticas y estadísticas
function consulta_mc_matematicas_estadistica() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_matematicas_estadistica'");
	$numero_registros =	mysql_num_rows($consulta);

	$tamanio_consulta = 5;

	@$pagina = $_GET['pagina'];
	if(!isset($pagina) || empty($pagina)) {

		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina -1) * $tamanio_consulta;
	}

	$total_paginas = ceil($numero_registros / $tamanio_consulta);

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_matematicas_estadistica' LIMIT ".$inicio.",".$tamanio_consulta);

	while($registros = mysql_fetch_array($consulta)) {
		
		echo "<div class = 'row'>
						<div class = 'col-md-2'>
							<div id = 'foto'>
								<img src='../usuario/archivos/fotos_perfil/".$registros['Foto_perfil']."'>
							</div>
						</div>
						<div class = 'col-md-6 datos_persona col-md-offset-1'>
							<label>Nombre: <span>".$registros['Nombre']."</span></label>
							<label>Especialidad: <span>".$registros['Especialidad']."</span></label>

							<div class = 'lin_sep'></div>

							<label>Número celular: <span>".$registros['No_movil']."</span></label>
							<label>Tel casa: <span>".$registros['Tel_casa']."</span></label>
							<label>Correo Electrónico: <span>".$registros['Correo_electronico']."</span></label>
						</div>
						<div class = 'col-md-2 col-md-offset-1'>
							<a target = '_blank' href='../usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "mc_matematicas_estadistica.php";

	echo '<div class = "row" id = "indices">';

	if ($total_paginas > 1) {

   		if ($pagina != 1)
      		echo '<a href="'.$url.'?pagina='.($pagina-1).'">Atras</a>';
      	for ($i=1;$i<=$total_paginas;$i++) {
        if ($pagina == $i)
            
            echo $pagina;

         else        
            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
      }
      if ($pagina != $total_paginas)
         echo '<a href="'.$url.'?pagina='.($pagina+1).'">Siguiente</a>';
	}

	echo '</di>';
}

//MC Moda y Diseño

function consulta_mc_moda_disenio() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_moda_disenio'");
	$numero_registros =	mysql_num_rows($consulta);

	$tamanio_consulta = 5;

	@$pagina = $_GET['pagina'];
	if(!isset($pagina) || empty($pagina)) {

		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina -1) * $tamanio_consulta;
	}

	$total_paginas = ceil($numero_registros / $tamanio_consulta);

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'mc_moda_disenio' LIMIT ".$inicio.",".$tamanio_consulta);

	while($registros = mysql_fetch_array($consulta)) {
		
		echo "<div class = 'row'>
						<div class = 'col-md-2'>
							<div id = 'foto'>
								<img src='../usuario/archivos/fotos_perfil/".$registros['Foto_perfil']."'>
							</div>
						</div>
						<div class = 'col-md-6 datos_persona col-md-offset-1'>
							<label>Nombre: <span>".$registros['Nombre']."</span></label>
							<label>Especialidad: <span>".$registros['Especialidad']."</span></label>

							<div class = 'lin_sep'></div>

							<label>Número celular: <span>".$registros['No_movil']."</span></label>
							<label>Tel casa: <span>".$registros['Tel_casa']."</span></label>
							<label>Correo Electrónico: <span>".$registros['Correo_electronico']."</span></label>
						</div>
						<div class = 'col-md-2 col-md-offset-1'>
							<a target = '_blank' href='../usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "mc_moda_disenio.php";

	echo '<div class = "row" id = "indices">';

	if ($total_paginas > 1) {

   		if ($pagina != 1)
      		echo '<a href="'.$url.'?pagina='.($pagina-1).'">Atras</a>';
      	for ($i=1;$i<=$total_paginas;$i++) {
        if ($pagina == $i)
            
            echo $pagina;

         else        
            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
      }
      if ($pagina != $total_paginas)
         echo '<a href="'.$url.'?pagina='.($pagina+1).'">Siguiente</a>';
	}

	echo '</di>';
}
?>