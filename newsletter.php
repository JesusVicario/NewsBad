<?php 
include "conn.php";
$email = $_POST["correo"];

$sql = "INSERT INTO newsletter (id, email)
VALUES ('', '$email');";
if ($conn->query($sql)) {
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Confirmación NewsLetter</title>
		<script type="text/javascript">
			alert("Registrado correctamente");
		</script>
	</head>
	<body onload="location.href='https://www.newsbad.es'">
	
	</body>
	</html>
	<?php
} else {
	echo "no";
}
?>