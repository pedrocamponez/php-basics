<?php
// $array = range('a', 'g', ); // range() = função do php que cria um array já com os elementos que definimos nos parâmetros
                               // muito útil para fazer sequenciamento (de 1 a 10, de 1 a 30, etc).

// foreach($array as $item) { //faz um loop mostrando os itens do array na variável $item
//     echo $item."<br/>";
// }

// $array = [
//     'nome' => 'Pedro',
//     'idade' => 26,
//     'empresa' => 'B7Web',
//     'cor' => 'Vermelho',
//     'profissao' => 'Fazedor de bolo'
// ];

// $chaves = array_keys($array);
// $valores = array_values($array);

// if(key_exists('idade', $array)) { // a key_exists() verifica se aquela chave (idade) existe na array ($array) - retorna true/false
//     $idade = $array['idade'];
//     echo $idade. " anos.";
// } else {
//     echo 'Não tem idade.';
// }

// $keys = array_keys($array); // array_keys() vai criar outro array apenas com as chaves (no caso 'nome', 'idade', 'empresa', etc)
// $values = array_values($array); //array_values() vai criar outro array apenas com os valores (no caso 'Pedro', '26', 'B7Web', etc)
// basicamente as duas separam o array em dois arrays diferentes.

// Exercício: montar uma tabela vertical

?>
<table border="1">
    <?php foreach($array as $chave => $valor): ?>
        <tr>
            <th><?php echo $chave; ?></th>
            <td><?php echo $valor; ?></td>
        </tr>
</table>

<hr>
<!-- Exercício: montar uma tabela horizontal -->

<table border="1">
    <tr>
        <?php foreach($chaves as $chave): ?>
            <th><?php echo $chave; ?></th>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach($valores as $valor): ?>
            <td><?php echo $valor; ?></td>
        <?php endforeach; ?>
    </tr>
</table>