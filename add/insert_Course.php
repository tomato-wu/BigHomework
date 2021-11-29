
<?php
require_once("../conn.php");
$course_id = $_POST['course_id'];
$course_name = $_POST['course_name'];
$semester = $_POST['semester'];
$year = $_POST['year'];



$sql = "INSERT INTO `course` (`course_id`,`course_name` ,`semester`,`year`)
VALUES ('$course_id','$course_name','$semester','$year')";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>alert('添加成功，返回查看')</script>";
    header("Refresh:0;url=../homepage.php?type=informationPage");
} else {
    echo ("课程信息添加失败！");
}
mysqli_close($conn);
?>