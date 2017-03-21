<html>
<title>Let the game begin!</title>
<body>

<?php
  //Reflected XSS Example
$param = $_GET['valley'];
$forbidden = ['script', 'alert'];
$last = str_replace($forbidden, '', $param);
?>

You are the one in the valley!

<input name="test" value="<?php echo $last ?>">
</body>
</html>

