<?php 
include 'conexion.php';

//Ing. en Materiales
function consulta_ing_materiales() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_materiales'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_materiales' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "ing_materiales.php";

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

//Ing. Manofactura
function consulta_ing_manofactura() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_manofactura'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_manofactura' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "ing_manofactura.php";

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

//Ing. en Mecatrónica
function consulta_ing_mecatronica() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_mecatronica'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_mecatronica' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "ing_mecatronica.php";

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

//Ing. Negocios
function consulta_ing_negocios() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_negocios'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_negocios' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "ing_negocios.php";

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

//Ing. Robotica Industrial
function consulta_ing_robotica_industrial() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_robotica_industrial'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_robotica_industrial' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "ing_robotica_industrial.php";

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

//Ing. Semiconductores y microelectrica
function consulta_ing_semiconductores_microelectrica() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_semiconductores_microelectrica'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_semiconductores_microelectrica' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "ing_semiconductores_microelectrica.php";

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

//Ing. Sistems ambientales
function consulta_ing_sistemas_ambientales() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_sistemas_ambientales'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_sistemas_ambientales' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "ing_sistemas_ambientales.php";

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

//Ing. Sistemas Automotrices
function consulta_ing_sistemas_automotrices() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_sistemas_automotrice'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_sistemas_automotrice' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "ing_sistemas_automotrice.php";

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

//Ing. Tecnologia de software
function consulta_ing_tecnologia_de_software() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_tecnologia_de_software'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_tecnologia_de_software' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "ing_tecnologia_de_software.php";

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

//Ing. Transporte
function consulta_ing_transporte() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_transporte'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_transporte' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "ing_transporte.php";

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

//Ing. Farmaceutica
function consulta_ing_farmaceutica() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_farmaceutica'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_farmaceutica' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "ing_farmaceutica.php";

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

//Ing Fisica
function consulta_ing_fisica() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_fisica'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_fisica' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "ing_fisica.php";

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

//Ing. Geomatica
function consulta_ing_geomatica() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_geomatica'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_geomatica' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "ing_geomatica.php";

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

//Ing. Geofisica
function consulta_ing_matematica() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_matematica'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_matematica' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "ing_matematica.php";

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

//Ing. matemática
function consulta_ing_geofisica() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_geofisica'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'ing_geofisica' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "ing_geofisica.php";

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