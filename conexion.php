<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Conexion_BD</title>
</head>

<body>
		<?php
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$bd="plataforma_v";
	$conexion=mysqli_connect($servidor,$usuario,$clave,$bd) or die("NO HAY CONEXION CON LA BASE DE DATOS");
		 
    ?>
	
</body>
</html>