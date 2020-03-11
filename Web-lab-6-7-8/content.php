<?php
session_start();
$host = '127.0.0.1';
$db = 'labs';
$user = 'root';
$password = '';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $password);

if(isset($_SESSION['security']) && $_SESSION['security'] == 126115){
    echo "Welcome, $_SESSION[name] $_SESSION[surname]!<br><br>";
    echo <<< HEREDOC
<form method="post">
    <input name="name" type="text" value="$_SESSION[name]"> Name<br> 
    <input name="surname" type="text" value="$_SESSION[surname]"> Surname<br> 
    <input name="login" type="text" value="$_SESSION[login]"> Login<br> 
    <input name="password" type="password" maxlength="20"> Password<br> 
    <input name="phone" type="text" value="$_SESSION[phone]"> Phone<br> 
    <input name="mail" type="text" value="$_SESSION[mail]"> E-mail<br><br>
    <button type="submit" formaction="content.php">UPDATE</button>
    <button type="submit" formaction="logout.php">Exit</button>
</form>
<form method="post">
    <input name="id" type="number" value="$_SESSION[id]" hidden="hidden">
    <button type="submit" formaction="sql.php">Удалить профиль</button>
</form>
HEREDOC;

    if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['login']) && isset($_POST['password']) &&
        isset($_POST['phone']) && isset($_POST['mail'])){
        $query = $pdo->query("UPDATE `web_lab678` SET `password` = '$_POST[password]' WHERE `id` = '$_SESSION[id]'");
        echo "Password was updated";
    }
}
