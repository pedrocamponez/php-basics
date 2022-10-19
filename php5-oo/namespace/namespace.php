<?php
//Recurso adicionado para conseguir encapsular classes, constantes, funções, dentro de um grupo pra que você consiga usar classes
//com o mesmo nome dentro de uma aplicação
//facilita o autoload, em vez de dar require no arquivo, eu posso só instanciar a classe com o namespace

require 'classe1.php';
require 'classe2.php';

$a = new classe1\MinhaClasse(); //como tenho 2 classes no require que possuem o mesmo nome e a mesma função, preciso dar um namespace
echo $a->testar(); //se eu tentar rodar esse código, vai dar erro porque uma classe não pode ser declarada em cima de outra

$a = new classe2\MinhaClasse();
echo $a->testar();