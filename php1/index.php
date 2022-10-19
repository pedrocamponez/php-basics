<?php

// loop for:
/*
 for($i = 0; $i < count($ingredientes); $i++)
    echo $ingredientes[$i]."\n";
*/


// Array 

/*
$lista = [
    'nome' => "Pedro", 
    'idade' => 90, 
    'atributos' => [
        'forca' => 60,
        'agilidade' => 80,
        'destreza' => 50
    ], 
    'vida' => 1000, 
    'mana' => 928
];

echo "Nome: ".$lista['nome']."<br/>";
echo "Força: ".$lista['atributos']['forca']."<br/>";
echo "Vida: ".$lista['vida']; */


// if statement 

/*
$idade = 19;

if($idade < 18) {echo 'Menor de idade';} 
else if($idade === 18) {echo 'Acabou de virar maior de idade!';} 
else {echo 'Maior de idade';} 


OPERADOR TERNÁRIO

$resultado = ($idade < 18) ? 'Menor de idade' : 'Maior de idade';
$menorDeIdade = ($idade < 18) ? true : false; */


// Condicional NULL CAO 

/* 
$nome = 'Pedro';
$sobrenome = 'Camponez';

$nomeCompleto = $nome ?? 'Visitante';
$nomeCompleto .= isset($sobrenome) ? $sobrenome : ''; // => Se sobrenome existir, use sobrenome. Caso contrário, use ''
$nomeCompleto .=$sobrenome ?? '';   // => essa é a versão NULL CAO do código da linha acima. Uma interrogação é: true, a segunda
                                    interrogação significa: use a variável aqui.

echo $nomeCompleto; */


// Operador Switch


//sem o switch

// $tipo = 'foto';

// if($tipo == 'foto') {
//     echo 'Exibindo uma foto';
// }
// if($tipo == 'video') {
//     echo 'Exibindo um vídeo';
// }
// if($tipo == 'texto') {
//     echo 'Exibindo um texto';
// }


//com o switch

// $tipo = 'texto';

// switch($tipo) {
//     case 'foto':
//         echo 'Exibindo FOTO';
//         break;
//     case 'video':
//         echo 'Exibindo VÍDEO';
//         break;
//     case 'texto':
//         echo 'Exibindo TEXTO';
//         break;
// }


//loop for

// for($numero = 0; $numero < 10; $numero++) {
//     echo "N: ".$numero."<br/>";
// }


// Simplificando:

// for($i=0;$i<10;$i++) {
//     echo $i.'<br/>';
// }


//loop foreach (para trabalhar com arrays)

// $ingredientes = [
//     'açucar',
//     'farinha de trigo',
//     'ovo',
//     'leite',
//     'fermento em pó'
// ];

// foreach($ingredientes as $key => $ingrediente) {
//     echo 'Ingrediente '.($key+1).': '.$ingrediente.'<br/>';
// }


//Exercício prático: fazer ---------

// for($i=0;$i<20;$i++) {
//     echo '<br>';
//     for($n=0;$n<=$i;$n++) {
//         echo '-';
//     }
// }


// Funções


// function somar(int $n1, int $n2, int $n3=0) {
//     $total = $n1 + $n2 + $n3;
//     return $total;
// }

// $x = somar(1, 5, 8);
// $y = somar(3, 8);
// $w = somar($x, $y);

// echo $w;


// Passando referência para o parâmetro

// function somar(int $n1, int $n2, &$total) {
//     $total = $n1 + $n2;
// }

// $x = 3;
// $y = 2;
// $soma = 0;

// somar($x, $y, $soma);

// echo "Total: ".$soma;


// FUNÇÃO ANÔNIMA

// duas formas: armazenando elas dentro de uma variável, ou como parâmetro para outra função.

// $dizimo = function(int $valor) {
//     return $valor * 0.1;
// };

// $funcao = $dizimo;

// echo $funcao(82);

// uma utilidade:

// funcaoQualquer(10, function(){
//     qualquer coisa que a função faça com o parâmetro passado
// })


// ARROW FUNCTION

// $dizimo = fn($valor) => $valor * 0.1;
// echo $dizimo(120);

// $somar = fn(int $n1, int $n2 = 0) => $n1+$n2;


// FUNÇÃO RECURSIVA

// function dividir($numero) {
//     $metade = $numero / 2;
//     echo $metade."<br/>";

//     if(round($metade) > 0) {
//         dividir($metade);
//     }
// }

// dividir(100);


// FUNÇÕES NATIVAS ARRAY

// $lista = ['nome', 'nome2', 'nome3', 'nome4', 'nome5'];
// $aprovados = ['nome1', 'nome2', 'nome5'];

// echo 'Total: ' .count($lista); //.count conta quantos elementos tem no array
// $reprovados = array_diff($lista, $aprovados); // array_diff mostra quem são os elementos da array 1 que não estão na array 2

// $numeros = [10, 20, 42, 39, 62, 18];

// $filtrados = array_filter($numeros, function($item){ //array_filter filtra os números da array
//     if($item<30) {
//         return true;
//     } else {
//         return false;
//     }
// });

// $dobrados = array_map(function($item){ //array_map faz uma varredura na array para realizar alguma função (nesse caso, dobrar os valores)
//     return $item * 2;
// }, $numeros);

// array_pop($numeros); // array_pop vai remover o último elemento do array
// array_shift($numeros); // array_shift vai remover o primeiro elemento do array

// if(in_array(18, $numeros)){ // in_array buscar um elemento dentro da função - substitui o loop for e foreach
//     echo 'EXISTE';
// } else {
//     echo 'NÃO EXISTE';
// }

// $pos = array_search(18, $numeros); //array_search é similar ao in_array, mas esse vai retornar se tem o item e qual é a posição dele dentro da array
// sort($numeros); // sort ordena os números em ordem crescente
// rsort($numeros); // rsort ordena os números em ordem decrescente
// asort($numeros); // ordena em ordem crescente porém não altera o index da array
// arsort($numeros); // ordena em ordem decrescente porém não altera o index da array
// explode(' ', $lista); //transforma uma string em array
// implode(' ', $numeros); //transforma uma array em uma string


// FUNÇÕES NATIVAS PARA DATA E HORA

// date('Y-m-d H:i:s'); //parâmetros passados para especificar como quero a data e hora

// $date = '2022-09-26';
// $time = strtotime($date); //transforma uma data STRING para tempo.
// date('d / m / Y', strtotime($date)); // formata a data como eu especificar no primeiro parâmetro

// função pra receber 2020-01-03 mandar a String para a função falar o dia da semana em português

// $data = '2022/09/26';
// setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
// date_default_timezone_set('America/Sao_Paulo');
// $data_atual = strftime('%A, %d de %B de %Y', strtotime($data));
// echo $data_atual;


// TRABALHAR COM VÁRIOS ARQUIVOS DIFERENTES

// include('inexistente.php'); // o include puxa outro arquivo (na mesma pasta), mas se ele não existir, ele avisa mas continua a execução
// require('config.php'); // já o require, se o arquivo não existir, ele avisa o erro e não executa o resto do código
// require_once('header.php'); // require_once só puxa o arquivo uma vez, mesmo se tiver outra requisição

// echo 'Nome de usuário: '.$usuario;


//TRABALHAR COM PASTAS DIFERENTES

// require('./template/header.php');