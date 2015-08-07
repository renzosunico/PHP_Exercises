<?php
    header("Content-Type: image/png");
    parse_str($_SERVER['REDIRECT_QUERY_STRING']);
    $cacheDir = "/buttons/";
    $url = $_SERVER['REDIRECT_URL'];

    $extension = substr($url, strrpos($url, '.'));

    $file = substr($url, strlen($cacheDir), -strlen($extension)); 
    $file = str_replace('..', '', $file);

    $text = urldecode($file);
    $font = "times";
    $path = "/tmp/buttons";
    $image = imagecreatefrompng("button.png");
    $black = imagecolorallocate($image, 0, 0, 0);

    if ($text) {
        $tsize = imagettfbbox($size, 0, $font, $text);
        $dx = abs($tsize[2] - $tsize[0]);
        $dy = abs($tsize[5] - $tsize[3]);
        $x = (imagesx($image) - $dx ) / 2;
        $y = (imagesy($image) - $dy ) / 2 + $dy;

        imagettftext($image, $size, 0, $x, $y, $black, $font, $text);
    }

    imagepng($image, "{$_SERVER['DOCUMENT_ROOT']}{$cacheDir}{$file}.png");
    imagepng($image);
?>