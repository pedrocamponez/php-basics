<?php
$senha = '1234';

$hash = password_hash($senha, PASSWORD_DEFAULT); //o hash é utilizado para encriptar a senha, passando a senha e o password_default
//cada atualização gera um novo hash graças ao password_default

echo $hash;