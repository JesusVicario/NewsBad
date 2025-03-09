<?php 
	if (isset($_POST["correo"])) {
		$correo = $_POST["correo"];
		include "../../conn.php";
		$sql = "DELETE FROM newsletter WHERE email='$correo'";
		if ($conn->query($sql)) {
			?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Eliminado</title>
		<script type="text/javascript">
			alert("Eliminado correctamente");
		</script>
	</head>
	<body onload="location.href='https://www.newsbad.es'">
	
	</body>
	</html>
			<?php
		}
		
	} else {
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Eliminación newsletter</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link href="favicon.png" rel="icon" type="imagen/x-icon">
			<style type="text/css">
				body{
					display: flex;
					justify-content: center;
					align-items: center;
					flex-direction: column;
					background-color: #ef2c2c;
				}
				form{
					display: flex;
					flex-direction: column;
					align-items: center;
					justify-content: center;
				}
				img{
					margin-bottom: 5vw;
					width: 20%;
				}
				input{
					border-radius: 15px;
					margin:1vw;
				}
				@media screen and (max-width: 600px) {
					img{
						width: 50%;
					}
				}
			</style>
		</head>
		<body>
		<img src="../../favicon.png">
		<form action="" method="post">
			<input placeholder="Correo electrónico" type="email" name="correo">
			<input type="submit" value="Enviar">
		</form>
		</body>
		</html>
		<?php
	}
?>