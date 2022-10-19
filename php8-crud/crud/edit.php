<?php
require 'config.php';
require 'dao/UserDaoMysql.php';

$userDao = new UserDaoMysql($pdo);

$user = false;
$id = filter_input(INPUT_GET, 'id');
if($id) 
{
    $user = $userDao->findById($id);
}
if($user === false)
{
    header("Location: index.php");
    exit;
}
?>

<h1>Edit user</h1>

<form method="POST" action="edit_user_action.php">
    <input type="hidden" name="id" value="<?=$user->getId();?>" />
    <label>
        Nome:<br/>
        <input type="text" name="name" value="<?=$user->getName();?>" />
    </label><br/><br/>
    <label>
        E-mail:<br/>
        <input type="email" name="email" value="<?=$user->getEmail();?>" />
    </label><br/><br/>

    <input type="submit" value="Save" />
</form>

<?php
// $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
//     $sql->bindValue(':id', $id);
//     $sql->execute();

//     if($sql->rowCount() > 0) {

//         $info = $sql->fetch( PDO::FETCH_ASSOC ); //sem All no fetch pois quero apenas o nome ou id

//     } else {
//         header("Location: index.php");
//         exit;
//     }

// } else {
//     header("Location: index.php");
//     exit;
// } 
?>