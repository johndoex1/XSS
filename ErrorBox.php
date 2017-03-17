<!DOCTYPE html>
<html>
<head>
	<title>Let the game begin!</title>
</head>
<body>
This is the second exercise on XSS, enjoy it!

<?php echo $_GET['valley']; /*only one character is filtered*/  
if (strpos($_GET['valley'], '<') !== false) { 
	echo "<script>alert('Step back!')</script>";
} 
?>
</body>
</html>

