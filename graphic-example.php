<?php
if (isset($_GET['message'])) {
    // load font and image, calculate width of text
    $font = "/usr/share/fonts/truetype/msttcorefonts/times.ttf";
    $size = 12;
    $image = imagecreatefrompng("button.png");
    $tsize = imagettfbbox($size, 0, $font, $_GET['message']);

    // centre
    $dx = abs($tsize[2] - $tsize[0]);
    $dy = abs($tsize[5] - $tsize[3]);
    $x = (imagesx($image) - $dx) / 2;
    $y = (imagesy($image) - $dy) / 2 + $dy;

    // draw text
    $black = imagecolorallocate($im,0,0,0);
    imagettftext($image, $size, 0, $x, $y, $black, $font, $_GET['message']);

    // return image
    header("Content-type: image/png");
    imagepng($image);

    exit;
} ?>

<html>
<head>
    <title>Button form</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <label for="message">Enter message to appear on button:</label>
        <input type="text" name="message" id="message" /><br />
        <input type="submit" value="Create button" />

    </form>
</body>

</html>
