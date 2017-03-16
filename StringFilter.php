<!DOCTYPE html>
<html>
<head>
	<title>Let the game begin!</title>
</head>
<body>

<?php
$str = $_GET['valley'];
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
?>
You are the one in the valley!
</body>
</html>
