<?php
require_once("conn.php");
$q = isset($_GET["q"]) ? $_GET["q"] : '';


$sql = "SELECT * FROM admins where adminName='$q'";

$result = mysqli_query($conn, $sql);

$count = mysqli_num_rows($result);
if ($count > 0) {
  echo "该管理员账号合法";
} else {
  echo "该管理员账不存在";
}
mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ajax验证用户名是否存在</title>
</head>

<body>

</body>

</html>