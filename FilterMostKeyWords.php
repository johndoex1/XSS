<?php
$param = $_GET['valley'];
$forbidden = ['script', 'prompt'];
$last = str_replace($forbidden, '', $param);
?>

<html>
<title>Let the game begin!</title>
<body>
Go to the valley!

<?php echo $last; ?>


</body>
</html>

