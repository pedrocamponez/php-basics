<?php
//CRUD

//C -> CREATE
//R -> READ - O index é o R do crud
//U -> UPDATE
//D -> DELETE

require 'config.php';
require 'dao/UserDaoMysql.php';

$userDao = new UserDaoMysql($pdo);
$lista = $userDao->findAll();
?>

<a href="add_user.php">ADD USER</a>

<table border='1' width='100%'>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>ACTIONS</th>
    </tr>
    <?php //abrindo outro php para verificar se os usuários existem e pegá-los
    foreach($lista as $user): //fechando o php para usar html e fazer a lista bonitinha ?> 
        <tr>
            <td><?=$user->getId();?></td>
            <td><?=$user->getName();?></td>
            <td><?=$user->getEmail();?></td>
            <td>
                <a href="edit.php?id=<?=$user->getId();?>">[ Edit ]</a>
                <a href="delete.php?id=<?=$user->getId();?>" onclick="return confirm('Are you sure you want to delete this user: <?=$user->getName();?>?')">[ Delete ]</a>
            </td>
        </tr>

    <?php endforeach; //abrindo outro php para encerrar o foreach ?>
</table>