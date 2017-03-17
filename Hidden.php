<html>
<title>Let the game begin!</title>
<body>
<?php
$find=$_GET['find'];
$block=array(alert,prompt,script,img,textarea,plaintext,svg,iframe);
$last= str_replace($block, '', $find) ;
$new=htmlspecialchars($last,ENT_NOQUOTES);
?>

Find the hidden miracle!
<input name="test" type="hidden" value="<?php echo $new; ?>">
</body>
</html>
