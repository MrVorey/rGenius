<?php
$server = 'localhost';
$user = 'f0468182_rgenius';
$password = 'sosiska@V@teste';
$db = 'f0468182_rgenius';
$dblink = mysqli_connect($server, $user, $password, $db);
session_start();
$login = $_POST['username'];
$password = $_POST['password'];

if (!$dblink) {
    die("Connection failed: " . mysqli_connect_error());
} 
else{

        $pass = mysqli_query($dblink, "SELECT `user_password` FROM `users` WHERE `user_login`='$login'") -> fetch_assoc()['user_password'];
    if($pass == $_POST['password']){
        $name = mysqli_query($dblink, "SELECT `user_name` FROM `users` WHERE `user_login`='$login'") -> fetch_assoc()['user_name'];
        $role = mysqli_query($dblink, "SELECT `user_prava` FROM `users` WHERE `user_login`='$login'") -> fetch_assoc()['user_prava'];
        $image = mysqli_query($dblink, "SELECT `user_image` FROM `users` WHERE `user_login`='$login'") -> fetch_assoc()['user_image'];
        if($name != NULL){
            $_SESSION['name'] = $name;
            $_SESSION["is_name"] = true;
        }
        else{
            $_SESSION['name'] = null;
            $_SESSION["is_name"] = false;
        }
        print('Авторизация успешна');
        $_SESSION["is_auth"] = true;
        $_SESSION['role'] = $role;
        $_SESSION['image'] = $image;
        $_SESSION['login'] = $_POST['username'];
        header('Location: http://f0468182.xsph.ru/index.php');
    }
    else{
        print('Неверный пароль!');
    }
    
   
}    

?>