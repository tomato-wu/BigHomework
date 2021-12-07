<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" crossorigin="anonymous"> -->
  <title>学生个人信息界面</title>
  
</head>

<body>
<!-- <div class="jumbotron" id="header"> -->
         <h1>学生信息展示界面</h1>
         <p class="lead" >This page shows student information.</p>
         <hr class="my-4">
     <!-- </div> -->
     <div class="form-row">
     <p >学生基本信息</p>
     <div class="form-group col-md-6">
                 <label for="s_id">学号</label>
                 <input type="text" class="form-control" id="s_id" name='s_id' value="<?php echo $stu[0]; ?>" readonly>
             </div>
             <div class="form-group col-md-6">
                 <label for="name">姓名</label>
                 <input type="text" class="form-control" id="name" name='name' value="<?php echo $stu[1]; ?>">
             </div>
         </div>
         <div class="form-group">
             <label for="class_name">班级</label>
             <input type="text" class="form-control" id="class_name" name='class_name' placeholder="1234 Main St" value="<?php echo $stu[3]; ?>">
         </div>
         <div class="form-group">
             <label for="native_place">生源地</label>
             <input type="text" class="form-control" id="native_place" name='native_place' placeholder="Apartment, studio, or floor" value="<?php echo $stu[6]; ?>">
         </div>
         <div class="form-group">
             <label for="date_birth">出身日期</label>
             <input type="text" class="form-control" id="date_birth" placeholder="Apartment, studio, or floor" name='date_birth' value="<?php echo $stu[4]; ?>">
         </div>
         <div class="form-group">
             <label for="data_enrollment">入学年份</label>
             <input type="text" class="form-control" id="data_enrollment" placeholder="Apartment, studio, or floor" name='data_enrollment' value="<?php echo $stu[5]; ?>">
         </div>
         <div class="form-row">
             <div class="form-group col-md-6">
                 <label for="home_address">家庭住址</label>
                 <input type="text" class="form-control" id="home_address" name='home_address' value="<?php echo $stu[8]; ?>">
             </div>
             <div class="form-group col-md-6">
                 <label for="nationality">民族</label>
                 <input type="text" class="form-control" id="nationality" name='nationality' value="<?php echo $stu[7]; ?>">
             </div>
             <div class="form-group col-md-4">
                 <label for="gender">性别</label>
                 <select id="gender" class="form-control">
                     <?php
                        if ($stu[2] == "男") {
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
             <p >课程信息</p>
                 <label for="course_id">课程编号</label>
                 <input type="text" class="form-control" id="course_id" name='course_id' value="<?php echo $courseTag[1]; ?>" readonly>
             </div>
             <div class="form-group col-md-6">
                 <label for="course_name">课程名称</label>
                 <input type="text" class="form-control" id="course_name" name='course_name' value="<?php echo $courseTag[0]; ?>">
             </div>
         </div>
         
         <div class="form-group">
             <label for="semester">学期 </label>
             <input type="text" class="form-control" id="semester" name='semester' value="<?php echo $courseTag[2]; ?>">
         </div>
         <div class="form-group">
             <label for="year">年份 </label>
             <input type="text" class="form-control" id="year" name='year' value="<?php echo $courseTag[3]; ?>">
         </div>
         <p >社会实践信息</p>
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
         


</body>

</html>