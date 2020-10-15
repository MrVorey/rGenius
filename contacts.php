<?php
header("Cache-Control: no-cache, must-revalidate"); 
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
?>
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
                <div class="language">
                <a href="index_en.php">EN</a>
                </div>
            </div>
        </div>


    </div>
    <div class="formain">
    <div class="maincontacts1">
        <div class="forteachers">
            Для учителей:
            По вопросам образовательных программ ssssspams@list.ru
            По вопросам сотрудничества ssssspams@yahoo.com
        </div>

        

    </div>
    <div class="maincontacts2">
        <div class="forstudents">
            Для учеников:
            По вопросам ssssspams@outlook.com
        </div>
    
    </div>
    </div>
    
</body>
</html>