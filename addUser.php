<?php
require_once("dblink.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注册界面</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
</head>

<body>


    <?php
    if (isset($_POST['userSubmit'])) { //判断是否点击注册按钮
        $userName = $_POST['userName'];
        $userPass1 = $_POST['userPass1'];
        $userPass2 = $_POST['userPass2'];
        $name = $_POST['name'];
        if (isset($userName)) { //判断用户名不为空
            if (
                isset($userPass1)
                && isset($userPass2)
                && $userPass1 === $userPass2
            ) {
                //判断两次密码相同，且不为空
                //信息存入数据库
                $sql = "insert into users value( '$userName','$userPass1','$name' )";

                if (mysqli_query($link, $sql)) {
                    echo "<script>alert('注册成功，马上登录')</script>";
                    header("Refresh:0;url=home.php");
                } else {
                    echo "注册失败 <br />";
                    echo  "<a href='register.php'>请返回重新注册</a>";
                }
            } else {
                echo "密码输入有误 <br />";
                echo  "<a href='register.php'>请重新注册</a>";
            }
        } else {
            echo "用户名不能空<br />";
            echo  "<a href='./register.php'>请重新注册</a>";
        }
    } else {
        echo "请正确输入<br />";
        header("Location:register.php");
    }
    ?>
    <?php
    mysqli_close($link); //关闭数据库连接
    ?>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>