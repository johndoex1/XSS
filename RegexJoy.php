<?php
//Reflected XSS Example
$param = $_GET['valley'];
$pattern = '/<>/';
$replacement = '';
$last = preg_replace($pattern, $replacement, $param);
?>

<html>
<title>Let the game begin!</title>
<body>
Go to the valley!

<?php echo $last; ?>


</body>
</html>

