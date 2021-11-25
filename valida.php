<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Log-in UniTeams</title>
</head>

<body>
	<center>Log-in al Sistema UniTeams</center><br>
	<center>Para ingresar al sistema ingresa tus datos</center><br>

	<html>
	<form name="valida_login" method="post">
	
	<div>
	<label>Usuario:</label>
	<input type="text" name="usuario_v">
	 </div>
	
	<div>
	<label>Clave:</label>
	<input type="password" name="clave_v">
	</div>
	
	<div>
	<label>Tipo:</label>
	<select name="tipo_v">
	<option value="1">maestro</option>
	<option value="2">alumno</option>
	</select>
    </div>

	<input type="submit" name="enviar" value="Ingresar"	
	
		   
	</form>
		<?php
		include("conexion.php");
		if(isset($_POST['enviar']))
		{
		$usuario_v=$_POST['usuario_v'];
		$clave_v=$_POST['clave_v'];
		$tipo_v=$_POST['tipo_v'];
		$consulta="SELECT * FROM registro_u WHERE usuario_u='$usuario_v' AND clave_u='$clave_v' AND tipo_u='$tipo_v'";
			
		$resultado=mysqli_query($conexion,$consulta);
		$obtiene=mysqli_fetch_assoc($resultado);
		
			$usuario_ingresado=$obtiene['usuario_u'];
			$clave_ingresada=$obtiene['clave_u'];
			$tipo_ingresado=$obtiene['tipo_u'];
			
					
		if($usuario_v==$usuario_ingresado&&$clave_v==$clave_ingresada)
		if($tipo_ingresado=='1')
		{
			header('location: profe.html');
		}
	elseif($tipo_ingresado=='2')
	{
		header('location: administrador.html');
	}
	else 
		echo'EL USUARIO ES INCORRECTO';
	else
		echo'DATOS INCORRECTOS';
		}

		?>
	<center><a heref="index.html">Salir</a>
	</html>
</body>
</html>