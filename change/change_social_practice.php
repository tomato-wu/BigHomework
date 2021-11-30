 <!-- 连接数据库，获取social_practice_id, 根据social_practice_id在数据库中查找对应信息 -->
 <?php
    //连接数据库
    require_once("../conn.php");
    //拼接sql语句，取出信息
    $sql = "SELECT * FROM social_practice WHERE practice_id ={$_GET['practice_id']};";
    $result = mysqli_query($conn, $sql);
    $social_practiceTag = mysqli_fetch_row($result);
    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>社会实践信息表修改</title>
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
         <h1 class="display-4" style="color: aliceblue;">社会实践信息管理修改</h1>
         <p class="lead" style="color: aliceblue;">This is a simple social_practice information system.</p>
         <hr class="my-4">
     </div>


     <!-- 社会实践信息管理修改 -->
     <?php
        if (isset($_POST['practice_id'])) {
            $sql = "UPDATE social_practice SET 
		    practice_id = '{$_POST['practice_id']}',
		    practice_experience = '{$_POST['practice_experience']}',
		    date = '{$_POST['date']}',
		    place = '{$_POST['place']}',
		    pracetice_time = '{$_POST['pracetice_time']}',
            instructor = '{$_POST['instructor']}',
		    WHERE practice_id = '{$_POST['practice_id']}';";
            mysqli_query($conn, $sql);
        }
        $sql = "SELECT * FROM social_practice where practice_id={$_GET['practice_id']} ;";
        $result1 = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result1);
        ?>

     <form method="post" action="social_practice_change_method.php?action=social_practice" class="change_box">
         <div class="form-row">
             <div class="form-group col-md-6">
                 <label for="practice_id">实践活动编号</label>
                 <input type="text" class="form-control" id="practice_id" name='practice_id' value="<?php echo $social_practiceTag[0]; ?>" readonly>
             </div>
             <div class="form-group col-md-6">
                 <label for="practice_experience">活动名称</label>
                 <input type="text" class="form-control" id="practice_experience" name='practice_experience' value="<?php echo $social_practiceTag[1]; ?>">
             </div>
         </div>
         <div class="form-group">
             <label for="date">时间</label>
             <input type="text" class="form-control" id="date" name='date' value="<?php echo $social_practiceTag[2]; ?>">
         </div>
         <div class="form-group">
             <label for="place">地点</label>
             <input type="text" class="form-control" id="place" name='place' value="<?php echo $social_practiceTag[3]; ?>">
         </div>
         <div class="form-group">
             <label for="pracetice_time">总时长</label>
             <input type="text" class="form-control" id="pracetice_time" name='pracetice_time' value="<?php echo $social_practiceTag[4]; ?>">
         </div>
         <div class="form-group">
             <label for="instructor">指导老师</label>
             <input type="text" class="form-control" id="instructor" name='instructor' value="<?php echo $social_practiceTag[5]; ?>">
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