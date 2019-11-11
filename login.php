<?php
if(!empty($_POST['send'])){
    $_SESSION['auth'] = 1;
    header('Location: login_after.php');
    exit;
}
?>

<meta charset="utf-8">
<form class="" action="" method="post">
    <label >ログインID</label>
    <input type="text" name="id" value=""><br>
    <label >パスワード</label>
    <input type="password" name="pass" value=""><br>
    <input type="submit" name="send" value="送信">
</form>