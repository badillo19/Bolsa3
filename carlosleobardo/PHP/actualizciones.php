<?php 

include 'conexion.php';

function consulta_col1() {

$consulta = mysql_query("SELECT Foto_perfil, Nombre, Apellido_paterno, Apellido_Materno, Correo_electronico, Grado, Especialidad, t02carrera FROM datos_usuario 
                         INNER JOIN t02carrera ON t02idcarrera = Especialidad
                         LIMIT 0, 2");

while($reg = mysql_fetch_array($consulta)) {

	echo "<div class = 'col-md-7 caja_cons_act'>
        <div class = 'col-xs-4 caja_foto_act'>
          <img src='usuario/archivos/fotos_perfil/".$reg['Foto_perfil']."' class = 'foto_perf_act'>
        </div>
        <div class = 'col-xs-8'>
          <h6>".$reg['Nombre']." ".$reg['Apellido_paterno'].$reg['Apellido_Materno']."</h6>
          <h6>".$reg['Grado']." ".$reg['t02carrera']."</h6>
          <div class = 'lin_sep_dec'></div>
          <h6>".$reg['Correo_electronico']."</h6>
        </div>
  </div>";
	}
}

function consulta_col2() {
$consulta = mysql_query("SELECT Foto_perfil, Nombre, Apellido_paterno, Apellido_Materno, Correo_electronico, Grado, Especialidad,t02carrera FROM datos_usuario 
                         INNER JOIN t02carrera ON t02idcarrera = Especialidad
                         LIMIT 2, 4");

while($reg = mysql_fetch_array($consulta)) {

	echo "<div class = 'col-md-7 caja_cons_act'>
        <div class = 'col-xs-4 caja_foto_act'>
          <img src='usuario/archivos/fotos_perfil/".$reg['Foto_perfil']."' class = 'foto_perf_act'>
        </div>
        <div class = 'col-xs-8'>
          <h6>".$reg['Nombre']." ".$reg['Apellido_paterno'].$reg['Apellido_Materno']."</h6>
          <h6>".$reg['Grado']." ".$reg['t02carrera']."</h6>
          <div class = 'lin_sep_dec'></div>
          <h6>".$reg['Correo_electronico']."</h6>
        </div>
  </div>";
	}
}

?>