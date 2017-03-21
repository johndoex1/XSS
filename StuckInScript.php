<!DOCTYPE html>
<!--Reflected XSS Example -->
<html>
<head>
	<title>Let the game begin!</title>
	<script>
	var name = '<?php echo $_GET['valley']; ?>';
	</script>
</head>
<body>
<?php echo "Go to the valley!"?> 
</body>
</html>
