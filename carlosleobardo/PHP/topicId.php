<?php


include("conexion.php");


$consulta_modelos = mysql_query("SELECT * FROM municipios",$conexion);
$row = mysql_fetch_array($consulta_modelos);

$options="";
do{
$options .= '<option value="'.$row["idmunicipios"].'">'.$row["municipio"].'</option>';
}while($row = mysql_fetch_array($consulta_modelos));


echo $options;

mysql_close($conn);

?>