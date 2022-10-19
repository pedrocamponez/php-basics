<?php
$file = 'background-contato-form.png';
$maxWidth = 200;
$maxHeight = 200;

list($originalWidth, $originalHeight) = getimagesize($file);

$ratio = $originalWidth / $originalHeight;
$ratioDest = $maxWidth / $maxHeight;

$finalWidth = 0;
$finalHeight = 0;

if($ratioDest > $ratio) //significa que é mais larga do que alta
{
    $finalWidth = $maxHeight * $ratio;
    $finalHeight = $maxHeight;
} else 
{ //significa que é mais alta do que larga
    $finalHeight = $maxWidth * $ratio; 
    $finalWidth = $maxWidth;
}

$image = imagecreatetruecolor($finalWidth, $finalHeight);
$originalImg = imagecreatefrompng($file);

imagecopyresampled(
    $image, 
    $originalImg, 
    0, 0, 0, 0, 
    $finalWidth, 
    $finalHeight, 
    $originalWidth, 
    $originalHeight
);

imagepng($image, 'background_novo.png');