<?php
$server = 'localhost';
$user = 'a0443857_rgenius';
$password = 'sosiska@V@teste';
$db = 'a0443857_rgenius';
$login = $_POST['username'];
$dblink = mysqli_connect($server, $user, $password, $db);
$test2 = mysqli_query($dblink, "SELECT `user_password` FROM `users` WHERE `user_login`=$login");
$test = mysqli_query($dblink, "SELECT `user_password` FROM `users` WHERE `user_login`=$login") -> fetch_assoc()['user_password'];
$pass = mysqli_query($dblink, "SELECT 'user_password' FROM 'users' WHERE 'user_login'='".mysqli_real_escape_string($dblink, $_POST['username'])."'");
echo("$pass");
echo("$login");
echo("$test");
print_r("$test2");
?>