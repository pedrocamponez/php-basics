<?php //CRIANDO UM FILTRO PARA A IMAGEM ENVIADA (UPLOAD DE ARQUIVOS)
echo '<pre>';
print_r( $_FILES );

$permitidos = ['image/jpeg', 'image/jpg', 'image/png'];

if(in_array($_FILES['arquivo']['type'], $permitidos)) {
    
    $nome = md5(time().rand(0, 1000)).'.jpg'; //criando nomes aleatórios para o arquivo
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$nome);

    echo 'Arquivo salvo com sucesso';
} else {
    echo 'Arquivo com extensão não permitida';
}