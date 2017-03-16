<!DOCTYPE html>
<html>
<head>
	<title>Let the game begin!</title>
</head>
<body>
You are the special one in the valley!
<?php
$str = $_GET['valley'];
echo htmlspecialchars($str);
//& (ampersand) becomes &amp;
//" (double quote) becomes &quot;
//' (single quote) becomes &#039;
//< (less than) becomes &lt;
//> (greater than) becomes &gt;
?>
<a href= "<?php echo $str?>">Here</a>
</body>
</html>


