<?php
require_once("../conn.php") ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>查询结果</title>
  <!-- bootstrap样式文件 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
  <style>
    .ReturnBtn {
      width: 160px;
      position: absolute;
      top: 20%;
      left: 91%;
      transform: translate(-50%, -50%);

    }
  </style>
</head>

<body>
  <!-- 查询出来的表格 -->
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">课程编号</th>
        <th scope="col">课程名称</th>
        <th scope="col">学期</th>
        <th scope="col">年</th>
        <th scope="col">操作</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $search = $_POST['search1'];
      //利用 查询语句
      $sql = "select * from course where course_id=$search";
      $result = mysqli_query($conn, $sql);
      if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    

      //遍历出来
      while ($row = mysqli_fetch_array($result)) {

        echo "<tr>";

        echo "<td>{$row['course_id']}</td>";
        echo "<td>{$row['course_name']}</td>";
        echo "<td>{$row['semester']}</td>";
        echo "<td>{$row['year']}</td>";
        echo "<td>
       

          <a href='../delete/delete_course.php?course_id=({$row['course_id']})'>删除</a>
          <a href='../change/course_change.php?course_id=({$row['course_id']})'>详细</a>
                     
                        </td>";
        echo "</tr>";
      }
      // echo "<a href='../homepage.php'>回到首页</a>";
      mysqli_close($conn);
      ?>

    </tbody>
  </table>

  <button type="button" class="btn btn-danger ReturnBtn" onclick="ReturnTo()">返回</button>
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script>
    function ReturnTo() {
      window.location = "../homepage.php?type=selectPage"
    }
  </script>
</body>

</html>