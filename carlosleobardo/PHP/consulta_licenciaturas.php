<?php 

include 'conexion.php';

function consulta_lic_admin_agroindustrial() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_admin_agroindustrial'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_admin_agroindustrial' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "lic_admin_agroindustrial.php";

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

//Lic admin empresas
function consulta_lic_admin_empresas() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_admin_empresas'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_admin_empresas' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "lic_admin_empresas.php";

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

//Lic admin en finanzas
function consulta_lic_admin_finanzas() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_admin_finanzas'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_admin_finanzas' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "lic_admin_finanzas.php";

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


//Lic admin reurso humanos
function consulta_lic_admin_recursos_humanos() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_admin_recursos_humanos'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_admin_recursos_humanos' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "lic_admin_recursos_humanos.php";

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

//Lic admin turismo
function consulta_lic_admin_turismo() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_admin_turismo'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_admin_turismo' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "lic_admin_turismo.php";

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

//Lic admon pública
function consulta_lic_admin_publica() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_admin_publica'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_admin_publica' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "lic_admin_publica.php";

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

//Lic artes visuales
function consulta_lic_artes_visuales() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_artes_visuales'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_artes_visuales' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "lic_artes_visuales.php";

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

//Lic Bioquimica
function consulta_lic_bioquimica() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_bioquimica'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_bioquimica' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "lic_bioquimica.php";

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

//Lic Ciencias Ambientales
function consulta_lic_ciencias_ambientales() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_ciencias_ambientales'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_ciencias_ambientales' LIMIT ".$inicio.",".$tamanio_consulta);

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
								<img s
								rc='../img/search_128.png' class = 'ref_info'>
							</a>
						</div>
					</div>";
	}

	$url = "lic_ciencias_ambientales.php";

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

//Lic ciencias de la computación
function consulta_lic_ciencias_computacion() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_ciencias_computacion'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_ciencias_computacion' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "lic_ciencias_computacion.php";

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

//Lic Diseño
function consulta_lic_disenio() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_disenio'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_disenio' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "lic_disenio.php";

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

//Lic gestión ambiental
function consulta_lic_gestion_ambiental() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_gestion_ambiental'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_gestion_ambiental' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "lic_gestion_ambiental.php";

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

//Lic en Historia
function consulta_lic_historia() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_historia'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_historia' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "lic_historia.php";

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

//Lic lenguas Extranjeras
function consulta_lic_lenguas_extranjeras() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_lenguas_extranjeras'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_lenguas_extranjeras' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "lic_lenguas_extranjeras.php";

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

//Lic en Musica
function consulta_lic_musica() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_musica'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_musica' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "lic_musica.php";

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

//Lic Óptica
function consulta_lic_optica() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_optica'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_optica' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "lic_optica.php";

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

//Lic en Tecnológia
function consulta_lic_tecnologia() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_tecnologia'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_tecnologia' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "lic_tecnologia.php";

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

//Lic en Turismo
function consulta_lic_turismo() {
	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_turismo'");
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

	$consulta = mysql_query("SELECT * FROM datos_usuario WHERE Especialidad = 'lic_turismo' LIMIT ".$inicio.",".$tamanio_consulta);

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

	$url = "lic_turismo.php";

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