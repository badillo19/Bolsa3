<?php 



function Consultar_datos_registro($referencia) {

	$consulta = mysql_query("SELECT Foto_perfil, Sexo, Nombre, Apellido_paterno, Apellido_materno, Correo_electronico, No_movil, Tel_casa, Estado, Municipio, Grado, Especialidad, Curriculum
			 FROM datos_usuario WHERE Id_usuario = '".$referencia."'");


		include("conexion.php");


while($reg = mysql_fetch_array($consulta)) {

error_reporting(NULL);

if($reg['Foto_perfil'] == ""){
$foto_perfil = "../img/1409003949_user-alt.png";
}else{
$foto_perfil = "../usuario/archivos/fotos_perfil/".$reg['Foto_perfil'];
}


if($reg['Sexo'] == "h"){

$radioh = '<input type = "radio" name = "genero" value = "h" id = "radio1" checked="checked">';
$radiom = '<input type = "radio" name = "genero" value = "m" id = "radio1">';

}else{

$radioh = '<input type = "radio" name = "genero" value = "h" id = "radio1">';
$radiom = '<input type = "radio" name = "genero" value = "m" id = "radio1" checked="checked">';

}



$especialidad = mysql_query("SELECT * FROM t02carrera WHERE t02idcarrera = '$reg[Especialidad]'",$conexion);
$esRow = mysql_fetch_array($especialidad);




$consuledo = mysql_query("SELECT * FROM estados WHERE idestados = '$reg[Estado]'",$conexion);
$edoRow = mysql_fetch_array($consuledo);


$consulmpo = mysql_query("SELECT * FROM municipios WHERE idmunicipios = '$reg[Municipio]'",$conexion);
$mpoRow = mysql_fetch_array($consulmpo);



if($_GET["estado"] == ""){

$estado = $edoRow["estado"];
$idestado = $edoRow["idestado"];

$municipio = $mpoRow["municipio"];
$idmunicipio = $mpoRow["idmunicipio"];


}else{


$estado = $_GET["estado"];
$idestado = $_GET["idestado"];


}




	echo '
	

	
	<div class = "col-md-12" id = "caja_formulario">			
			<div class = "col-md-6">
				<div class = "row">
					<div class = "separador_campos">
						<span>Datos personales</span>
					</div>
				</div>
					<!-- Inicio de los campos de texto -->
					<div class = "row">
						<div class = "col-md-5 col-md-offset-3">
							<div class = "in_file" id = "foto_perfil" name = "foto_perfil">
								<input type = "file" name = "foto_perfil">
								<img src="'.$foto_perfil.'">
							</div>
						</div>
					</div>
					<div class = "row">
						<div class = "col-xs-10 col-md-offset-1">
						<span class = "oculto" id = "msj_1">Es necesrio introducir tu genero</span>
							<div class = "col-xs-6">
								<span>Hombre</span>
								'.$radioh.'
							</div>
							<div class = "col-xs-6">
								<span>Mujer</span>
								'.$radiom.'
								</div>
						</div>
					</div>
					<div class = "row">
						<div class = "col-md-6 col-md-offset-1">
							<span>Nombre:</span>
							<span class = "oculto" id = "msj_2">Es necesario introducir un nombre</span>
						</div>
						<div class = "col-xs-10 col-md-offset-1">
							<input type = "text" class="form-control" name = "nombre" value = "'.$reg['Nombre'].'" id = "tx_nombre">
						</div>
					</div>
					<div class = "sep2"></div>
					<div class = "row">
						<div class = "col-md-6 col-md-offset-1">
							<span>Apellido paterno:</span>
							<span class = "oculto" id = "msj_3">Es necesario introducir un apellido</span>
						</div>
						<div class = "col-xs-10 col-md-offset-1">
							<input type = "text" class="form-control" name = "apellido_paterno" value = "'.$reg['Apellido_paterno'].'" id = "tx_ape_pat">
						</div>
					</div>
					<div class = "sep2"></div>
					<div class = "row">
						<div class = "col-md-6 col-md-offset-1">
							<span>Apellido materno:</span>
							<span class = "oculto" id = "msj_9">Es necesario introducir un apellido</span>
						</div>
						<div class = "col-xs-10 col-md-offset-1">
							<input type = "text" class="form-control" name = "apellido_materno" value = "'.$reg['Apellido_materno'].'" id = "tx_ape_mat">
						</div>
					</div>
					<div class = "sep2"></div>
					<div class = "row">
						<div class = "col-md-6 col-md-offset-1">
							Numero<span> movil:</span>
							<span class = "oculto" id = "msj_4">Es necesario un No de celular</span>
						</div>
						<div class = "col-xs-10 col-md-offset-1">
							<input type = "text" class="form-control" name = "movil" value = "'.$reg['No_movil'].'" id = "tx_cel">
						</div>
					</div>
					<div class = "sep2"></div>
					<div class = "row">
						<div class = "col-md-6 col-md-offset-1">
							<span>Tel Casa:</span>
							<span class = "oculto" id = "msj_5">Es necesario un telefono de casa</span>
						</div>
						<div class = "col-xs-10 col-md-offset-1">
							<input type = "text" class="form-control" name = "tel_casa" value = "'.$reg['Tel_casa'].'" id = "tx_tel_casa">
						</div>
					</div>
					<div class = "sep2"></div>
					</div>

					<div class = "col-md-6">
				<!-- Cambio de secciÃƒÂ³n -->
				<div class = "row">
					<div class = "separador_campos">
						<span>Datos de ubicacion</span>
					</div>
				</div>

				<div class = "row">
					<div class = "col-md-6 col-md-offset-1">
						<span>Estado:</span>
						<span class = "oculto" id = "msj_6">Es necesario el nombre del estado</span>
					</div>
				<div class = "sep2"></div>
					<div class = "col-xs-10 col-md-offset-1">
						
									
				
<select onChange="window.location = this.options[this.selectedIndex].value; return true;" name="estadox"  class="form-control">
<option value="consulta_registro.php?estado='.$estado.'&idestado='.$idestado.'">'.$estado.'</option>';

$consulta = mysql_query("SELECT * FROM estados",$conexion);
$eRow = mysql_fetch_array($consulta);

do{
echo '<option value="registro_datos_usario.php?estado='.$eRow["estado"].'&idestado='.$eRow["idestados"].'">'.utf8_encode($eRow["estado"]).'</option>';
}while($eRow = mysql_fetch_array($consulta));						
						
echo '</select><input value="'.$idestado.'" id="estado" name="estado" type="hidden">




		
						
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-6 col-md-offset-1">
						<span>Municipio:</span>
						<span class = "oculto" id = "msj_7">Es necesario el nombre del municipio</span>
					</div>
					<div class = "col-xs-10 col-md-offset-1">



						<select class="form-control" name = "municipio" id = "municipio">
						<option value="'.$idmunicipio.'">'.$municipio.'</value>
						';

					$consulta_carreras = mysql_query("SELECT * FROM municipios WHERE idestado = '$_GET[idestado]'",$conexion);
					$cRow = mysql_fetch_array($consulta_carreras);

					do{
					echo '<option value="'.$cRow["idmunicipios"].'">'.utf8_encode($cRow["municipio"]).'</option>';
					}while($cRow = mysql_fetch_array($consulta_carreras));


							
						echo '</select>






</div>
				</div>

				<!-- Cambio de secciÃƒÂ³n -->
				<div class = "row">
					<div class = "separador_campos">
						<span>Datos Academicos</span>
					</div>
				</div>	
				<div class = "sep2"></div>
				<div class = "row">
					<div class = "col-md-6 col-md-offset-1">
						<span>Especialidad:</span>
						<span class = "oculto" id = "msj_8">Selecciona alguna especialidad</span>
						<span class = "asig" >Actualmente</span>
					</div>
					<div class = "col-xs-10 col-md-offset-1">
						<select class="form-control" name = "especialidad" id = "especialidad">
						<option value ="'.$esRow["t02idcarrera"].'">'.$esRow["t02carrera"].'</option>';

					$consulta_carreras = mysql_query("SELECT * FROM t02carrera",$conexion);
					$cRow = mysql_fetch_array($consulta_carreras);

					do{
					echo '<option value="'.$cRow["t02idcarrera"].'">'.utf8_encode($cRow["t02carrera"]).'</option>';
					}while($cRow = mysql_fetch_array($consulta_carreras));


							
						echo '</select>
					</div>
				</div>
				<div class = "row">
						<div class = "col-md-5 col-md-offset-4">
							<div class = "in_file" id = "foto_perfil">
								<input type = "file" name = "archivo_curriculum">
								<img src="../img/1411274968_pdf.png">
							</div>
						</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-4 col-md-offset-4">
						<!-- <button type="button" class="btn btn-primary btn-lg btn-block" >Guardar</button> -->
						<input type = "submit" value = "Guardar" class="btn btn-primary btn-lg btn-block">
					</div>
				</div>			
			</div>';
	}
}
			 

?>