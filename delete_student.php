

<?php
require_once("conn.php"); //连接数据库,require_once
$s_id = $_GET['s_id'];

$sql = "delete from student where s_id = $s_id"; //根据id删除

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('成功删除');
    window.location='homepage.php'</script>";
} else {
    echo '删除失败' . mysqli_affected_rows($conn) . '条数据';
    header("refresh:3;homepage.php"); //等待指定的时间，然后再跳转到指定页面。
    print('正在加载，请稍等...<br>三秒后自动跳转到首页');
}

?>