<?php 

session_start();
include('conexion.php');


//Manejo del archivo de la foto de erfil
$fp_nombre_tmp = $_FILES['foto_perfil']['tmp_name'];
$fp_nombre = $_FILES['foto_perfil']['name'];
$fp_tipo  = $_FILES['foto_perfil']['type'];
$fp_peso  = $_FILES['foto_perfil']['size'];

$cad1 = substr($_POST['nombre'], 0, 2);
$cad2 = substr($_POST['apellido_paterno'], 0, 2);
$cad3 = substr($_POST['apellido_materno'], 0, 2);

$cadena_nombre = $cad1.$cad2.$cad3.rand(100, 1000000);

$nombre_referencia = strtolower($cadena_nombre);


if(is_uploaded_file($fp_nombre_tmp) && $fp_peso >= '50000' && $fp_tipo == 'image/jpeg') {

	move_uploaded_file($fp_nombre_tmp, '../usuario/archivos/fotos_perfil/'.$fp_nombre);
	rename('../usuario/archivos/fotos_perfil/'.$fp_nombre, '../usuario/archivos/fotos_perfil/foto_perfil_'.$nombre_referencia.'.jpg');
}
else {

	//Mandar mensaje deerror de carga d archivo
	echo  "no se guardó la foto de perfil<br>";
}


//Manejo del archivo del curriculum
$c_nombre_tmp = $_FILES['archivo_curriculum']['tmp_name'];
$c_nombre = $_FILES['archivo_curriculum']['name'];
$c_tipo  = $_FILES['archivo_curriculum']['type'];
$c_peso  = $_FILES['archivo_curriculum']['size'];

if(is_uploaded_file($c_nombre_tmp) && $c_peso >= '50000' && $c_tipo == 'application/pdf') {

	move_uploaded_file($c_nombre_tmp, '../usuario/archivos/curriculums/'.$c_nombre);
	rename('../usuario/archivos/curriculums/'.$c_nombre, '../usuario/archivos/curriculums/curriculum_'.$nombre_referencia.'.pdf');
}
else {

	//Mandar mensaje deerror de carga d archivo
	echo "No se guardó el curriculum";
}
	

$sent = mysql_query("UPDATE datos_usuario SET 
								Foto_perfil = 'foto_perfil_".$nombre_referencia.".jpg',
	   		   					Sexo = '".$_POST['genero']."',
								Nombre = '".$_POST['nombre']."',
								Apellido_paterno = '".$_POST['apellido_paterno']."',
								Apellido_materno = '".$_POST['apellido_materno']."',				
						        No_movil = '".$_POST['movil']."',
						     	Tel_casa = '".$_POST['tel_casa']."',
								Estado = '".$_POST['estado']."',
								Municipio = '".$_POST['municipio']."',
								Grado = '".$_POST['grado']."',
								Especialidad = '".$_POST['especialidad']."',
								Curriculum = 'curriculum_".$nombre_referencia.".pdf' 

								WHERE Id_usuario = '".$_SESSION['id_usuario']."'");


if($sent) {
	header('location: ../usuario/registro_datos_usario.php');
}
else {
	echo "no se guardarón los datos".mysql_error();
}

// //***************************************************************************************+
// /*Cambiar tabla datos_usuario en cada campo asignarle valor default*/

?>