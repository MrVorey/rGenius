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
                <div class="messageimg"><img src="img/message.png" class="messageimg" alt="Контакты"></div>

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
    <div class="main1">
        
        
        <div class="rus"><a href="lessons/rus.php" class="rusclass"><img class="rusimg" src="img/rus.jpg" alt="Русский"></a><figcaption>Русский</figcaption></div>
        <div class="math"><a href="lessons/math.php" class="mathclass"><img class="mathimg" src="img/math.jpg" alt="Математика"></a><figcaption>Математика</figcaption></div>
        <div class="inf"><a href="lessons/inf.php" class="infclass"><img class="infimg" src="img/inf.jpg" alt="Информатика"></a><figcaption>Информатика</figcaption></div>
        <div class="phis"><a href="lessons/phis.php" class="phisclass"><img class="phisimg" src="img/phis.jpg" alt="Физика"></a><figcaption>Физика</figcaption></div>
        <div class="him"><a href="lessons/him.php" class="himclass"><img class="himimg" src="img/him.jpg" alt="Химия"></a><figcaption>Химия</figcaption></div>
        <div class="litra"><a href="lessons/litra.php" class="litraclass"><img class="litraimg" src="img/litra.jpg" alt="Литература"></a><figcaption>Литература</figcaption></div>
        <div class="geog"><a href="lessons/geog.php" class="geogclass"><img class="geogimg" src="img/geog.jpg" alt="География"></a><figcaption>География</figcaption></div>
        <div class="his"><a href="lessons/his.php" class="hisclass"><img class="hisimg" src="img/his.jpg" alt="История"></a><figcaption>История</figcaption></div>
        <div class="obsh"><a href="lessons/obsh.php" class="obshclass"><img class="obshimg" src="img/obsh.jpg" alt="Обществознание"></a><figcaption>Обществознание</figcaption></div>
        <div class="bio"><a href="lessons/bio.php" class="bioclass"><img class="bioimg" src="img/bio.jpg" alt="Биология"></a><figcaption>Биология</figcaption></div>
        <div class="eng"><a href="lessons/eng.php" class="engclass"><img class="engimg" src="img/eng.jpg" alt="Английский"></a><figcaption>Английский</figcaption></div>
        <div class="cult"><a href="lessons/cult.php" class="cultclass"><img class="cultimg" src="img/cult.jpg" alt="Искусство"></a><figcaption>Искусство</figcaption></div> 
        

    </div>
    
    <div class="footer">
        <div class="vk">
            
            <a class="b" href="http://vk.com/rgenius_official"><img src="img/rgenius_official.png" class="vkimg" alt="Вк"></a>
        </div>
        
    </div>
</body>
</html>