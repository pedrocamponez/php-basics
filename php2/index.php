<?php
session_start(); // comando para inciar uma sessão e consequentemente salvar alguns dados nessa sessão - enquanto o navegador está 
                 //aberto
require('header.php');

if($_SESSION['aviso']) {
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = ''; // para limpar o aviso
}

?>

<a href="apagarcookie.php">Apagar Cookie</a>

<form method="POST" action="recebedor.php">

    <label>
        Nome:
        <br/>
        <input type="text" name="nome" />
    </label>
    <br/>
    <br/>

    <label>
        E-mail:
        <br/>
        <input type="text" name="email" />
    </label>
    <br/>
    <br/>

    <label>
        Idade:
        <br/>
        <input type="text" name="idade" />
    </label>
    <br/>
    <br/>

    <input type="submit" value="Enviar" />

</form>