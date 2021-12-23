<?php
session_start();
session_destroy();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>退出</title>
</head>

<body>
    <?php
        header( "location:./home.php" );//自动跳转home.php网页
    ?>
</body>
</html>