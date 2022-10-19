<?php
$pdo = new PDO("mysql:dbname=b7web;host=localhost", "root", ""); //estabelecendo a conexão com o banco através do PDO

$sql = $pdo->query('SELECT * FROM usuarios'); //para fazer consultas (query) ao banco de dados, usa essa funçãozinha

echo 'TOTAL: '.$sql->rowCount(); //contagem de quantos itens tem

$dados = $sql->fetchAll( PDO::FETCH_ASSOC ); //FETCH_ASSOC remove a duplicação dos dados, e o fetchAll é para pegar todos os dados

echo '<pre>';
print_r($dados);