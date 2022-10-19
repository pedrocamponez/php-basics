<?php
$numeros = [1, 2, 3, 4, 5];

function somar($subtotal, $item) {
    $subtotal += $item;
    return $subtotal;
}

$total = array_reduce($numeros, 'somar'); //o reduce vai iterar por cada item do array e somá-los por causa da função

$pessoas = [
    ['nome' => 'Fulano', 'sexo' => 'M', 'nota' => 9],
    ['nome' => 'Ciclano', 'sexo' => 'M', 'nota' => 7],
    ['nome' => 'Beltrana', 'sexo' => 'F', 'nota' => 10],
    ['nome' => 'Paulo', 'sexo' => 'M', 'nota' => 8],
    ['nome' => 'Cintia', 'sexo' => 'F', 'nota' => 9],
    ['nome' => 'Jessica', 'sexo' => 'F', 'nota' => 9]
];

//Total de homens
function contar_m($subtotal, $item) {
    if($item['sexo'] === 'M') {
        $subtotal++;
    }
    return $subtotal;
}

$total_m = array_reduce($pessoas, 'contar_m');

//Soma das notas dos homens
function soma_m($subtotal, $item) {
    if($item['sexo'] === 'M') {
        $subtotal += $item['nota'];
    }
    return $subtotal;
}

$soma_m = array_reduce($pessoas, 'soma_m')

//Média das notas dos homens
$media_m = $soma_m / $total_m;