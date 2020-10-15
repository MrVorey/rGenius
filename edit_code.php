<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
$server = 'localhost';
$user = 'f0468182_rgenius';
$password = 'sosiska@V@teste';
$db = 'f0468182_rgenius';
$dblink = mysqli_connect($server, $user, $password, $db);
session_start();
$login = $_SESSION['login'];

$newname = $_POST['editname'];
$newimg = $_POST['editimg'];
if (!$dblink) {
    die("Connection failed: " . mysqli_connect_error());
} 
else{
    if($newname == NULL){
        if($newimg == NULL){
            $_SESSION['sms_'] = true;
            $_SESSION['sms'] = "А что сохранять?)";
            $_SESSION['save'] = true;
            header('Location: http://f0468182.xsph.ru/edit.php '); 
            $name = mysqli_query($dblink, "SELECT `user_name` FROM `users` WHERE `user_login`='$login'") -> fetch_assoc()['user_name'];
            $role = mysqli_query($dblink, "SELECT `user_prava` FROM `users` WHERE `user_login`='$login'") -> fetch_assoc()['user_prava'];
            $image = mysqli_query($dblink, "SELECT `user_image` FROM `users` WHERE `user_login`='$login'") -> fetch_assoc()['user_image'];
            $_SESSION['name'] = $name;
            $_SESSION['role'] = $role;
            $_SESSION['image'] = $image;
        }
        else{
            mysqli_query($dblink, "UPDATE users SET `user_image`='$newimg' WHERE `user_login`='$login'");
            $_SESSION['sms_'] = true;
            $_SESSION['sms'] = "Изображение успешно изменено!";
            $_SESSION['save'] = true;
            header('Location: http://f0468182.xsph.ru/edit.php ');
            $name = mysqli_query($dblink, "SELECT `user_name` FROM `users` WHERE `user_login`='$login'") -> fetch_assoc()['user_name'];
            $role = mysqli_query($dblink, "SELECT `user_prava` FROM `users` WHERE `user_login`='$login'") -> fetch_assoc()['user_prava'];
            $image = mysqli_query($dblink, "SELECT `user_image` FROM `users` WHERE `user_login`='$login'") -> fetch_assoc()['user_image'];
            $_SESSION['name'] = $name;
            $_SESSION['role'] = $role;
            $_SESSION['image'] = $image;
        }
    }
    else{
        if($newimg == NULL){
            mysqli_query($dblink, "UPDATE users SET `user_name`='$newname' WHERE `user_login`='$login'");
            $_SESSION['sms_'] = true;
            $_SESSION['sms'] = "Имя успешно изменено!";
            $_SESSION['save'] = true;
            header('Location: http://f0468182.xsph.ru/edit.php ');
            $name = mysqli_query($dblink, "SELECT `user_name` FROM `users` WHERE `user_login`='$login'") -> fetch_assoc()['user_name'];
            $role = mysqli_query($dblink, "SELECT `user_prava` FROM `users` WHERE `user_login`='$login'") -> fetch_assoc()['user_prava'];
            $image = mysqli_query($dblink, "SELECT `user_image` FROM `users` WHERE `user_login`='$login'") -> fetch_assoc()['user_image'];
            $_SESSION['name'] = $name;
            $_SESSION['role'] = $role;
            $_SESSION['image'] = $image; 
            
        
        }
        else{
            mysqli_query($dblink, "UPDATE users SET `user_name`='$newname' WHERE `user_login`='$login'");
            mysqli_query($dblink, "UPDATE users SET `user_image`='$newimg' WHERE `user_login`='$login'");
            $_SESSION['sms_'] = true;
            $_SESSION['sms'] = "Изменения сохранены!";
            $_SESSION['save'] = true;
            header('Location: http://f0468182.xsph.ru/edit.php ');
            $name = mysqli_query($dblink, "SELECT `user_name` FROM `users` WHERE `user_login`='$login'") -> fetch_assoc()['user_name'];
            $role = mysqli_query($dblink, "SELECT `user_prava` FROM `users` WHERE `user_login`='$login'") -> fetch_assoc()['user_prava'];
            $image = mysqli_query($dblink, "SELECT `user_image` FROM `users` WHERE `user_login`='$login'") -> fetch_assoc()['user_image'];
            $_SESSION['name'] = $name;
            $_SESSION['role'] = $role;
            $_SESSION['image'] = $image;
        }
        
    }
    
}

?>