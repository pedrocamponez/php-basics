<?php
$hash = '$2y$10$HQIEnVKzxUMPkHA7n78gDebWaCwVbgmOZ5km9gYL1TPyNWd//D4Qa';
$senha = '1234';

if(password_verify($senha, $hash)) //faz a verificação se o hash é equivalente a senha correta
{
    echo 'Senha correta!';
} else {
    echo 'Senha incorreta!';
}