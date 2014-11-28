<?php 

include 'PHP/conexion.php';

function cargar_datos_personas_especialidad() {


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
		echo $registros['Nombre']."<br>";
	}

	$url = "pagina_consulta.php";

	if ($total_paginas > 1) {

   		if ($pagina != 1)
      		echo '<a href="'.$url.'?pagina='.($pagina-1).'"><img src="images/izq.gif" border="0"></a>';
      	for ($i=1;$i<=$total_paginas;$i++) {
        if ($pagina == $i)
            
            echo $pagina;

         else        
            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
      }
      if ($pagina != $total_paginas)
         echo '<a href="'.$url.'?pagina='.($pagina+1).'"><img src="images/der.gif" border="0"></a>';
	}

}




?>