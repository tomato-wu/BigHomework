<?php
require_once("dblink.php");
?>

<meta charset="utf-8">
<?php
session_start();

if ($_POST['userName'] != ''  &&  $_POST['userPass'] != '') {


	$username = $_POST['userName'];
	$userpass = $_POST['userPass'];


	if (isset($username) && isset($userpass)) { //判断用户名和密码均不为空
		$sql = "SELECT * FROM users  where userName='{$_POST['userName']}' and password='{$_POST['userPass']}' ";
		$result = mysqli_query($link, $sql);
		$count = mysqli_num_rows($result);
		if ($count == 0) {
			echo "账号密码错误，查无此人 <br />";
			echo  "<a href='home.php'>请返回重新登录</a>";
		} else {
			header("Location:homepage.php");
		}
	}
} else {
	echo "账号密码不能为空 <br />";
	echo  "<a href='home.php'>请返回重新登录</a>";
}
mysqli_close($link);
?>