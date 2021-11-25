<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registros UniTeams</title>
</head>

<body>
	<center>Registro al Sistema UniTeams</center><br>
	<center>Para realizar su registro debe llenar los siguientes campos</center><br>

	<html>
	<form name="registro" method="post">
		
	<label>Usuario:</label>
	<input type="text" name="usuario">
		
	<label>Clave:</label>
	<input type="password" name="clave">
	
	
	<label>Tipo:</label>
	<select name="tipo">
	<option value="1">maestro</option>
	<option value="2">alumno</option>
	</select>
	
	
	
	<input type="submit" name="guardar" value="Guardar">
	</form>
	<?php
		include("conexion.php");
		if(isset($_POST['guardar']))
		{
		$usuario_r=$_POST['usuario'];
		$clave_r=$_POST['clave'];
		$tipo_r=$_POST['tipo'];
			
		$inserta="INSERT INTO registro_u(usuario_u,clave_u,tipo_u) VALUES ('$usuario_r', '$clave_r', '$tipo_r')";
		mysqli_query($conexion,$inserta);	
		}
		?>
		<center><a href="index.html">Regresar</a>
	</html>
</body>
</html>