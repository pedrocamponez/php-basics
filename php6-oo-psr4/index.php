<?php
require 'autoload.php'; //crio o arquivo autoload, configuro lá e dou esse único require aqui, e acabou!!!!

use \matematica\Basica;

$m = new Basica();
echo $m->somar(10, 20);