
<?php
require_once("../conn.php");

$practice_id = $_POST['practice_id'];
$practice_experience = $_POST['practice_experience'];
$date = $_POST['date'];
$place = $_POST['place'];
$pracetice_time = $_POST['pracetice_time'];
$instructor = $_POST['instructor'];




$sql = "INSERT INTO `social_practice` (`practice_id` ,`practice_experience`,`date` ,`place`,`pracetice_time`,`instructor`)
VALUES ('$practice_id','$practice_experience','$date','$place','$pracetice_time','$instructor')";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>alert('添加成功，返回查看')</script>";
    header("Refresh:0;url=../homepage.php?type=informationPage");
} else {
    echo ("社会实践信息添加失败！");
}
mysqli_close($conn);
?>