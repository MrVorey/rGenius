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
        <div class="profile">
        <div class="photo">
        <?php 
            
            session_start();
            $photo = $_SESSION["image"];
            if($_SESSION['image'] == NULL): ?>
            <img src="img/standartimg.png" alt="" class="photoimg">
            <?php else: ?>
            <img src="<?php print($_SESSION['image']) ?>" alt="" class="photoimg">
            <?php endif; ?>
        </div>
        <div class="login">
        <?php 
        session_start();
        if ($_SESSION["is_auth"] == true): ?>
        Ваш логин:  
        <?php print($_SESSION["login"]); ?>
        <?php endif; ?>

        </div>
        <div class="name">
        Ваше имя:
        <?php 
        session_start();
        if ($_SESSION["is_name"] == true): ?>
        <?php print($_SESSION["name"]); ?>
        <?php endif; ?>
        </div>
        <div class="role">
        Ваша роль: 
        <form action = "profile.php" method = "post">
        <input type = "submit" id="update" name = "update" onclick="alert('Так стоп')" value = "Обновить">
        <form>
        <?php
        
        
        if($_POST['update'] == 'Обновить'){print("Информация обновлена");}
        ?> 
        <?php
        session_start();
        if($_SESSION["role"] == 1){print(ученик);} ?>
        <?php if($_SESSION["role"] == 2){print(учитель);} ?>
        <?php if($_SESSION["role"] >= 228){print(Администратор);} ?>
         

        </div>
        <div class="rait">
        Ваш рейтинг: 
        <?php print($_SESSION["rait"]); ?>
        </div>
        <div class="subscription">
        Ваша подписка:    
        <?php 
        session_start();
        if ($_SESSION["have_subscription"] == true): ?>
        Активна
        <?php else: ?>
        <div class="buy">Неактивна <div class="buybutton"><a href="pokupka.php">Купить подписку</a></div></div>
        
        <?php endif; ?>
        </div>
        <div class="mainprofile">
                    <?php if($_SESSION['role'] == 2):?>
                        <div class="tests">
                        <form action="tests.php" method="POST">
                        <input type="submit" value="Тесты" >
                        </form>
                        </div>
                    <?php endif; ?>    
                    <div class="vihod">
                        <form action="deauth.php" method="POST">
                        <input type="submit" value="Выход" >
                        </form>
                    </div>
                    <div class="edit">
                        <form action="edit.php" method="POST">
                        <input type="submit" value="Редактировать" >
                        </form>
                    </div>



        </div>
        </div>
        </body>
</html>