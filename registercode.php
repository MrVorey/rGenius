<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
$server = 'localhost';
$user = 'f0468182_rgenius';
$password = 'sosiska@V@teste';
$db = 'f0468182_rgenius';
$dblink = mysqli_connect($server, $user, $password, $db);

$login = $_POST['username'];
$password1 = $_POST['password'];
$reppassword = $_POST['reppassword'];
if (!$dblink) {
    die("Connection failed: " . mysqli_connect_error());
} 
else{
    if($password1 == $reppassword){
        $log = mysqli_query($dblink, "SELECT `id` FROM `users` WHERE `user_login`='$login'")->fetch_assoc()['user_id'];
        if($log >= 1){
            print("Пользователь уже существует!");
        }
        else{
            if(mysqli_query($dblink, "INSERT INTO users (`user_login`, `user_password`) VALUES ('$login', '$password1')"))
        {
                echo "Пользователь добавлен!";
                header('Location: http://f0468182.xsph.ru/auth.php');
        } 

        }
        }
        
    else{
        print("Пароль не верный!");
    }

}
?>
    