<?php
require_once("conn.php");
?>
<?php
$adminName = $_POST['adminName'];
$adminPassword = $_POST['adminPassword'];

if (isset($adminName) && isset($adminPassword)) { //判断用户名和密码均不为空
  $sql = "SELECT * FROM admins  where adminName='{$_POST['adminName']}' and password='{$_POST['adminPassword']}' ";
  // 执行针对数据库的查询：
  $result = mysqli_query($conn, $sql);
  // 返回结果集中行的数量：
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