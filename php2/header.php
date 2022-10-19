<h2>Olá</h2>
<?php
if(isset($_COOKIE['nome'])) { //isset para verificar se a variável está setada, pra nao dar erro
    $nome = $_COOKIE['nome']; //salvando o cookie em uma variável
    echo '<h2> Bem-vindo, '.$nome.'</h2>'; //exibindo o cookie na tela
}
?>

<hr/>