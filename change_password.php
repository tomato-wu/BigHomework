<meta charset="utf-8">

<?php
require_once("conn.php")
?>

<?php
$userPass1 = $_POST['OldPassWord'];
$userPass2 = $_POST['NewPassWord'];
$adminName = $_POST['adminName'];
if (isset($adminName) && isset($userPass1) && isset($userPass2)) //判断两次密码相同，且不为空
{
    $sql = "select password from admins where adminName=$adminName";
    if (!mysqli_query($conn, $sql)) {
        echo "用户名有误";
    } else { //比较输入密码和数据库中的密码是否相对应
        $pass1 = mysqli_fetch_row(mysqli_query($conn, $sql))[0];
        $pass2 = $userPass1;
        if ($pass1 == $pass2) {
            $sql2 = "update admins set password = '$userPass2' where adminName ='$adminName'";
            mysqli_query($conn, $sql2);
            echo "<script>alert('修改密码成功，请返回登录')</script>";
            header("Refresh:0;url=home.php");
        } else {
            echo "密码错误";
        }
    }
}

mysqli_close($conn);
?>