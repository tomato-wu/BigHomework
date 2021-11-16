<!-- 
/*
 */
  添加到course表
 -->
<?php
require_once("conn.php"); //连接数据库,require_once
$course_id = $_POST['course_id'];
$course_name = $_POST['course_name'];
$semester = $_POST['semester'];
$year = $_POST['year'];

$sql = "insert into course values ('$course_id','$course_name','undefine','$semester','$year')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>alert('增加成功');location.reload()</script>";
    echo "<script>alert('成功添加');window.location='homepage.php'</script>";
} else {
    echo "<script>alert('增加失败');</script>";
}
mysqli_close($conn);

?>