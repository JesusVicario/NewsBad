<?php 
include "../../conn.php";
$sql = "SELECT email FROM newsletter";
$tabla2 = $conn->query($sql);
$contar = 0;
$asunto = "Internet se cae por culpa del coronavirus";
$mensaje = "<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style=display: flex;justify-content: center;flex-direction: column;>
	<a href=https://www.newsbad.es><img alt=Internet podría caer por el uso irracional por el confinamiento style=width: 100%;height: 98%; src=https://www.newsbad.es/admin/correos/correos.png></a>
	<a style=text-decoration: none;color:#A9A9A9;text-align: center; href=https://www.newsbad.es/admin/correos/quitarnewsletter.php>No quiero más correos de NewsBad</a>
</body>
</html>";

while ($row = mysqli_fetch_assoc($tabla2)) {
if ($contar < "535") {
	$contar++;
	$mail = $row["email"];
	$sql2 = "INSERT INTO mensajespendientesenvio (asunto, mensaje, correo)
	VALUES ('$asunto', '$mensaje', '$mail')";
	$conn->query($sql2);
}
}
?>