<?php 

include 'conexion.php';

//Consulta completa
function consulta_completa() {
	$consulta = mysql_query("SELECT * FROM datos_usuario");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario LIMIT ".$inicio.",".$tamanio_consulta);

	while($registros = mysql_fetch_array($consulta)) {
		
		echo "<div class = 'row'>
						<div class = 'col-md-2'>
							<div id = 'foto'>
								<img src='usuario/archivos/fotos_perfil/".$registros['Foto_perfil']."'>
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
							<a target = '_blank' href='usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "pagina_consulta.php";

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


//Consulta de las pesonas utilizando paginación
function consulta_informatica() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'informatica'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'informatica' LIMIT ".$inicio.",".$tamanio_consulta);

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
							<a target = '_blank' href='usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "informatica.php";

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

//Consulta Sistemas Computacionales
function consulta_sistemas() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'sistemas_computacionales'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'sistemas_computacionales' LIMIT ".$inicio.",".$tamanio_consulta);

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
							<a target = '_blank' href='usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "sistemas_computacionales.php";

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

//Consulta Electónica
function consulta_electronica() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'electronica'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'electronica' LIMIT ".$inicio.",".$tamanio_consulta);

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
							<a target = '_blank' href='usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "electronica.php";

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

//consulta electromecanica
function consulta_electromecanica() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'electromecanica'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'electromecanica' LIMIT ".$inicio.",".$tamanio_consulta);

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
							<a target = '_blank' href='usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "electromecanica.php";

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

//consulta industrial
function consulta_industrial() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'industrial'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'industrial' LIMIT ".$inicio.",".$tamanio_consulta);

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
							<a target = '_blank' href='usuario/archivos/curriculums/".$registros['Curriculum']."'>
								<img src='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "industrial.php";

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