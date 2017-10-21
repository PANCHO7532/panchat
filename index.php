<html>
<head>
<title>Chat</title>
<meta http-equiv="refresh" content="<?php if($_COOKIE['autoload5'] == 1) { echo "5"; } if($_COOKIE['autoload5'] == 2) { echo " "; } ?>"/>
</head>
<body>
<form action="exec.php" method="POST">
<fieldset>
<legend>Chat</legend>
<?php
$file = "data.txt";
include $file;
?>
<p><b>Nick: </b><input type="text" name="author" value="<?php if(isset($_COOKIE['author'])) { echo $_COOKIE['author'];} else { echo "NULL";} ?>"/></p>
<p><b>Mensaje: </b><input type="text" name="data" value=""/><input type="submit" value="Enviar"/></p>
<p><a href="delete.php">Borrar chat</a></p>
<p><a href="settings.php">Ajustes</a></p>
</fieldset>
</form>
</body>
</html>