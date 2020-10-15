<!DOCTYPE html>
<html lang="ru">
    <head>
    <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>" />
    <meta charset="UTF-8">
    <META HTTP-EQUIV="Expires" CONTENT="Tue, 04 Dec 1993 21:29:02 GMT">
        <title>rGenius</title>
    </head>
    <body>
        <div class="header">
            <div class="wrap">
                <div class="nav1">
                <a href="contacts.php">Контакты</a>
                <div class="messageimg"><img src="img/message.png" class="messageimg" alt="Сообщения"></div>
    
                </div>
                <div class="navlogo">
                    
                    <a href="index.php"><img class="logo" src="img/logo.png" alt="logo"></a>
                    
                </div>
                <div class="nav2">
                <?php 
                session_start();
                if ($_SESSION["is_auth"] == true): ?>
                <a href="profile.php"><?php print($_SESSION["login"]); ?></a>
                <?php else: ?>
                <a href="auth.php">Войти</a>
                <?php endif; ?>
                </div>

            </div>

        </div>
        <div class="tests"> 
        <?php 
        $server = 'localhost';
        $user = 'f0468182_rgenius';
        $password = 'sosiska@V@teste';
        $db = 'f0468182_rgenius';
        $dblink = mysqli_connect($server, $user, $password, $db);
        
                session_start();
                
                $login = $_SESSION['login'];
                
                    $result = mysqli_query($dblink, "SELECT `id`, `name`, `questions`, `addtime`  FROM `tests` WHERE `login_name`='$login'");
                    //print_r(mysqli_query($dblink, "SELECT `id`, `name`, `questions`, `addtime`  FROM `tests` WHERE `login_name`='$login'")->$result);
                    while($row = mysqli_fetch_assoc($result)){
                        
                    }
                    echo '<table border="1">';
                    $cols = 4;
                    echo mysqli_num_rows($result);
                    for ($tr=1; $tr<=mysqli_num_rows($result); $tr++){
                        echo '<tr>';
                    for ($td=1; $td<=$cols; $td++){
                        echo '<td>'. $tr*$td .'</td>';
                        }
                        echo '</tr>';
                    }
                    echo '</table>';
                ?>
        
        
        
        
        
         </div>
         <div class="test">
         <?php

$rows = 20; // количество строк, tr
$cols = 20; // количество столбцов, td

echo '<table class="tests">';

for ($tr=1; $tr<=$rows; $tr++){ // в этом цикле счётчик $tr 
    // следит за количеством строк и всегда равен текущему номеру строки.
    // То есть в начале $tr=1, так как в начале у нас 1 строка, затем
    // каждый раз прибавляем единицу, пока не дойдём до заданного количества
    // $rows.
    echo '<tr class="tests">';
    for ($td=1; $td<=$cols; $td++){ // в этом цикле счётчик $td аналогичен
                                    // счётчику $tr.
        echo '<td class="tests">'. $tr*$td .'</td>';
    }
    echo '</tr >';
}

echo '</table>';

?></div>
        </body>
</html>    