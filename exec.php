<?php
//EXEC Core function of Panchat, here the major actions pass by this file
//1. Collecting data:
$author = $_POST["author"];
$data = $_POST["data"];
//Saving an cookie with the nickname, you can see the function later :3
setcookie('author', $author, time()+36000);
//Exceptions:
//Here it is by default, if one condition its true, the message cannot reach to submit in DB.
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
//Writing data to DB txt
$archivo = "data.txt";
$archivo = fopen($archivo, 'a');
fwrite($archivo, "echo '<br>".$author."(".$_SERVER['REMOTE_ADDR'].")".": ".$data."</br>';\r\n");
fwrite($archivo, "\r\n");
fclose($archivo);
//Redirecting to the main page
header("Location: index.php");
?> 
