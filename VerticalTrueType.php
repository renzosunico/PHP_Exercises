<?php

    header("Content-Type: image/png");

    $image = imagecreate(70, 350);
    $white = imagecolorallocate($image, 255, 255, 255);
    $black = imagecolorallocate($image, 0, 0, 0);

    putenv("GDFONTPATH=" . realpath('.'));
        

    imagettftext($image, 20, 270, 28, 10, $black , 'courbi', 'Courier True Type');

    imagepng($image);

?>