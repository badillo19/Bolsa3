<?php 

include('conexion.php');

$destino = $_POST['correo_electronico'];
$titulo = 'Confirmación de registro - Bolsa de trabajo Siglo de Torreón';

$mensaje = "
<html>
<head>
<title></title>
<meta charset = 'utf-8'>
<style type='text/css'>
	
	h1, a, p {
		font-family: arial;
	}

	#titulo {		
		padding: .5em;
		background-color: #DBF3FF;
		text-align: center;
	}

</style>
</head>
<body>

<table>
	<tr>
		<td><h1 id = 'titulo'>Confrmación de registro</h1></td>
	</tr>
	<tr>
		<td>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec est sem, ultrices eget est ut, efficitur mollis augue. Quisque fringilla at urna eget egestas. Curabitur bibendum hendrerit felis in eleifend. Donec sed elementum ex. Mauris ullamcorper dolor risus, vel congue orci porta sit amet.
			</p>

			<a href='#''>Click para confirmar</a>
		</td>
	</tr>
</table>

</body>
</html>
";

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


mail($destino, $titulo, $mensaje, $cabeceras);

// if(mail($destino, $titulo, $mensaje, $cabeceras)) {
	
// $insert = mysql_query("INSERT INTO datos_reg_temp (Correo_electronico, Clave_acceso)
// 					   VALUES ('".$_POST['correo_electronico']."', '".$_POST['clave_acceso']."')");
// 	echo "El correo se envió";
// }
// else {
// 	echo "No ha sido posible enviar el correo";
// }

?>