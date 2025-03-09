<?php 
if (isset($_POST["nombre"])) {
	$to = "jvicariovaladez@gmail.com";
	$asunto = "News Bad";
	$nombre = $_POST["nombre"];
	$mail = $_POST["correo"];
	$texto = $_POST["texto"];
	$mensaje = "Nombre y apellidos: " . $nombre . "\n";
	$mensaje .= "Correo electrónico: " . $mail . "\n";
	$mensaje .= "Mensaje: " . $texto;
	if (mail($to, $asunto, $mensaje)) {
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>NewsBad: Contacta con nuestro equipo</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link href="../favicon.png" rel="icon" type="imagen/x-icon">
		<script type="text/javascript" src="../js/script.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="manifest" href="../manifest.json">
		<link rel="canonical" href="http://www.newsbad.es/contactar">
		<link rel="apple-touch-icon" href="/favicon.png">
		<meta name="theme-color" content="#ef2c2c">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<?php include "../googleanalytics.php"; ?>
	</head>
	<body>
		<?php include "../header.php" ?>
		<div class="contenido">
			<h1 class="titulo">Contacta con nosotros</h1>
			<div class="formulario">
				<form method="post" action="">
					<p style="color:#ef2c2c;text-align: center;">El mensaje ha sido enviado con exito</p>
					<input type="text" placeholder="Nombre y apellidos" name="nombre">
					<input type="email" placeholder="Correo electrónico" name="correo">
					<textarea name="texto" placeholder="Escribe aquí tu mensaje"></textarea>
					<input type="submit" value="Enviar">
				</form>
				<div class="textocontactar">
					<p>Dejamos a vuestra disposición este formulario para que os podáis poner el contacto con nosotros.</p>
					<p>Este formulario también se puede usar para la solicitud de eliminación de nuestros contenidos, en caso de ser referenciado en algunos de nuestros artículos.</p>
					<p>También se puede utilizar si tenéis en vuestro poder alguna noticia falsa, pero advertimos que si su contenido no es lo suficientemente loco y divertido no se publicará.</p>
				</div>
			</div>
		</div>
		<div style="margin-top:10vw;">
			<?php include "../footer.php" ?>
		</div>
	</body>
	</html>
	<?php		
	}
} else {
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>NewsBad: Contacta con nuestro equipo</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link href="../favicon.png" rel="icon" type="imagen/x-icon">
		<script type="text/javascript" src="../js/script.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="manifest" href="../manifest.json">
		<link rel="apple-touch-icon" href="/favicon.png">
		<meta name="theme-color" content="#ef2c2c">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<?php include "../googleanalytics.php"; ?>
	</head>
	<body>
		<?php include "../header.php" ?>
		<div class="contenido">
			<h1 class="titulo">Contacta con nosotros</h1>
			<div class="formulario">
				<form method="post" action="">
					<input type="text" placeholder="Nombre y apellidos" name="nombre">
					<input type="email" placeholder="Correo electrónico" name="correo">
					<textarea name="texto" placeholder="Escribe aquí tu mensaje"></textarea>
					<input type="submit" value="Enviar">
				</form>
				<div class="textocontactar">
					<p>Dejamos a vuestra disposición este formulario para que os podáis poner el contacto con nosotros.</p>
					<p>Este formulario también se puede usar para la solicitud de eliminación de nuestros contenidos, en caso de ser referenciado en algunos de nuestros artículos.</p>
					<p>También se puede utilizar si tenéis en vuestro poder alguna noticia falsa, pero advertimos que si su contenido no es lo suficientemente loco y divertido no se publicará.</p>
				</div>
			</div>
		</div>
		<div style="margin-top:10vw;">
			<?php include "../footer.php" ?>
		</div>
	</body>
	</html>
	<?php
}
?>