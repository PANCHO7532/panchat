<?php
include 'config_auth.php';
$srvloc = $_SERVER['REMOTE_ADDR'];
include ($filedbcls);
$archivo = $filedb;
unlink($archivo);
$a1 = fopen($archivo, "a");
fwrite($a1, "<?php");
fwrite($a1, "\r\n");
fclose($a1);
header("Location: index.php");
?>