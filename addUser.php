<?php
require_once("conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注册界面</title>
</head>

<body>
    <?php
    $userName = $_POST['RegisterUserName'];
    $userPass1 = $_POST['userPass1'];
    $userPass2 = $_POST['userPass2'];
    $md5PassWord = md5($userPass2);
    $name = $_POST['name'];
    $sql = "insert into users value( '$userName','$md5PassWord','$name' )";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('注册成功，马上登录')</script>";
        header("Refresh:0;url=home.php");
    } else {
        echo "注册失败 <br />";
        echo  "<a href='home.php'>请返回重新注册</a>";
    }

    ?>
    <?php
    mysqli_close($conn); //关闭数据库连接
    ?>
</body>

</html>