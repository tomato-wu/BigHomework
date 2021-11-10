 <!-- 连接数据库，获取s_id, 根据s_id在数据库中查找对应信息 -->
 <?php
    //连接数据库
    require_once("../conn.php");
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
         <h1 class="display-4" style="color: aliceblue;">学生信息管理修改</h1>
         <p class="lead" style="color: aliceblue;">This is a simple student information system.</p>
         <hr class="my-4">
     </div>



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

     <form method="post" action="student_change_method.php?action=student" class="change_box">
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
         <div>
             <button type="submit" class="btn btn-outline-primary BtnStyle">修改</button>
             <input type="button" class="btn btn-outline-danger BtnStyle" onclick="returnBack()" value="返回"></input>
         </div>
     </form>





     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
     <script>
         function returnBack() {
             window.location.href = "../homepage.php";
         }
     </script>
 </body>

 </html>