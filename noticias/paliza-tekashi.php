<?php 
include "../conn.php";
include "../vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
if (isset($_POST["correo"])) {
	$email = $_POST["correo"];
	$sql = "INSERT INTO newsletter (id, email)
	VALUES ('', '$email');";
	$comprobar = "0";
	$sql2 = "SELECT * FROM newsletter";
	$tabla = $conn->query($sql2);
	while ($resultado = mysqli_fetch_assoc($tabla)) {
	if ($resultado["email"] == $email) {
			$comprobar = "1";
	}
	}
	if (!isset($_COOKIE["registro"])) {
	if ($comprobar == "1") {
		if (setcookie("registro", "funciona", time() + (86400 * 365), "/")) {
			?>
			<script type="text/javascript">
				location.reload();
			</script>
			<?php
		}
	} else {
	if ($conn->query($sql)) {
	$correo = new PHPMailer();
 	$correo->setFrom ('noreply@newsbad.es', 'NewsBad');
 	$correo->Subject = "Gracias por suscribirte a nuestra web";
 	$correo->Body = "<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type='text/css'>
		p{
			color:white;
			width: 90%;
			text-align: center;
		}
	</style>
</head>
<body style='background-color:#ef2c2c;'>
	<img style='width: 40%;margin-left: 30%;' src='https://www.newsbad.es/img/letraslogo.png'>
	<p>Estamos muy contentos que hayas decidido suscribirte a nuestra web, por eso hemos desbloqueado todos los artículos ocultos de nuestra web para que puedas leerlo.</p>
	<p>Si entras en nuestra web desde un dispositivo diferente, solo tendrás que poner de nuevo tu correo en nuestro formulario para desvelar todos los artículos. Puede ser el mismo correo.</p>
	<p>Esperamos que nuestra web sea de tu agrado y que te lo pases bien leyendo nuestros artículos chorras.</p>
	<p>Si no quieres recibir más correos de NewsBad entra en: https://www.newsbad.es/admin/correos/quitarnewsletter.php</p>
</body>
</html>";
 	$correo->isHTML(true);
 	$correo->addAddress($email);
 	$correo->send();
		if (setcookie("registro", "funciona", time() + (86400 * 365), "/")) {
			?>
			<script type="text/javascript">
				location.reload();
			</script>
			<?php
		}
	}
	}}
}
if (isset($_COOKIE["registro"])) {
	/*Artículo completo*/

	?>
<!DOCTYPE html>
<html>
<head>
	<title>NewsBad: Brutal paliza a Tekashi 6ix9ine</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="../favicon.png" rel="icon" type="imagen/x-icon">
	<script type="text/javascript" src="../js/script.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="manifest" href="../manifest.json">
	<meta name="description" content="Tekashi 6ix9ine recibe una paliza brutal tras salir de la cárcel, conseguimos obtener información sobre el hecho. Entra y te contamos todo. ;)">
	<link rel="canonical" href="https://www.newsbad.es/noticias/paliza-tekashi.php">
	<meta name="keywords" content="tekashi, 6ix9ine, paliza, carcel, salir">
	<link rel="apple-touch-icon" href="/favicon.png">
	<meta name="theme-color" content="#ef2c2c">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta property="og:image" content="https://www.newsbad.es/noticias/img/tekashi.jpg">
	<?php include "../googleanalytics.php"; ?>
</head>
<body>
	<?php include "../header.php" ?>
	<div class="contenido">
		<img alt="Tekashi 6ix9ine" class="fotosgrandes" src="img/tekashi.jpg">
		<h1 class="titulo">Brutal paliza a Tekashi 6ix9ine</h1>
		<p class="textonoticias">Tekashi es un trapero, compositor, rapero, criminal estadounidense que entró en la cárcel en 2018 por formar parte de una secta violenta llamada Pandilla Nine Trey, donde se incitaba a asesinato y el robo con mano armada. El 1 de febrero después de declararse culpable de nueve delitos que podría ocasionarle estar en la cárcel 47 años, decidió delatar a varios miembros de la pandilla, lo que hizo que bajase mucho la condena y se quedase en solo 2 años.</p>
		<p class="textonoticias">Mucho antes de esto, Tekashi colaboró con Anuel en la canción BEBE, donde su fama se disparó al colaborar con un rapero tan conocido como es Anuel AA. En una entrevista donde preguntaron a Anuel AA si mantenía la amistad con Tekashi este dijo que no.</p>
		<iframe class="fotosnoticias" width="560" height="315" src="https://www.youtube.com/embed/ycV6cnK3SIs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<p class="textonoticias">Hace relativamente poco Tekashi salió de la cárcel para no contraer el Covid-19, ya que se podría complicar por su enfermedad respiratoria, nada más salió se gastó casi un millón de dolares en un collar donde podemos apreciar el tiburon de Buscando a nemo.</p>
		<img class="fotosnoticias" src="img/colgantetekashi.jpg">
		<div class="anuncio">
				<script type="application/javascript">
		    var ad_idzone = "3870962",
		    ad_width = "300",
		    ad_height = "250"
		</script>
		<script type="application/javascript" src="https://a.exdynsrv.com/ads.js"></script>
		<noscript>
		    <iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3870962&output=noscript&type=300x250" width="300" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
		</noscript>			
		</div>
		
		<p class="textonoticias">Grabó una canción llamada Gooba que está teniendo un éxito extraordinario en YouTube donde presume de su nuevo collar y de su dinero.</p>
		<iframe class="fotosnoticias" width="560" height="315" src="https://www.youtube.com/embed/pPw_izFr5PA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<p class="textonoticias">Después de reanudar su carrera como cantante, nos llegó una noticia bastante impactante, según nos cuenta Niu yor taims, el famoso cantante sufrió una grave paliza a las puertas de su domicilio cuando venía de vuelta de los juzgados de su ciudad al tener que asistir para recoger los papeles donde venía la información sobre como tenía que pasar su arrestro domiliciliario.</p>
		<p class="textonoticias">Se cree que los asaltantes son de la misma banda que el delató el año pasado, haciendo de esa paliza una venganza por delatar a parte de la banda para así rebajar la condena el prisión.</p>
		<div class="anuncio">
				<script type="application/javascript">
		    var ad_idzone = "3870962",
		    ad_width = "300",
		    ad_height = "250"
		</script>
		<script type="application/javascript" src="https://a.exdynsrv.com/ads.js"></script>
		<noscript>
		    <iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3870962&output=noscript&type=300x250" width="300" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
		</noscript>			
		</div>
		
		<p class="textonoticias">Ahora mismo se encuentra en el hospital de Brooklyn, Tekashi se encuentra grave, al parecer uno de los asaltantes tiene Covid-19 y 6ix9ine tiene todos los síntomas del coronavirus.</p>
		<p class="textonoticias">Desde el juzgado de Brooklyn estan barajando la posibilidad de que cuando 6ix9ine se recupere que vuelva a prisión, ya que si da positivo en Covid-19 y se recupera sin problemas, podría volver a prisión ya que al haber sido contagiado, sería inmune a esta oleada de Covid-19.</p>
	<div class="flechas">
		<button onclick="location.href='pabloiglesias-sin-coleta.php'">Atrás</button>
		<button onclick="location.href='auron-quema-libros.php'">Siguiente</button>
	</div>
		<div class="compartirredessociales">
			<a href="https://www.facebook.com/sharer/sharer.php?u=https://www.newsbad.es/noticias/paliza-tekashi.php"><img src="../img/facebook.png"></a>
			<a href="https://twitter.com/home?status=https://www.newsbad.es/noticias/paliza-tekashi.php NewsBad: Brutal paliza a Tekashi 6ix9ine."><img src="../img/twitter.png"./a>
			<a href="https://api.whatsapp.com/send?text=NewsBad:%20Brutal%20paliza%20a%20Tekashi%206ix9ine%20https://www.newsbad.es/noticias/paliza-tekashi.php"><img src="../img/whatsapp.png"></a>
		</div>
	</div>
	<?php include "../footer.php" ?>
	</body>
</html>
	<?php

} else {
	/*Artículo oculto*/
	?>
<!DOCTYPE html>
<html>
<head>
	<title>NewsBad: Brutal paliza a Tekashi 6ix9ine</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="../favicon.png" rel="icon" type="imagen/x-icon">
	<script type="text/javascript" src="../js/script.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="manifest" href="../manifest.json">
	<meta name="description" content="Tekashi 6ix9ine recibe una paliza brutal tras salir de la cárcel, conseguimos obtener información sobre el hecho. Entra y te contamos todo. ;)">
	<link rel="canonical" href="https://www.newsbad.es/noticias/paliza-tekashi.php">
	<meta name="keywords" content="tekashi, 6ix9ine, paliza, carcel, salir">
	<link rel="apple-touch-icon" href="/favicon.png">
	<meta name="theme-color" content="#ef2c2c">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta property="og:image" content="https://www.newsbad.es/noticias/img/tekashi.jpg">
	<?php include "../googleanalytics.php"; ?>
</head>
<body>
	<?php include "../header.php" ?>
	<div class="contenido">
		<img alt="Tekashi 6ix9ine" class="fotosgrandes" src="img/tekashi.jpg">
		<h1 class="titulo">Brutal paliza a Tekashi 6ix9ine</h1>
		<p class="textonoticias">Tekashi es un trapero, compositor, rapero, criminal estadounidense que entró en la cárcel en 2018 por formar parte de una secta violenta llamada Pandilla Nine Trey, donde se incitaba a asesinato y el robo con mano armada. El 1 de febrero después de declararse culpable de nueve delitos que podría ocasionarle estar en la cárcel 47 años, decidió delatar a varios miembros de la pandilla, lo que hizo que bajase mucho la condena y se quedase en solo 2 años.</p>
		<div class="anuncio">
				<script type="application/javascript">
		    var ad_idzone = "3870962",
		    ad_width = "300",
		    ad_height = "250"
		</script>
		<script type="application/javascript" src="https://a.exdynsrv.com/ads.js"></script>
		<noscript>
		    <iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3870962&output=noscript&type=300x250" width="300" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
		</noscript>			
		</div>
		
		<p class="textonoticias">Mucho antes de esto, Tekashi colaboró con Anuel en la canción BEBE, donde su fama se disparó al colaborar con un rapero tan conocido como es Anuel AA. En una entrevista donde preguntaron a Anuel AA si mantenía la amistad con Tekashi este dijo que no.</p>
		<iframe class="fotosnoticias" width="560" height="315" src="https://www.youtube.com/embed/ycV6cnK3SIs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<p class="textonoticias">Hace relativamente poco Tekashi salió de la cárcel para no contraer el Covid-19, ya que se podría complicar por su enfermedad respiratoria, nada más salió se gastó casi un millón de dolares en un collar donde podemos apreciar el tiburon de Buscando a nemo.</p>
		<img class="fotosnoticias" src="img/colgantetekashi.jpg">
		<p class="textonoticias">Grabó una canción llamada Gooba que está teniendo un éxito extraordinario en YouTube donde presume de su nuevo collar y de su dinero.</p>
		<iframe class="fotosnoticias" width="560" height="315" src="https://www.youtube.com/embed/pPw_izFr5PA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<div class="anuncio">
				<script type="application/javascript">
		    var ad_idzone = "3870962",
		    ad_width = "300",
		    ad_height = "250"
		</script>
		<script type="application/javascript" src="https://a.exdynsrv.com/ads.js"></script>
		<noscript>
		    <iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3870962&output=noscript&type=300x250" width="300" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
		</noscript>			
		</div>
		
	<div id="newsletter2">
		<form method="post" action="">
			<input type="email" placeholder="Correo electrónico" name="correo">
			<p>Se enviará un correo de confirmación a su correo, enviando este formulario da por hecho el aceptar las condiciones legales, como políticas y la suscripción a nuestra newsletter, una vez enviado tendrá acceso a todos los artículos ocultos de nuestra web.</p>
			<input type="submit" value="Enviar">
		</form>
	</div>
	<button id="botonvermas" onclick="mostrarnoticia()">Continuar leyendo</button>
	<div class="flechas">
		<button onclick="location.href='pabloiglesias-sin-coleta.php'">Atrás</button>
		<button onclick="location.href='auron-quema-libros.php'">Siguiente</button>
	</div>
		<div class="compartirredessociales">
			<a href="https://www.facebook.com/sharer/sharer.php?u=https://www.newsbad.es/noticias/paliza-tekashi.php"><img src="../img/facebook.png"></a>
			<a href="https://twitter.com/home?status=https://www.newsbad.es/noticias/paliza-tekashi.php NewsBad: Brutal paliza a Tekashi 6ix9ine."><img src="../img/twitter.png"./a>
			<a href="https://api.whatsapp.com/send?text=NewsBad:%20Brutal%20paliza%20a%20Tekashi%206ix9ine%20https://www.newsbad.es/noticias/paliza-tekashi.php"><img src="../img/whatsapp.png"></a>
		</div>
	</div>
	<?php include "../footer.php" ?>
	</body>
</html>
	<?php
}
?>