<!DOCTYPE html>
<html lang="ru">
    <head>
    <link rel="stylesheet" href="../../css/style.css?<?php echo time(); ?>" />
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
                    
                    <a href="../../index.php"><img class="logo" src="../../img/logo.png" alt="logo"></a>
                    
                </div>
                <div class="nav2">
                <?php 
                session_start();
                if ($_SESSION["is_auth"] == true): ?>
                <a href="../../profile.php"><?php print($_SESSION["login"]); ?></a>
                <?php else: ?>
                <a href="auth.php">Войти</a>
                <?php endif; ?>
                </div>

            </div>

        </div>
       
        </body>
</html>