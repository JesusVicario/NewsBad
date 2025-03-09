<?php 
if ((isset($_POST["contrasena"]) && $_POST["contrasena"] == "JesusNewsBad") || isset($_POST["hora"])) {
	if (isset($_POST["hora"])) {
		$noticia = $_POST["hora"] . "¨" . $_POST["noticia"] . "\n";
		$archivo = fopen("noticias.txt", "a+");
		fwrite($archivo, $noticia);
		fclose($archivo);
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Administrador Noticias</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style type="text/css">
			form{
				display: flex;
				flex-direction: column;
			}
			input{
				margin: 2vw;
				border-radius: 15px;
				border: 2px solid black;
			}
			body{
				display: flex;
				justify-content: center;
				align-items: center;
				height: 100vh;
				background-color: #ef2c2c;
				flex-direction: column;
			}
			img{
				width: 20vw;
			}
		</style>
	</head>
	<body onload="alert('Actualizado');">
		<img src="../favicon.png">
		<form action="" method="post">
			<input placeholder="Hora" type="text" name="hora">
			<textarea placeholder="Noticia" name="noticia"></textarea>
			<input type="submit" name="Subir">
		</form>	
	</body>
	</html>
	<?php		
	} else {
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Administrador Noticias</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style type="text/css">
			form{
				display: flex;
				flex-direction: column;
			}
			input{
				margin: 2vw;
				border-radius: 15px;
				border: 2px solid black;
			}
			body{
				display: flex;
				justify-content: center;
				align-items: center;
				height: 100vh;
				background-color: #ef2c2c;
				flex-direction: column;
			}
			img{
				width: 20vw;
			}
		</style>
	</head>
	<body>
		<img src="../favicon.png">
		<form action="" method="post">
			<input placeholder="Hora" type="text" name="hora">
			<textarea placeholder="Noticia" name="noticia"></textarea>
			<input type="submit" name="Subir">
		</form>	
	</body>
	</html>
	<?php
}
} else {
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Administrador Noticias</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style type="text/css">
			form{
				display: flex;
				flex-direction: column;
			}
			input{
				margin: 2vw;
				border-radius: 15px;
				border: 2px solid black;
			}
			body{
				display: flex;
				justify-content: center;
				align-items: center;
				height: 100vh;
				background-color: #ef2c2c;
				flex-direction: column;
			}
			img{
				width: 20vw;
			}
		</style>
	</head>
	<body>
		<img src="../favicon.png">
		<form method="post" action="">
			<input placeholder="Contraseña administrador" type="password" name="contrasena">
			<input type="submit" value="Entrar">
		</form>	
	</body>
	</html>
	<?php
}
?>