
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="test">
        
    <?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    
    
    $sql = "SELECT * FROM rasp11";
    $db = new SQLite3('rasp93.db');
    
    $res = $db->query($sql);
    print($res);


?>
        
    </div>
</body>
</html>
