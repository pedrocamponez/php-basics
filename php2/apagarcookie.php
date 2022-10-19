<?php
//basicamente setar o cookie com um tempo no passado, e ele será apagado
setcookie('nome', '', time() - 36000);

header("Location: index.php");
exit;