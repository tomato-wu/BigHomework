<meta charset="utf-8">

<?php
require_once("conn.php")
?>

<?php
if (isset($_POST['changepass'])) { //判断是否点击修改密码按钮
    $userPass1 = $_POST['userpasso'];
    $userPass2 = $_POST['userpassn'];
    $userName = $_POST['userName'];
    if (isset($userName) && isset($userPass1) && isset($userPass2)) //判断两次密码相同，且不为空
    {
        $sql = "select password from users where userName='$userName'";
        if (!mysqli_query($conn, $sql)) {
            echo "用户名有误";
        } else { //比较输入密码和数据库中的密码是否相对应
            $pass1 = mysqli_fetch_row(mysqli_query($conn, $sql))[0];
            $pass2 = $userPass1;
            if ($pass1 == $pass2) {
                $sql2 = "update users set password = '$userPass2' where userName ='$userName'";
                mysqli_query($conn, $sql2);
                echo "<script>alert('修改密码成功，请返回登录')</script>";
                header("Refresh:0;url=home.php");
            } else {
                echo "密码错误";
            }
        }
    }
}
mysqli_close($conn);
?>