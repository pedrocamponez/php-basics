<?php
spl_autoload_register(function($class) //essa é a função autoload, em vez de dar require no arquivo, eu uso essa função
{
    if(file_exists('./classes/'.$class.'.php')) //faço uma verificação se o arquivo existe e, se existir, faz a requisição
    {
        require './classes/'.$class.'.php';
    }
});

//O IDEAL É USAR O AUTOLOAD ABAIXO PARA QUE IDENTIFIQUE SE É WINDOWS OU LINUX/MAC NA QUESTÃO DAS BARRAS

// <?php
// spl_autoload_register(function($class) //essa é a função autoload, em vez de dar require no arquivo, eu uso essa função
// {
//     $baseDir = __DIR__.'\classes\\';
//     $dirSep = DIRECTORY_SEPARATOR; // DIRECTORY_SEPARATOR pega o padrão do sistema usado
//     $file = $baseDir . $dirSep . str_replace('\\', $dirSep, $class) . '.php';
//     if(file_exists($file)) //faço uma verificação se o arquivo existe e, se existir, faz a requisição
//     {
//         require $file;
//     }
// });