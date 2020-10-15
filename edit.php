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
        <div class="sms">
            <?php 
            session_start();
            if($_SESSION['sms_'] == true): ?>
            <div class="sms_true">
                <?php if($_SESSION['save'] == true):?>
                <div class="sms_green"><?print($_SESSION['sms']);?></div>
                <?php else:?>
                <div class="sms_red"><?print($_SESSION['sms']);?></div>
                <?php endif; ?>
            </div>
            <?php else: ?>
            <div class="sms_false"></div>
            <?php endif; ?>
        </div>
        <div class="chisto_po_prikolu_net_ne_pashalka">
        
        <div class="profile_edit">
        <div class="photo_edit">
        <?php 
            
            session_start();
            $photo = $_SESSION["image"];
            if($_SESSION['image'] == NULL): ?>
            <img src="img/standartimg.png" alt="" class="photoimg">
            <?php else: ?>
            <img src="<?php print($_SESSION['image']) ?>" alt="" class="photoimg">
            <?php endif; ?>
                
        </div>
        <div class="login_edit">
        <?php 
        session_start();
        if ($_SESSION["is_auth"] == true): ?>
        Ваш логин:  
        <?php print($_SESSION["login"]); ?>
        <?php endif; ?>

        </div>
        <div class="name_edit">
        Ваше имя:
        
        
        
        
        </div>
        <div class="role_edit">
        Ваша роль:  
        
        <?php print($_SESSION["role"]); ?>
        

        </div>
        
        <div class="subscription_edit">
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
                    <div class="vihod">
                        <form action="deauth.php" method="POST">
                        <input type="submit" value="Выход" >
                        </form>
                    </div>
                    
                        
                        
                    



        </div>
        </div>
        <div class="profile_edit_input">
        <form action="edit_code.php" method="POST" class="vvod">
        <input class="vvod_image" type="text" name="editimg" placeholder="Введите ссылку на фото, чтобы изменить фото профиля">
        <input class="vvod_name" type="text" name="editname" placeholder="Ваше имя: <?php print($_SESSION["name"]); ?> - Введите чтобы изменить">
        <input type="submit" value="Сохранить" >
        </form>
        </div>
        </div>
        </div>
        </body>
</html>