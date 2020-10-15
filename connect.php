

<?php
$server = 'localhost';
$user = 'a0443857_admin';
$password = 'sosiska@V@teste';

$dblink = mysqli_connect($server, $user, $password);

if($dblink)
echo 'Соединение установлено.';
else
die('Ошибка подключения к серверу баз данных.');

$database = 'a0443857_rgenius';
$selected = mysqli_select_db($database, $dblink);
if($selected)
echo ' Подключение к базе данных прошло успешно.';
else
die(' База данных не найдена или отсутствует доступ.');
?>