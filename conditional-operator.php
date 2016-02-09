<html>

<head></head>

<body>

<?php
$url = "http://bbc.co.uk";
$linktext = "BBC website";
?>

<a href="<?php echo $url; ?>"><?php echo $linktext ? $linktext : $url; ?></a>

</body>
</html>
