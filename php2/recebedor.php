<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS); // pega os dados enviados e salva na variável $nome e $idade
//FILTER SANITIZE SPECIAL CHARS previne o site de ataques, não sendo possível colocar códigos, apenas texto

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); // Filtro que valida se o e-mail é um e-mail

$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT); 
// FILTER_SANITIZE_NUMBER_INT Filtro que valida se o dado digitado é um número inteiro 

// filter_var para validar a variável com o dado já recebido.

if($nome && $email && $idade) {
    // setando um Cookie (só é possível setar o cookie antes da exibição de qualquer conteúdo (echo, por ex.))
    $expiraCookie = time() + (86400 * 30); //86400 é um dia.
    setcookie('nome', $nome, $expiraCookie);

    echo 'Nome: '.$nome."<br/>";
    echo 'E-mail: '.$email."<br/>";
    echo 'Idade: '.$idade;

} else {
    $_SESSION['aviso'] = 'Preencha os itens corretamente'; // essa informação será salva na sessão que foi iniciada

    header("Location: index.php"); //redirecionamento para o index.php (volta pro formulário) caso nada seja enviado.
    exit;                          // só pode ser utilizado se nada estiver sendo solicitado pela URL ainda.

}