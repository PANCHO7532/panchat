<?php
$author = $_POST["author"];
$data = $_POST["data"];
setcookie('author', $author, time()+36000);
if($author == '') {
	header("Location: index.php");
	die;
}
if($author == 'NULL') {
	header("Location: index.php");
	die;
}
if($data == '') {
	header("Location: index.php");
	die;
}
//include 'ban.txt';
$archivo = "data.txt";
$archivo = fopen($archivo, 'a');
fwrite($archivo, "echo '<br>".$author."(".$_SERVER['REMOTE_ADDR'].")".": ".$data."</br>';\r\n");
fwrite($archivo, "\r\n");
fclose($archivo);
header("Location: index.php");
?> 