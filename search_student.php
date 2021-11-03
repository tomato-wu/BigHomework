<?php
require_once("conn.php") ?>
<title>search_student</title>
</head>

<body>
  <!-- 查询出来的表格 -->
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">学号</th>
        <th scope="col">姓名</th>
        <th scope="col">性别</th>
        <th scope="col">班级</th>
        <th scope="col">生源地</th>
        <th scope="col">出身日期</th>
        <th scope="col">入学年份</th>
        <th scope="col">民族</th>
        <th scope="col">家庭住址</th>
        <th scope="col">操作</th>
      </tr>
    </thead>
    <tbody>
      <?php

      $search = $_POST['search'];
      //利用 查询语句
      $sql = "select * from student where s_id=$search";
      $result = mysqli_query($conn, $sql);

      //遍历出来
      while ($row = mysqli_fetch_array($result)) {

        echo "<tr>";

        echo "<td>{$row['s_id']}</td>";
        echo "<td>{$row['s_code']}</td>";
        echo "<td>{$row['name']}</td>";
        echo "<td>{$row['gender']}</td>";
        echo "<td>{$row['class_name']}</td>";
        echo "<td>{$row['native_place']}</td>";
        echo "<td>{$row['date_birth']}</td>";
        echo "<td>{$row['data_enrollment']}</td>";
        echo "<td>{$row['nationality']}</td>";
        echo "<td>{$row['home_address']}</td>";
        echo "<td>
          <a href='student_delete.php?s_id=({$row['s_id']})'>删除</a>
          <a href='student_change.php?s_id=({$row['s_id']})'>详细</a>
                     
                        </td>";
        echo "</tr>";
      }
      echo "<a href='homepage.php'>回到首页</a>";
      mysqli_close($conn);
      ?>