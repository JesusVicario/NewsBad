<!DOCTYPE html>
<html>
<head>
	<title>NewsBad: Instalación en dispositivos móviles</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="../favicon.png" rel="icon" type="imagen/x-icon">
	<script type="text/javascript" src="../js/script.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="manifest" href="../manifest.json">
	<meta name="description" content="Instalación aplicación web NewsBad"/>
	<meta name="robots" content="noindex">
	<link rel="apple-touch-icon" href="/favicon.png">
	<meta name="theme-color" content="#ef2c2c">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<?php include "../googleanalytics.php"; ?>
	<style type="text/css">
		body{
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			background-color: #ef2c2c;
		}
		.logo{
			width: 50%;
			margin-left: 25%;
		}
		body p{
			color:white;
		}
	</style>
</head>
<body>
	<?php require "../header.php" ?>
	<div class="contenido">
<?php 
$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
if(stripos($ua,'android') !== false) {
	?>
  	<img class="logo" src="../favicon.png">
	<p class="texto">Puedes añadir el icono de una aplicación NewsBad a la pantalla de inicio de tu dispositivo Android para acceder a esa aplicación NewsBad rápidamente.</p>
	<p class="texto">Desde la aplicación NewsBad con el navegador GOOGLE CHROME, pulsa el botón arriba a la derecha los tres puntos <img alt="Tres puntos google chrome" src="img/android2.jpg" style="width: 24px"> y, a continuación, pulsa “Añadir a pantalla de inicio”<img alt="Añadir a pantalla de inicio de google chrome" src="img/android.jpg" style="width: 130px">.</p>
	<p class="texto">Solo con esto tendrás instalado NewsBad en tu dispositivo y accesible tal como aparecen las aplicaciones normalmente.</p>
	<p class="texto">Hemos configurado todo para que lo puedas hacer desde esta misma pestaña.</p>
	<?php
  exit();
}
if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPod'))
{
  ?>
  	<img class="logo" src="../favicon.png">
	<p class="texto">Puedes añadir el icono de una aplicación NewsBad a la pantalla de inicio del iPhone para acceder a esa aplicación NewsBad rápidamente.</p>
	<p class="texto">Desde la aplicación NewsBad con el navegador SAFARI, pulsa el botón Compartir <img alt="Botón compartir Safari" src="img/iphone.jfif" style="width: 24px"> y, a continuación, pulsa “Añadir a pantalla de inicio”<img alt="Botón Añadir a pantalla de inicio de Safari" src="img/iphone2.jfif" style="width: 24px">.</p>
	<p class="texto">Solo con esto tendrás instalado NewsBad en tu dispositivo y accesible tal como aparecen las aplicaciones normalmente.</p>
	<p class="texto">Hemos configurado todo para que lo puedas hacer desde esta misma pestaña.</p>
  <?php
  exit();
}
?>		
	</div>
	<?php require "../footer.php" ?>
</body>
</html>