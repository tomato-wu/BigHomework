
<?php
require_once("../conn.php");

$s_id = $_POST['s_id'];
$s_code = $_POST['s_code'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$class_name = $_POST['class_name'];
$date_birth = $_POST['date_birth'];
$data_enrollment = $_POST['data_enrollment'];
$native_place = $_POST['native_place'];
$nationality = $_POST['nationality'];
$home_address = $_POST['home_address'];



$sql = "INSERT INTO `student` (`s_id` ,`s_code`,`name` ,`gender`,`class_name` ,`date_birth`,`data_enrollment` ,`native_place`,`nationality` ,`home_address`,`users_name`)
VALUES ('$s_id','$s_code','$name','$gender','$class_name','$date_birth','$data_enrollment','$native_place','$nationality','$home_address','admin')";

$result = mysqli_query($conn, $sql);

if ($result) {
  echo "<script>alert('添加成功，返回查看')</script>";
  header("Refresh:0;url=../homepage.php");
} else {
  echo ("学生信息添加失败！");
}
mysqli_close($conn);
?>