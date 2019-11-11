<?php
session_start();

if(empty($_SESSION['auth'])){
    header('Location: login.php');
}

IF(!empty($_POST['logout'])){
    session_destroy();
    header('Location: login.pho');
}
?>

<meta charset="utf-8">
<form class="" action="" method="post">
    <input type="submit" name="logout" value="ログアウト">
</form>