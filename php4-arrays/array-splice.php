<?php
$array = ['a', 'b', 'c', 'd', 'e', 'f'];

array_splice($array, 1, 1); // nao cria um novo array, vai modificar o array original.
//escolhe, através dos parâmetros, qual(is) elemento(s) vão ser removidos (começa do 1, e remove 1 parâmetro)
//se não preencher o terceiro parâmetro, é dali pra frente removendo tudo
//o quarto parâmetro é o elemento que vai ser inserido no array após a remoção - podendo ser um array
array_splice($array, 2, 2, ['X', 'Z']);