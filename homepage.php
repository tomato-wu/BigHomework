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
  <div class="jumbotron" id="header">
    <h1 class="display-4" style="color: aliceblue;">学生信息管理系统</h1>
    <p class="lead" style="color: aliceblue;">This is a simple student information system.</p>
    <a class="btn btn-danger LoginOut" href="home.php" role="button">退出</a>
  </div>

  <div class="row">

    <div class="col-2">
      <div>
        <a class="nav-link" href="?type=introducePage">首页</a>
        <a class="nav-link" href="?type=informationPage">学生信息</a>
        <a class="nav-link" href="?type=selectPage">查询</a>
        <a class="nav-link" href="?type=settingPage">修改密码</a>
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
        if ($_GET['type'] == 'settingPage') {
          require_once "./DetailPage/settingPage.php";
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