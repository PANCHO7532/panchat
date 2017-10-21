<?php
//Delete function. This file delete the entire chat and generates a new clean DB file (txt)
$archivo = "data.txt";
unlink($archivo);
$a1 = fopen($archivo, "a");
fwrite($a1, "<?php");
fwrite($a1, "\r\n");
fclose($a1);
header("Location: index.php");
?>
