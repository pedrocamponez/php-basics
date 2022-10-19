<?php
$image = imagecreatetruecolor(300, 300);

$cor = imagecolorallocate($image, 255, 0, 0);
imagefill($image, 0, 0, $cor);

//header("Content-Type: image/jpeg"); //faz o arquivo gerar uma imagem, não pode ter echo, nem nada, apenas a imagem na tela
//imagejpeg($image, null, 100); //gerar a imagem, onde salvar a imagem (null despeja na tela apenas) e qualidade (de 0 a 100)
imagejpeg($image, 'new_image.jpg', 100); //esse código, em vez de mostrar na tela, cria a imagem na pasta