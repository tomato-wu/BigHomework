<!-- 
在首页界面，学生信息模块，通过点击 “详细”按钮 进入修改界面 
同时传入 s_id ，在这个页面通过 s_id 查找信息并显示 

 -->

<!doctype html>
<html lang="zh-CN">

<head>
  <!-- 必须的 meta 标签 -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap 的 CSS 文件 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" crossorigin="anonymous">

  <title>学生信息管理修改</title>
  <link rel="stylesheet" href="./css/student_change.css">
  <!-- 连接数据库，获取s_id, 根据s_id在数据库中查找对应信息 -->
  <?php

  //连接数据库
  require_once("conn.php");
  //拼接sql语句，取出信息
  $sql = "SELECT * FROM student WHERE s_id ={$_GET['s_id']};";
  echo $sql;
  $result = mysqli_query($conn, $sql);
  $stu = mysqli_fetch_row($result);


  ?>
</head>

<body>

  <div class="jumbotron" id="header">
    <h1 class="display-4" style="color: aliceblue;">学生信息管理修改</h1>
    <p class="lead" style="color: aliceblue;">This is a simple student information system.</p>
    <hr class="my-4">
  </div>

  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">学生基本信息表修改</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">学生-选课</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">学生-综合测评</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="pills-scholarship-tab" data-toggle="pill" href="#pills-scholarship" role="tab" aria-controls="pills-scholarship" aria-selected="false">学生-奖学金</a>
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">

    <!-- 学生基本信息表修改 -->

    <?php
    if (isset($_POST['s_id'])) {

      $sql = "UPDATE student SET 
		s_id = '{$_POST['s_id']}',
		s_code = '{$_POST['s_code']}',
		name = '{$_POST['name']}',
		gender = '{$_POST['gender']}',
		class_name = '{$_POST['class_name']}',
		date_birth = '{$_POST['date_birth']}',
		data_enrollment = '{$_POST['data_enrollment']}',
		native_place = '{$_POST['native_place']}',
		nationality = '{$_POST['nationality']}',
		home_address = '{$_POST['home_address']}' 
		WHERE s_id = '{$_POST['s_id']}';";
      mysqli_query($conn, $sql);
    }


    $sql = "SELECT * FROM student where s_id={$_GET['s_id']} ;";
    $result1 = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result1);
    ?>

    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      <form method="post" action="change_method.php?action=student" class="change_box">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="s_id">ID</label>
            <input type="text" class="form-control" id="s_id" name='s_id' value="<?php echo $stu[0]; ?>" readonly>
          </div>
          <div class="form-group col-md-6">
            <label for="s_code">学号</label>
            <input type="text" class="form-control" id="s_code" name='s_code' value="<?php echo $stu[1]; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="name">姓名</label>
            <input type="text" class="form-control" id="name" name='name' value="<?php echo $stu[2]; ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="class_name">班级</label>
          <input type="text" class="form-control" id="class_name" name='class_name' placeholder="1234 Main St" value="<?php echo $stu[4]; ?>">
        </div>
        <div class="form-group">
          <label for="native_place">生源地</label>
          <input type="text" class="form-control" id="native_place" name='native_place' placeholder="Apartment, studio, or floor" value="<?php echo $stu[7]; ?>">
        </div>
        <div class="form-group">
          <label for="date_birth">出身日期</label>
          <input type="text" class="form-control" id="date_birth" placeholder="Apartment, studio, or floor" name='date_birth' value="<?php echo $stu[5]; ?>">
        </div>
        <div class="form-group">
          <label for="data_enrollment">入学年份</label>
          <input type="text" class="form-control" id="data_enrollment" placeholder="Apartment, studio, or floor" name='data_enrollment' value="<?php echo $stu[6]; ?>">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="home_address">家庭住址</label>
            <input type="text" class="form-control" id="home_address" name='home_address' value="<?php echo $stu[9]; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="nationality">民族</label>
            <input type="text" class="form-control" id="nationality" name='nationality' value="<?php echo $stu[8]; ?>">
          </div>
          <div class="form-group col-md-4">
            <label for="gender">性别</label>
            <select id="gender" class="form-control">
              <?php
              if ($stu[3] == "男") {
              ?>
                <option selected>男</option>
                <option>女</option>
              <?php
              } else {
              ?>
                <option>男</option>
                <option selected>女</option>
              <?php
              } ?>
            </select>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">修改</button>
        <a href="./homepage.php" class="btn btn-outline-primary" role="button" aria-pressed="true">返回</a>
      </form>
    </div>
    <!-- 学生-选课 -->
    <?php
    $sql = "SELECT * FROM section WHERE s_id =" . $_GET['s_id'];
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      $stu = mysqli_fetch_row($result);
    }
    ?>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      <form method="post" action="change_method.php?action=section" class="change_box">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">学号</label>
            <input type="text" class="form-control" id="inputEmail4" name='s_id' value="<?php echo $stu['s_id']; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">课程号</label>
            <input type="text" class="form-control" id="inputPassword4" name='course_id' value="<?php echo $stu['course_id']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">课程名</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name='course_name' value="<?php echo $stu['course_name']; ?>">
        </div>
        <div class="form-group">
          <label for="inputAddress2">学分</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name='grade' value="<?php echo $stu['grade']; ?>">
        </div>

        <button type="submit" class="btn btn-primary">修改</button>
        <a href="./homepage.php" class="btn btn-outline-primary" role="button" aria-pressed="true">返回</a>
      </form>
    </div>
    <!-- 学生-综测 -->
    <?php
    $sql = "SELECT * FROM s_com_test WHERE s_id =" . $_GET['s_id'];
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      $stu = mysqli_fetch_row($result);
    }
    ?>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
      <form method="post" action="change_method.php?action=s_com_test" class="change_box">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">学号</label>
            <input type="text" class="form-control" id="inputEmail4" name='s_id' value="<?php echo $stu['s_id']; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">综测活动ID</label>
            <input type="text" class="form-control" id="inputPassword4" name='event' value="<?php echo $stu['event']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">综测活动名称</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name='event_id' value="<?php echo $stu['event_id']; ?>">
        </div>
        <div class="form-group">
          <label for="inputAddress2">综测分值</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name='score' value="<?php echo $stu['score']; ?>">
        </div>

        <button type="submit" class="btn btn-primary">修改</button>
        <a href="./homepage.php" class="btn btn-outline-primary" role="button" aria-pressed="true">返回</a>
      </form>
    </div>
    <!-- 学生-奖学金 -->
    <?php
    $sql = "SELECT * FROM student_scholarship WHERE s_id =" . $_GET['s_id'];
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      $stu = mysqli_fetch_row($result);
      mysqli_close($conn);
    }
    ?>
    <div class="tab-pane fade" id="pills-scholarship" role="tabpanel" aria-labelledby="pills-scholarship-tab">
      <form method="post" action="change_method.php?action=student_scholarship" class="change_box">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">学号</label>
            <input type="text" class="form-control" id="inputEmail4" name='s_id' value="<?php echo $stu['s_id']; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">奖学金类别</label>
            <input type="text" class="form-control" id="inputPassword4" name='total_grade' value="<?php echo $stu['total_grade']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">总得分</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name='total_score' value="<?php echo $stu['total_score']; ?>">
        </div>
        <div class="form-group">
          <label for="inputAddress2">金额</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name='category' value="<?php echo $stu['category']; ?>">
        </div>

        <button type="submit" class="btn btn-primary">修改</button>
        <a href="./homepage.php" class="btn btn-outline-primary" role="button" aria-pressed="true">返回</a>
      </form>
    </div>
  </div>

























  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>

</html>