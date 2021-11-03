<!doctype html>
<html lang="zh-CN">

<head>
  <!-- 必须的 meta 标签 -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap 的 CSS 文件 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
  <title>系统首页</title>
  <link rel="stylesheet" href="./css/home.css">
  <style>
    .LoginOut {
      position: absolute;
      top: 54px;
      right: 35px;
    }

    .addBtnStyle {
      width: 200px;
      float: right;
      margin: 10px;
    }
  </style>
</head>

<body>
  <!-- //////////////////////////////////////////////////连接数据库//////////////////////////////////////////////////////////////// -->
  <?php require_once("conn.php"); ?>
  <!-- //////////////////////////////////////////////////标题和左边导航栏////////////////////////////////////////////////////////////////// -->
  <div class="jumbotron" id="header">
    <h1 class="display-4" style="color: aliceblue;">学生信息管理系统</h1>
    <p class="lead" style="color: aliceblue;">This is a simple student information system.</p>
    <a class="btn btn-danger LoginOut" href="home.php" role="button">退出</a>

  </div>

  <div class="row">

    <div class="col-3">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">首页</a>
        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">学生信息</a>
        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">查询</a>
        <a class="nav-link" id="v-pills-password-tab" data-toggle="pill" href="#v-pills-password" role="tab" aria-controls="v-pills-password" aria-selected="false">修改密码</a>
        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">设置</a>
      </div>
    </div>


    <div class="col-9">
      <div class="tab-content" id="v-pills-tabContent">

        <!-- //////////////////////////////////////////////////首页详情/////////////////////////////////////////////////////////////////// -->

        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">


          <div class="media introduce_box">
            <img src="img/数据库.png" class="align-self-start mr-3" style="size: 30px;" alt="...">
            <div class="media-body">
              <h1 class="mt-0">web大作业--学生信息管理系统</h1>
              <p>该系统为简单的学生信息管理系统，包括对学生基本信息、学生选课、学生奖学金、社会实践活动的增删查改等功能</p>
            </div>
          </div>

          <div class="card-deck teamer_box">
            <div class="card">
              <img src="img/地球.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">李晓宁</h5>
                <p class="card-text">主要负责实现学生信息表删除、查询功能等</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">软件工程1904班</small>
              </div>
            </div>
            <div class="card">
              <img src="img/code.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">丁美慧</h5>
                <p class="card-text">主要负责实现学生信息表修改、添加功能等.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">软件工程1904班</small>
              </div>
            </div>
            <div class="card">
              <img src="img/card.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">邬坤源</h5>
                <p class="card-text">主要负责前端开发，以及实现注册登录界面和相关逻辑操作</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">软件工程1904班</small>
              </div>
            </div>
          </div>



        </div>
        <!-- //////////////////////////////////////////////////右边导航栏//////////////////////////////////////////////////////////////////// -->

        <!-- 右边导航栏 -->
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">学生信息</a>
              <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">课程安排表</a>
              <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">社会实践</a>
              <a class="nav-link" id="nav-loan-tab" data-toggle="tab" href="#nav-loan" role="tab" aria-controls="nav-loan" aria-selected="false">贷款</a>
              <a class="nav-link" id="nav-scholarship-tab" data-toggle="tab" href="#nav-scholarship" role="tab" aria-controls="nav-scholarship" aria-selected="false">奖学金</a>
            </div>
          </nav>

          <div class="tab-content" id="nav-tabContent">


            <!-- //////////////////////////////////////////////////学生信息（主体）//////////////////////////////////////////////////////////////////// -->

            <!-- 学生基本信息表 -->
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <!-- 添加 -->
              <button type="button" class="btn btn-primary addBtnStyle" onclick="addStudentBtn()">添加</button>

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
                  //3.执行sql语句，cl并实现解析和遍历
                  $sql = "SELECT * FROM student ";
                  foreach ($conn->query($sql) as $row) {
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
                                <a href='delete_student.php?s_id=({$row['s_id']})'>删除</a>
                                <a href='./change/student_change.php?s_id=({$row['s_id']})'>修改</a>
                                  </td>";
                    echo "</tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <!-- 课程信息表 -->

            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <button type="button" class="btn btn-primary addBtnStyle" onclick="addCourse()">添加</button>

              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">序号</th>
                    <th scope="col">课程编号</th>
                    <th scope="col">课程名称</th>
                    <th scope="col">学期</th>
                    <th scope="col">年</th>
                    <th scope="col">操作</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  //3.执行sql语句，cl并实现解析和遍历
                  $sql = "SELECT * FROM course ";
                  foreach ($conn->query($sql) as $row) {
                    echo "<tr>";
                    echo "<td>{$row['course_id']}</td>";
                    echo "<td>{$row['course_code']}</td>";
                    echo "<td>{$row['course_name']}</td>";
                    echo "<td>{$row['semester']}</td>";
                    echo "<td>{$row['year']}</td>";

                    echo "<td>
                                <a href='delete_course.php?course_id=({$row['course_id']})'>删除</a>
                                <a href='./change/course_change.php?course_id=({$row['course_id']})'>修改</a>
                                  </td>";
                    echo "</tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <!-- 社会实践 -->

            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
              <button type="button" class="btn btn-primary addBtnStyle" onclick="addSocial()">添加</button>

              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">实践活动编号</th>
                    <th scope="col">活动名称</th>
                    <th scope="col">时间</th>
                    <th scope="col">地点</th>
                    <th scope="col">总时长</th>
                    <th scope="col">指导老师</th>
                    <th scope="col">操作</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  //3.执行sql语句，cl并实现解析和遍历
                  $sql = "SELECT * FROM social_practice ";
                  foreach ($conn->query($sql) as $row) {
                    echo "<tr>";
                    echo "<td>{$row['practice_id']}</td>";
                    echo "<td>{$row['practice_experience']}</td>";
                    echo "<td>{$row['date']}</td>";
                    echo "<td>{$row['place']}</td>";
                    echo "<td>{$row['pracetice_time']}</td>";
                    echo "<td>{$row['instructor']}</td>";

                    echo "<td>
                               <a href='delete_social_practice.php?practice_id=({$row['practice_id']})'>删除</a>
                                <a href='detail.php?s_id=()'>修改</a>
                                  </td>";
                    echo "</tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>

            <!-- 贷款 -->
            <div class="tab-pane fade" id="nav-loan" role="tabpanel" aria-labelledby="nav-loan-tab">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">贷款名称</th>
                    <th scope="col">贷款银行</th>
                    <th scope="col">还款方式</th>
                    <th scope="col">贷款金额</th>
                    <th scope="col">操作</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  //3.执行sql语句，cl并实现解析和遍历
                  $sql = "SELECT * FROM loan ";
                  foreach ($conn->query($sql) as $row) {
                    echo "<tr>";
                    echo "<td>{$row['loan_form']}</td>";
                    echo "<td>{$row['loan_bank']}</td>";
                    echo "<td>{$row['repayment_method']}</td>";
                    echo "<td>{$row['loan_amount']}</td>";

                    echo "<td>
                            <a href='delete_loan.php?loan_form=({$row['loan_form']})'>删除</a>
                                <a href='detail.php?s_id=()'>修改</a>
                                  </td>";
                    echo "</tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <!-- 奖学金 -->
            <div class="tab-pane fade" id="nav-scholarship" role="tabpanel" aria-labelledby="nav-scholarship-tab">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">奖学金类别</th>
                    <th scope="col">金额</th>
                    <th scope="col">操作</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  //3.执行sql语句，cl并实现解析和遍历
                  $sql = "SELECT * FROM scholarship ";
                  foreach ($conn->query($sql) as $row) {
                    echo "<tr>";
                    echo "<td>{$row['category']}</td>";
                    echo "<td>{$row['amount']}</td>";

                    echo "<td>
                                <a href='javascript:doDel()'>删除</a>
                                <a href='detail.php?s_id=()'>修改</a>
                                  </td>";
                    echo "</tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>



          </div> <!-- 导航栏结束 -->



        </div>
        <!-- ***********************************************************查询详情***************************************************************** -->
        <!-- /////////////////////////////////////////查询详情//////////////////////////////////////////////////////////////////////////////////// -->

        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

          <!-- 查询上边的导航条 -->
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="pills-searchhome-tab" data-toggle="pill" href="#pills-searchhome" role="tab" aria-controls="pills-home" aria-selected="true">学生信息查询</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="pills-searchprofile-tab" data-toggle="pill" href="#pills-searchprofile" role="tab" aria-controls="pills-searchprofile" aria-selected="false">课程信息查询</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="pills-searchcontact-tab" data-toggle="pill" href="#pills-searchcontact" role="tab" aria-controls="pills-searchcontact" aria-selected="false">实践活动信息查询</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="pills-searchschoolship-tab" data-toggle="pill" href="#pills-searchschoolship" role="tab" aria-controls="pills-searchschoolship" aria-selected="false">奖学金信息查询</a>
            </li>
          </ul>

          <div class="tab-content" id="pills-tabContent">
            <!-- 学生信息查询 -->
            <div class="tab-pane fade show active" id="pills-searchhome" role="tabpanel" aria-labelledby="pills-searchhome-tab">
              <!-- 查询框 -->
              <form method="post" action="search_student.php">
                <div class="input-group mb-3 search_ox">
                  <input type="text" class="form-control" placeholder="请输入s_id查询" aria-label="Recipient's username" aria-describedby="button-addon2" name="search">
                  <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit" id="button-addon2">查询</button>
                  </div>
                </div>
              </form>

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
                  // 3.执行sql语句，cl并实现解析和遍历
                  $sql = "SELECT * FROM student WHERE s_id =" . $_GET['s_id'];
                  echo ("要查询的学号：" . $_GET['s_id']);


                  if ($_GET['s_id']) {
                    $sql = "SELECT * FROM student WHERE s_id =" . $_GET['s_id'];
                  } else {
                    $sql = "SELECT * FROM student";
                  }

                  foreach ($conn->query($sql) as $row) {
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
                                <a href='javascript:del_sure({$row['s_id']})'>删除</a>
                                <a href='student_change.php?s_id=({$row['s_id']})'>修改</a>
                                  </td>";
                    echo "</tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <!-- 课程信息查询 -->
            <div class="tab-pane fade" id="pills-searchprofile" role="tabpanel" aria-labelledby="pills-searchprofile-tab">

              <!-- 查询框 -->
              <div class="input-group mb-3 search_ox">
                <input type="text" class="form-control" placeholder="请输入课程编号查询" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-secondary" type="button" id="button-addon2">查询</button>
                </div>
              </div>
              <!-- 查询出来的表格 -->
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">序号</th>
                    <th scope="col">课程编号</th>
                    <th scope="col">课程名称</th>
                    <th scope="col">学期</th>
                    <th scope="col">年</th>
                    <th scope="col">操作</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  //3.执行sql语句，cl并实现解析和遍历
                  $sql = "SELECT * FROM course ";
                  foreach ($conn->query($sql) as $row) {
                    echo "<tr>";
                    echo "<td>{$row['course_id']}</td>";
                    echo "<td>{$row['course_code']}</td>";
                    echo "<td>{$row['course_name']}</td>";
                    echo "<td>{$row['semester']}</td>";
                    echo "<td>{$row['year']}</td>";

                    echo "<td>
                            <a href='javascript:del_sure({$row['s_id']})'>删除</a>
                            <a href='student_change.php?s_id=({$row['s_id']})'>修改</a>
                                // // <a href='javascript:doDel(1)'>删除</a>
                                // <a href='detail.php'>修改</a>
                                  </td>";
                    echo "</tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>

            <!-- s社会实践信息查询 -->
            <div class="tab-pane fade" id="pills-searchcontact" role="tabpanel" aria-labelledby="pills-searchcontact-tab">
              <!-- 查询框 -->
              <div class="input-group mb-3 search_ox">
                <input type="text" class="form-control" placeholder="请输入实践活动名称查询" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-secondary" type="button" id="button-addon2">查询</button>
                </div>
              </div>

              <!-- 社会实践 -->
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">实践活动编号</th>
                    <th scope="col">活动名称</th>
                    <th scope="col">时间</th>
                    <th scope="col">地点</th>
                    <th scope="col">总时长</th>
                    <th scope="col">指导老师</th>
                    <th scope="col">操作</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  //3.执行sql语句，cl并实现解析和遍历
                  $sql = "SELECT * FROM social_practice ";
                  foreach ($conn->query($sql) as $row) {
                    echo "<tr>";
                    echo "<td>{$row['practice_id']}</td>";
                    echo "<td>{$row['practice_experience']}</td>";
                    echo "<td>{$row['date']}</td>";
                    echo "<td>{$row['place']}</td>";
                    echo "<td>{$row['pracetice_time']}</td>";
                    echo "<td>{$row['instructor']}</td>";

                    echo "<td>
                                // <a href='javascript:doDel()'>删除</a>
                                <a href='javascript:del_sure({$row['s_id']})'>删除</a>
                                <a href='student_change.php?s_id=({$row['s_id']})'>修改</a>
                              //   <a href='detail.php?s_id=()'>修改</a>
                                  </td>";
                    echo "</tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>

            <div class="tab-pane fade" id="pills-searchschoolship" role="tabpanel" aria-labelledby="pills-searchschoolship-tab">
              <!-- 查询框 -->
              <div class="input-group mb-3 search_ox">
                <input type="text" class="form-control" placeholder="请输入奖学金类型名称查询" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-secondary" type="button" id="button-addon2">查询</button>
                </div>
              </div>

              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">奖学金类别</th>
                    <th scope="col">金额</th>
                    <th scope="col">操作</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  //3.执行sql语句，cl并实现解析和遍历
                  $sql = "SELECT * FROM scholarship ";
                  foreach ($conn->query($sql) as $row) {
                    echo "<tr>";
                    echo "<td>{$row['category']}</td>";
                    echo "<td>{$row['amount']}</td>";

                    echo "<td>
                                // <a href='javascript:doDel()'>删除</a>
                                <a href='javascript:del_sure({$row['s_id']})'>删除</a>
                                <a href='student_change.php?s_id=({$row['s_id']})'>修改</a>
                                // <a href='detail.php?s_id=()'>修改</a>
                                  </td>";
                    echo "</tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>


          </div>
        </div>
        <!-- ***********************************************************修改密码***************************************************************** -->
        <div class="tab-pane fade" id="v-pills-password" role="tabpanel" aria-labelledby="v-pills-password-tab">
          <form form action="change_password.php" method="post" target="_blank" class="chance_password">
            <div class="form-group">
              <label for="exampleInputEmail1">用户名</label>
              <input type="text" class="userName" name="userName" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">输入你的登陆用户名</small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">旧密码</label>
              <input type="password" class="userpasso" name="userpasso" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">新密码</label>
              <input type="password" class="userpassn" name='userpassn' id="exampleInputPassword1">
            </div>
            <button type="submit" name='changepass' class="btn btn-primary">确认</button>
          </form>
        </div>
        <!-- ***********************************************************设置详情***************************************************************** -->
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">设置详情</div>
      </div>
    </div>





























    <script>
      function del_sure(s_id) { //形参
        if (confirm("确认删除吗") == true) {
          window.location.href = "删除_学生.php?s_id=" + s_id;
        } else {
          return;
        }
      }
      // 添加学生
      function addStudentBtn() {
        window.location.href = "./add/addStudent_info.html";
      }
      // 添加课程
      function addCourse() {
        window.location.href = "./add/addCourse_info.html";
      }
      // 添加社会实践活动
      function addSocial() {
        window.location.href = "./add/addSocial_info.html";
      }
    </script>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>