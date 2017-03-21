<?php
//Reflected XSS Example
$param = $_GET['valley'];
$forbidden = ['prompt'];
$last = str_replace($forbidden, '', $param);
?>

<html>
<title>Let the game begin!</title>
<body>
Go to the valley!

<?php echo $last; ?>


</body>
</html>
