<?php
require 'config.php';
require 'dao/UserDaoMysql.php';

$userDao = new UserDaoMysql($pdo);

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($id && $name && $email) 
{
    $user = new User();
    $user->setId($id);
    $user->setName($name);
    $user->setEmail($email);

    $userDao->update($user);    

    header("Location: index.php");

} else {
    header("Location: edit.php?id=".$id);
    exit;
}

//query de atualizar: UPDATE usuarios SET name = '...', email = '...' WHERE id = '...'
//    $sql = $pdo->prepare("UPDATE usuarios SET name = :name, email = :email WHERE id = :id");
//    $sql->bindValue(':id', $id);
//    $sql->bindValue(':name', $name);
//    $sql->bindValue(':email', $email);
//    $sql->execute();