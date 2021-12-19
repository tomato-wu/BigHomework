<?php require_once("conn.php"); ?>
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
    .addBtnStyle {
      width: 200px;
      float: right;
      margin: 10px;
    }

    .PasswordSetting {
      position: absolute;
      top: 54px;
      right: 35px;
    }
  </style>
</head>

<body>
  <div class="jumbotron" id="header">
    <h1 class="display-4" style="color: aliceblue;">学生信息管理系统</h1>
    <p class="lead" style="color: aliceblue;">This is a simple student information system.</p>
    <button type="button" class="btn btn-primary PasswordSetting" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">修改密码</button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- 提示 -->
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New PassWord</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <!-- 表单 -->
            <form action="./change_password.php" method="post">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">用户名:</label>
                <input type="text" class="form-control" id="recipient-name" name="adminName">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">旧密码:</label>
                <input type="password" class="form-control" name="OldPassWord">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">新密码:</label>
                <input type="password" class="form-control" name='NewPassWord'>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
                <button class="btn btn-primary">确认</button>
              </div>
            </form>
            <!-- 表单 -->

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">

    <div class="col-2">
      <div>
        <a class="nav-link" href="?type=introducePage">首页</a>
        <a class="nav-link" href="?type=informationPage">学生信息</a>
        <a class="nav-link" href="?type=selectPage">查询</a>
      </div>
    </div>


    <div class="col-10">
      <div class="tab-content">
        <!--   表单显示      -->
        <?php
        if ($_GET['type'] == 'introducePage') {
          require_once "./DetailPage/introducePage.html";
        }
        if ($_GET['type'] == 'informationPage') {
          require_once "./DetailPage/informationPage.php";
        }
        if ($_GET['type'] == 'selectPage') {
          require_once "./DetailPage/selectPage.php";
        }
        ?>
      </div>
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

  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <!-- bootstrap -->

</body>

</html>