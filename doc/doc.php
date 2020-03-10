<?php
var_dump($_POST);

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];

echo $nombre."<br/>";
echo $email."<br/>";
echo $asunto."<br/>";

if(mail("brunodr007@gmail.com", $nombre, $email, $asunto)){
	echo "email enviado";
}else {
	echo "email no enviado";
}
?>