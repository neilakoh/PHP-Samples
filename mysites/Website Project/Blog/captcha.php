<?php
session_start(); // Starting the session

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$test = generateRandomString();

$_SESSION["code"]=$test;
$im = imagecreatetruecolor(100, 24);
$bg = imagecolorallocate($im, 0, 92, 92); //background color blue, RGBA
$fg = imagecolorallocate($im, 255, 255, 255);//text color white
imagefill($im, 0, 0, $bg);
imagestring($im, 5, 5, 5,  $test, $fg); //padding
header("Cache-Control: no-cache, must-revalidate");
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>