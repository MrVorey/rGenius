<!DOCTYPE html>
<html lang="ru">
    <head>
    <link rel="stylesheet" href="../css/style.css?<?php echo time(); ?>" />
    <meta charset="UTF-8">
    <META HTTP-EQUIV="Expires" CONTENT="Tue, 04 Dec 1993 21:29:02 GMT">
        <title>rGenius</title>
    </head>
    <body>
        <div class="header">
            <div class="wrap">
                <div class="nav1">
                <a href="contacts.php">Контакты</a>
    
                </div>
                <div class="navlogo">
                    
                    <a href="../index.php"><img class="logo" src="../img/logo.png" alt="logo"></a>
                    
                </div>
                <div class="nav2">
                <?php 
                session_start();
                if ($_SESSION["is_auth"] == true): ?>
                <a href="../profile.php"><?php print($_SESSION["login"]); ?></a>
                <?php else: ?>
                <a href="../auth.php">Войти</a>
                <?php endif; ?>
                </div>

            </div>

        </div>
        <div class="main">
            <a href="bio/1.php">1 класс</a>
            <a href="bio/2.php">2 класс</a>
            <a href="bio/3.php">3 класс</a>
            <a href="bio/4.php">4 класс</a>
            <a href="bio/5.php">5 класс</a>
            <a href="bio/6.php">6 класс</a>
            <a href="bio/7.php">7 класс</a>
            <a href="bio/8.php">8 класс</a>
            <a href="bio/9.php">9 класс</a>
            <a href="bio/10.php">10 класс</a>
            <a href="bio/11.php">11 класс</a>
            <a href="bio/ege.php">Подготовка к ЕГЭ</a>
            
            
        </div>
        </body>
</html>