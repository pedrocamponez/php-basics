<?php
$array = ['a', 'b', 'c', 'd', 'e', 'f'];

$retorno = array_slice($array, 0, 2); //cria um novo array com os itens do array original
//os parametros são: array original, de qual index começar, e quantos elementos pegar (nesse caso, pega 2 elementos, 'a' e 'b')
//no caso de parâmetro negativo (ex: array_slice($array, -2, 2)), ele começa do final