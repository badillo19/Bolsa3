<?php 

include 'conexion.php';

//DC ciencias Sociales
function consulta_doctorado_ciencias_sociales() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_ciencias_sociales'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_ciencias_sociales' LIMIT ".$inicio.",".$tamanio_consulta);

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
							<a href='#'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "doctorado_ciencias_sociales.php";

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

//DC Director de Ingeniería
function consulta_doctorado_director_ingenieria() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_director_ingenieria'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_director_ingenieria' LIMIT ".$inicio.",".$tamanio_consulta);

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
							<a href='#'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "doctorado_director_ingenieria.php";

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


//DC administración
function consulta_doctorado_administracion() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_administracion'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_administracion' LIMIT ".$inicio.",".$tamanio_consulta);

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
							<a href='#'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "doctorado_administracion.php";

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

//DC en Administración de Negocos
function consulta_doctorado_administracion_negocios() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_administracion_negocios'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_administracion_negocios' LIMIT ".$inicio.",".$tamanio_consulta);

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
							<a href='#'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "doctorado_administracion_negocios.php";

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

//DC Administración Pública
function consulta_doctorado_administracion_publica() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_administracion_publica'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_administracion_publica' LIMIT ".$inicio.",".$tamanio_consulta);

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
							<a href='#'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "doctorado_administracion_publica.php";

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


//Doctorado en Alimentos
function consulta_doctorado_alimentos() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_alimentos'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_alimentos' LIMIT ".$inicio.",".$tamanio_consulta);

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
							<a href='#'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "doctorado_alimentos.php";

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

//DC Ambiente y Salud
function consulta_doctorado_ambiente_salud() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_ambiente_salud'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_ambiente_salud' LIMIT ".$inicio.",".$tamanio_consulta);

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
							<a href='#'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "doctorado_ambiente_salud.php";

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


//DC Antropología
function consulta_doctorado_antropologia() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_antropologia'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_antropologia' LIMIT ".$inicio.",".$tamanio_consulta);

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
							<a href='#'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "doctorado_antropologia.php";

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

//Doctorado en Arquitectura
function consulta_doctorado_arquitectura() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_arquitectura'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_arquitectura' LIMIT ".$inicio.",".$tamanio_consulta);

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
							<a href='#'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "doctorado_arquitectura.php";

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

//DC Artes
function consulta_doctorado_artes() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_artes'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_artes' LIMIT ".$inicio.",".$tamanio_consulta);

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
							<a href='#'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "doctorado_artes.php";

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

//DC Biociencias
function consulta_doctorado_biociencias() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_biociencias'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_biociencias' LIMIT ".$inicio.",".$tamanio_consulta);

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
							<a href='#'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "doctorado_biociencias.php";

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

//DC Bioética
function consulta_doctorado_bioetica() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_bioetica'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_bioetica' LIMIT ".$inicio.",".$tamanio_consulta);

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
							<a href='#'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "doctorado_bioetica.php";

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

//Dcciencias administrativas
function consulta_doctorado_ciencias_administrativas() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_ciencias_administrativas'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_ciencias_administrativas' LIMIT ".$inicio.",".$tamanio_consulta);

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
							<a href='#'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "doctorado_ciencias_administrativas.php";

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

//DC Ing. Computación
function consulta_doctorado_ing_computacion() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_ing_computacion'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_ing_computacion' LIMIT ".$inicio.",".$tamanio_consulta);

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
							<a href='#'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "doctorado_ing_computacion.php";

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

//DC Ciencias Políticas
function consulta_doctorado_ciencia_politica() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_ciencia_politica'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_ciencia_politica' LIMIT ".$inicio.",".$tamanio_consulta);

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
							<a href='#'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "doctorado_ciencia_politica.php";

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

//DC Ciencia y Tecnológía
function consulta_doctorado_ciencia_tecnologia() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_ciencia_tecnologia'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_ciencia_tecnologia' LIMIT ".$inicio.",".$tamanio_consulta);

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
							<a href='#'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "doctorado_ciencia_tecnologia.php";

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

//DC ciencias ing Industrial
function consulta_doctorado_ciencias_ing_industrial() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_ciencias_ing_industrial'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_ciencias_ing_industrial' LIMIT ".$inicio.",".$tamanio_consulta);

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
							<a href='#'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "doctorado_ciencias_ing_industrial.php";

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

//DC Ciencias Agrarias
function consulta_doctorado_ciencias_agrarias() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_ciencias_agrarias'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'doctorado_ciencias_agrarias' LIMIT ".$inicio.",".$tamanio_consulta);

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
							<a href='#'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "doctorado_ciencias_agrarias.php";

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