<?php
require 'config.php';
require 'dao/UserDaoMysql.php';

$userDao = new UserDaoMysql($pdo);

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($name && $email) {

    if($userDao->findByEmail($email) === false)
    {
        $newUser = new User();
        $newUser->setName($name);
        $newUser->setEmail($email);

        $userDao->add( $newUser );
        header("Location: index.php");
        exit;
    } else {
        header("Location: add_user.php");
        exit;
    }
}

//verificando se os dados já existem pra não duplicar
//     $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
//     $sql->bindValue(':email', $email);
//     $sql->execute();

//     if($sql->rowCount() === 0) { //se o número de colunas na execução acima for 0, ou seja, não tem o e-mail, segue

        //fazendo a inserção de um dado
//         $sql = $pdo->prepare("INSERT INTO usuarios (name, email) VALUES (:name, :email)");
//         $sql->bindValue(':name', $name); // BindValue associando o valor que eu mandei na variável $name ao :name
//         $sql->bindValue(':email', $email); //BindParam associando o próprio parâmetro, a variável e-mail mesmo

        //se eu trocar a váriavel $email agora com $email = 'teste@teste.com'; ele vai trocar ali em cima também (se usar BindParam)

//         $sql->execute();

//         header("Location: index.php");
//         exit;
//     } else {
//         header("Location: adicionar.php");
//     }
// } else {
//     header("Location: adicionar.php");
//     exit;
// }