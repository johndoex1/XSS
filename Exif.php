<html>
<head>
<title>Hello sweetie</title>
</head>

<body>

<?php
$file = "bu.jpg";
$black = imagecolorallocate($file, 0x00, 0x00, 0x00);
$font_file = 'Vera.ttf';
array imagefttext($file, 13, 0, 105, 55, $black, $font_file, '<script>alert(1)</script>'); 
$exif = exif_read_data($file, "COMMENT");
  foreach ($exif as $key => $section) {
    foreach ($section as $name => $val) {
    echo "$key.$name: $val\n";
    }
  }
?>
<?php echo $_GET['find']; ?>
  
</body>
</html>


