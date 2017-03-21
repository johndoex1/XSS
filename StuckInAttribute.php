<html>
<title>Let the game begin!</title>
<body>
<!--Reflected XSS Example -->

You are the one in the valley!

<input name="test" value="<?php echo $_GET['valley'];?>">
<input type="submit" value="XSS Buton">
</body>
</html>

