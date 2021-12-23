 <!-- 连接数据库，获取s_id, 根据s_id在数据库中查找对应信息 -->

 <?php
  error_reporting(0);
    //连接数据库
    require_once("./conn.php");
    //拼接sql语句，取出信息
    $sql = "SELECT * FROM student WHERE s_id ={$_GET['s_id']};";
    $result = mysqli_query($conn, $sql);
    $stu = mysqli_fetch_row($result);
    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>学生课程信息修改</title>
     <!-- Bootstrap 的 CSS 文件 -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
     <link rel="stylesheet" href="./css/student_change.css">
     <style>
         .change_box {
             width: 50%;
         }

         .BtnStyle {
             width: 10vw;
             margin: 30px 30px;
         }
     </style>

 </head>

 <body>

     <div class="jumbotron" id="header">
         <h1 class="display-4" style="color: aliceblue;">学生课程信息管理修改</h1>
         <p class="lead" style="color: aliceblue;">This is a simple students' courses information system.</p>
         <hr class="my-4">
     </div>



     <!-- 学生基本信息表修改 -->
     <?php
        $s_id = $_POST['s_id'];
        $course_id = $_POST['course_id'];
        $score = $_POST['score'];
        if (isset($_POST['s_id'])) {
            $sql = "INSERT INTO section(`s_id`,`course_id`,`score`) VALUES ('$s_id','$course_id','$score');";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('修改成功');//弹出框
            window.location='stu_course.php?s_id=({$s_id})'</script>";
            } else {
                echo "<script>alert('修改失败');
            window.location='stu_course.php?s_id=({$s_id})'</script>";
            }
        }
        $sql = "SELECT * FROM student where s_id={$_GET['s_id']} ;";
        $result1 = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result1);

        $sql2 = "SELECT * FROM section WHERE s_id ={$_GET['s_id']};";
        $result2 = mysqli_query($conn, $sql2);
        $section = mysqli_fetch_row($result2);
        ?>

     <form method="post"  class="change_box">
         <div class="form-row">
             <div class="form-group col-md-6">
                 <label for="s_id">学号</label>
                 <input type="text" class="form-control" id="s_id" name='s_id' value="<?php echo $stu[0]; ?>" readonly>
             </div>
         </div>
         <div class="form-group">
             <label for="class_name">课程编号</label>
             <input type="text" class="form-control" id="course_id" name='course_id' value="<?php echo $section[1]; ?>">
         </div>
         <div class="form-group">
             <label for="native_place">课程得分</label>
             <input type="text" class="form-control" id="score" name='score' value="<?php echo $section[2]; ?>">
         </div>
         <div>
             <button type="submit" class="btn btn-outline-primary BtnStyle">添加课程</button>
             <input type="button" class="btn btn-outline-danger BtnStyle" onclick="returnBack()" value="返回"></input>
         </div>
     </form>





     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
     <script>
         function returnBack() {
             window.location.href = "./homepage.php?type=informationPage";
         }
     </script>
 </body>

 </html>