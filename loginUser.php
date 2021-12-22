<?php
session_start();
require_once("conn.php");
?>
<?php
$username = $_POST['userName'];
$userpass = $_POST['userPass'];
$MD5Password = md5($userpass);
if (isset($username) && isset($userpass)) { //判断用户名和密码均不为空
	$sql = "SELECT * FROM users  where userName='{$_POST['userName']}' and password='$MD5Password' ";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);
	if ($count == 0) {
?>
		<script>
			alert("密码错误")
			window.location = "./home.php"
		</script>
<?php
	} else {
		$_SESSION['userName'] = $username;
		header("Location:StudentPage.php");
	}
}

mysqli_close($conn);
?>