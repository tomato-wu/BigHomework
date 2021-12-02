<?php
require_once("conn.php");
?>
<?php
$adminName = $_POST['adminName'];
$adminPassword = $_POST['adminPassword'];

if (isset($adminName) && isset($adminPassword)) { //判断用户名和密码均不为空
  $sql = "SELECT * FROM admins  where adminName='{$_POST['adminName']}' and password='{$_POST['adminPassword']}' ";
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
    header("Location:homepage.php?type=introducePage");
  }
}

mysqli_close($conn);
?>