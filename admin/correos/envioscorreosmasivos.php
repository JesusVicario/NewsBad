	<?php 
	include "../../conn.php";
	include "../../vendor/autoload.php";
	use PHPMailer\PHPMailer\PHPMailer;
	$sql = "SELECT * FROM mensajespendientesenvio";
	$tabla2 = $conn->query($sql);
	$contar = "0";
 	$filas = mysqli_num_rows($tabla2);
	header('Content-type:text/html; charset=utf-8');
 	if ($filas > 150) {
 		while ($row = mysqli_fetch_assoc($tabla2)) {
 			$correo = new PHPMailer();
 			$correo->setFrom ('noreply@newsbad.es', 'NewsBad');
 			$correo->Subject = $row["asunto"];
 			$correo->Body = $row["mensaje"];
 			$correo->isHTML(true);
 			$correo->addAddress(utf8_decode($row["correo"]));
 			$id = $row["id"];

 				if ($correo->send()) {
 					$sql = "DELETE FROM mensajespendientesenvio WHERE id = $id";
 					sleep(2);

 					if ($conn->query($sql)) {
 						$contar++;
 							if ($contar == 150) {
 								break;
 								}
 					}
 				}
 		}

 	} else {
 		 	while ($row = mysqli_fetch_assoc($tabla2)) {
 			$correo = new PHPMailer();
 			$correo->setFrom ('noreply@newsbad.es', 'NewsBad');
 			$correo->Subject = $row["asunto"];
 			$correo->Body = $row["mensaje"];
 			$correo->isHTML(true);
 			$correo->addAddress($row["correo"]);
 			$id = $row["id"];
 				if ($correo->send()) {
 					sleep(2);
 					$sql = "DELETE FROM mensajespendientesenvio WHERE id = $id";
 					$conn->query($sql);
 				}
 		}
 	}

?>