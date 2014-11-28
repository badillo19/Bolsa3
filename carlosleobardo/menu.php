<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
</head>
<body>

<div id='cssmenu'>
<ul>


<?PHP

include("PHP/conexion.php");


	$consulta = mysql_query("SELECT * FROM t01tipocarrera",$conexion);
	$row = mysql_fetch_array($consulta);


	
		do{
		
		
	echo '<li class="has-sub"><a href="#"><span>'.$row["t01tipo"].'</span></a>
      <ul>';
         
		 
		 $subconsulta = mysql_query("SELECT t02idcarrera,t02carrera FROM t02carrera WHERE t01idtipocarrera = '$row[t01idtipocarrera]'",$conexion);
		 $row2 = mysql_fetch_array($subconsulta);
		 
		 do{
		 
		 
		 $cuenta_menu = mysql_query("SELECT COUNT(Id_usuario) As Total FROM datos_usuario WHERE Especialidad = '$row2[t02idcarrera]'",$conexion);
		 $coRow = mysql_fetch_array($cuenta_menu);
		 
		 
		 echo '<li><a href="pagina_consulta.php?t02idcarrera='.$row2["t02idcarrera"].'"><span>'.utf8_encode($row2["t02carrera"]).' ('.$coRow["Total"].')</span></a></li>';
		 
		 
		 
		 }while( $row2 = mysql_fetch_array($subconsulta));
		 
		 
		 
		 
		 
		 
		 
      echo '</ul>
   </li>';

   }while($row = mysql_fetch_array($consulta));
   
   
?>



</div>

</body>
<html>
