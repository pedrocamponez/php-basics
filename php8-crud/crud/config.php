<?php
$db_name = 'b7web';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass); //estabelecendo a conexão com o banco através do PDO