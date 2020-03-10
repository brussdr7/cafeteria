<?php
var_dump($_POST);

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];

// echo $nombre;
// echo $email;
// echo $asunto;

if(mail('brunodr007@gmail.com', $nombre, $email)) {
	echo "email enviado";
}else {
	echo "email no enviado";
}
?>