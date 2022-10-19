<?php
$file = 'background-contato-form.png';
$width = 300;
$height = 300;

list($originalWidth, $originalHeight) = getimagesize($file);

$ratio = $originalWidth / $originalHeight;
$ratioDest = $width / $height;

$finalWidth = 0;
$finalHeight = 0;
$finalX = 0;
$finalY = 0;

if($ratioDest > $ratio) //significa que é mais larga do que alta
{
    $finalWidth = $height * $ratio;
    $finalHeight = $height;

    $finalY = -(($finalHeight - $height) / 2);
} else 
{ //significa que é mais alta do que larga
    $finalHeight = $width * $ratio; 
    $finalWidth = $width;

    $finalX = -(($finalWidth - $width) / 2); //o negativo para puxar a foto, e a conta para centralizar a imagem cortada
}

if($finalWidth < $width)
{
    $finalWidth = $width;
    $finalHeight = $width / $ratio;
} else
{
    $finalHeight = $height;
    $finalWidth = $height / $ratio;
}

$image = imagecreatetruecolor($width, $height);
$originalImg = imagecreatefrompng($file);

imagecopyresampled(
    $image, 
    $originalImg, 
    $finalX, $finalY, 0, 0, 
    $finalWidth, 
    $finalHeight, 
    $originalWidth, 
    $originalHeight
);

imagepng($image, 'background_novo.png');