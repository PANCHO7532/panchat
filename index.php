<html>
<head>
<title>Home - Panchat</title>
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
<p><b>Message: </b><input type="text" name="data" value=""/><input type="submit" value="Send"/></p>
<p><a href="delete.php">Delete chat</a> | <a href="login.php">Mod Panel</a> | <a href="settings.php">Settings</a> | <a href="about.html">About</a>
</fieldset>
</form>
</body>
</html>