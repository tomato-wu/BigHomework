<!DOCTYPE html>
<html lang="en">

<body>
    <!-- <h2>学生管理系统</h2>
    <a href="index.php"> 浏览</a>
    <a href="add.php"> 添加</a>
    <a href="search.php"> 查找</a> -->

    <!-- <?php echo ($_POST['name'])   ?>;
    <?php echo ($_POST['s_id'])   ?>;
    <?php echo ($_GET['action'])   ?>; -->
    <hr>

    <?php
    //1.连接数据库
    require_once("../conn.php");

    //2.通过action的值做地应操作
    switch ($_GET['action']) {
        case "student":
            //1.获取表单信息
            $name = $_POST['name'];
            $s_id = $_POST['s_id'];
            $class_name = $_POST['class_name'];
            $date_birth = $_POST['date_birth'];
            $data_enrollment = $_POST['data_enrollment'];
            $native_place = $_POST['native_place'];
            $nationality = $_POST['nationality'];
            $home_address = $_POST['home_address'];

            $sql = "UPDATE student SET name='$name',home_address='$home_address',class_name='$class_name',date_birth='$date_birth',data_enrollment='$data_enrollment',native_place='$native_place',nationality='$nationality' WHERE s_id='$s_id'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('修改成功');//弹出框
            window.location='student_change.php?s_id=({$s_id})'</script>";
            } else {
                echo "<script>alert('修改失败');
            window.location='student_change.php?s_id=({$s_id})'</script>";
            }
            break;

            case "course":
                //1.获取表单信息                
                $course_name = $_POST['course_name'];
                $course_id = $_POST['course_id'];
                $semester = $_POST['semester'];
                $year = $_POST['year'];
                $sql = "UPDATE course SET course_name='$course_name',course_id='$course_id',semester='$semester', year='$year' WHERE course_id='$course_id'";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>alert('修改成功');//弹出框
                window.location='course_change.php?course_id=({$course_id})'</script>";
                } else {
                    echo "<script>alert('修改失败');
                window.location='course_change.php?course_id=({$course_id})'</script>";
                }
                break;
        
    }

    ?>
</body>

</html>