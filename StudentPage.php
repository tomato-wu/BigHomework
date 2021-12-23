<?php
session_start();
// 学生界面设计
require_once("conn.php"); //连接数据库,require_once
$username = $_SESSION['userName'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>学生个人信息界面</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <style>
        .mytable {
            border: 2px;
            margin: 0 auto;
        }

        td {
            text-align: center
        }

        .Backup {
            width: 160px;
            height: 40px;
            position: absolute;
            bottom: 5%;
            right: 4%;
        }
    </style>

</head>

<body>

    <h1 color="#58ACFA" align="center">学生信息</h1>
    <?php
    // 数据库语句
    $sql = "SELECT * FROM student where s_id=$username;";
    $sql2 = "SELECT * FROM student_course where s_id=$username;";
    $sql3 = "SELECT * FROM student_practice where s_id=$username;";
    // 
    $result = mysqli_query($conn, $sql);
    $stu = mysqli_fetch_array($result);
    // 
    $result2 = mysqli_query($conn, $sql2);
    $cou = mysqli_fetch_array($result2);
    // 
    $result3 = mysqli_query($conn, $sql3);
    $pra = mysqli_fetch_array($result3);
    ?>
    <table align="center" class="mytable" width="800" height="700" border="5" cellpadding="2" cellspacing="0">
        <th bgcolor="#58ACFA" colspan="4">学生基本信息
        </th>
        <tr>
            <td>学号</td>
            <td><?php echo $stu[0]; ?></td>
            <td>姓名</td>
            <td><?php echo $stu['name']; ?></td>
        </tr>
        <tr>
            <td>性别</td>
            <td><?php echo $stu[2]; ?></td>
            <td>民族</td>
            <td><?php echo $stu[7]; ?></td>
        </tr>
        <tr>
            <td>班级</td>
            <td><?php echo $stu[3]; ?></td>
            <td>出生年月</td>
            <td><?php echo $stu[4]; ?></td>
        </tr>
        <tr>
            <td>入学年份</td>
            <td><?php echo $stu[5]; ?></td>
            <td>生源地</td>
            <td><?php echo $stu[6]; ?></td>
        </tr>
        <tr>
            <td>家庭住址</td>
            <td colspan="3"><?php echo $stu[8]; ?></td>
        </tr>
        <th bgcolor="#58ACFA" colspan="4">课程信息
        </th>
        <tr>
            <td>课程编号</td>
            <td><?php echo $cou[1]; ?></td>
            <td>课程名称</td>
            <td><?php echo $cou[2]; ?></td>
        </tr>
        <tr>
            <td>学年</td>
            <td><?php echo $cou[3]; ?></td>
            <td>学期</td>
            <td><?php echo $cou[4]; ?></td>
        </tr>
        <tr>
            <td>得分</td>
            <td colspan="3"><?php echo $cou[5]; ?></td>
        <tr>
            <th bgcolor="#58ACFA" colspan="4">社会实践信息
            </th>
        <tr>
            <td>社会实践编号</td>
            <td><?php echo $pra[1]; ?></td>
            <td>社会实践名称</td>
            <td><?php echo $pra[2]; ?></td>
        </tr>
        <tr>
            <td>时间</td>
            <td><?php echo $pra[3]; ?></td>
            <td>地点</td>
            <td><?php echo $pra[4]; ?></td>
        </tr>
        <tr>
            <td>总时长(h)</td>
            <td><?php echo $pra[5]; ?></td>
            <td>指导老师</td>
            <td><?php echo $pra[6]; ?></td>

    </table>

    <button type="button" class="btn btn-primary Backup" onclick="window.location.href='logout.php'">退出</button>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>