<?php
include 'config_auth.php';
if(isset($_POST['author'])) {
	if(isset($_POST['data'])) {
		$author = $_POST["author"];
		$data = $_POST["data"];
		setcookie('author', $author, time()+36000);
	} else {
		header("Location: index.php");
		die;
	}
} else {
	header("Location: index.php");
	die;
}
//Exceptions
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
$srvloc = $_SERVER['REMOTE_ADDR'];
include $filedbbanmsj;
$htmspe = htmlspecialchars($data);
$archivo = $filedb;
$remoteaddr = $_SERVER["REMOTE_ADDR"];
$archivo = fopen($archivo, 'a');
fwrite($archivo, 'echo "<br>'.$author.'('.$remoteaddr.')'.': '.$htmspe.'</br>";');
fwrite($archivo, "\r\n");
fclose($archivo);
header("Location: index.php");
?> 