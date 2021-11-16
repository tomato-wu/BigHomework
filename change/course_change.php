 <!-- 连接数据库，获取course_id, 根据course_id在数据库中查找对应信息 -->
 <?php
    //连接数据库
    require_once("../conn.php");
    //拼接sql语句，取出信息
    $sql = "SELECT * FROM course WHERE course_id ={$_GET['course_id']};";
    $result = mysqli_query($conn, $sql);
    $courseTag = mysqli_fetch_row($result);
    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>学生基本信息表修改</title>
     <!-- Bootstrap 的 CSS 文件 -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
     <link rel="stylesheet" href="../css/student_change.css">
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
         <h1 class="display-4" style="color: aliceblue;">课程管理修改</h1>
         <p class="lead" style="color: aliceblue;">This is a simple course information system.</p>
         <hr class="my-4">
     </div>



     <!-- 学生基本信息表修改 -->
     <?php
        if (isset($_POST['course_id'])) {
            $sql = "UPDATE course SET 
		course_id = '{$_POST['course_id']}',
		course_name = '{$_POST['course_name']}',
		course_code = '{$_POST['course_code']}',
		semester = '{$_POST['semester']}',
		year = '{$_POST['year']}',
		WHERE course_id = '{$_POST['course_id']}';";
            mysqli_query($conn, $sql);
        }
        $sql = "SELECT * FROM course where course_id={$_GET['course_id']} ;";
        $result1 = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result1);
        ?>

     <form method="post" action="course_change_method.php?action=course" class="change_box">
         <div class="form-row">
             <div class="form-group col-md-6">
                 <label for="course_id">课程ID</label>
                 <input type="text" class="form-control" id="course_id" name='course_id' value="<?php echo $courseTag[0]; ?>" readonly>
             </div>
             <div class="form-group col-md-6">
                 <label for="course_name">课程名称</label>
                 <input type="text" class="form-control" id="course_name" name='course_name' value="<?php echo $courseTag[1]; ?>">
             </div>
         </div>
         <div class="form-group">
             <label for="course_code">课程编号</label>
             <input type="text" class="form-control" id="course_code" name='course_code' value="<?php echo $courseTag[2]; ?>">
         </div>
         <div class="form-group">
             <label for="native_place">学期 </label>
             <input type="text" class="form-control" id="native_place" name='native_place' value="<?php echo $courseTag[3]; ?>">
         </div>
         <div class="form-group">
             <label for="native_place">年份 </label>
             <input type="text" class="form-control" id="native_place" name='native_place' value="<?php echo $courseTag[4]; ?>">
         </div>

         <div>
             <button type="submit" class="btn btn-outline-primary BtnStyle">修改</button>
             <input type="button" class="btn btn-outline-danger BtnStyle" onclick="returnBack()" value="返回"></input>
         </div>
     </form>

     <!-- bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
     <script>
         function returnBack() {
             window.location.href = "../homepage.php?type=informationPage";
         }
     </script>
 </body>

 </html>