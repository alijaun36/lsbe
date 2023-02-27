<?php
session_start();
$cdTxt = rand(1000,9999);
$_SESSION["codeTxt"] = $cdTxt;
$im = imagecreatetruecolor(50, 24);
$bg = imagecolorallocate($im, 22, 86, 165);
$fg = imagecolorallocate($im, 255, 255, 255);
imagefill($im, 0, 0, $bg);
imagestring($im, 5, 5, 5,  $cdTxt, $fg);
header("Cache-Control: no-cache, must-revalidate");
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>