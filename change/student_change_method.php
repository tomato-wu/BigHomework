<!DOCTYPE html>
<html lang="en">

<body>
    <h2>学生管理系统</h2>
    <a href="index.php"> 浏览</a>
    <a href="add.php"> 添加</a>
    <a href="search.php"> 查找</a>

    <?php echo ($_POST['name'])   ?>;
    <?php echo ($_POST['s_id'])   ?>;
    <?php echo ($_GET['action'])   ?>;
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

        case "section":
            //1.获取表单信息
            $course_id = $_POST['course_id'];
            $course_name = $_POST['course_name'];
            $grade = $_POST['grade'];
            $s_id = $_POST['s_id'];

            $sql = "UPDATE section SET course_id='$course_id',grade='$grade',course_name='$course_name' WHERE s_id='$s_id'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('修改成功');//弹出框
            window.location='student_change.php?s_id=({$s_id})'</script>";
            } else {
                echo "<script>alert('修改失败');
            window.location='student_change.php?s_id=({$s_id})'</script>";
            }
            break;

        case "student_scholarship":
            $s_id = $_POST['s_id'];
            $total_grade = $_POST['total_grade'];
            $total_score = $_POST['total_score'];
            $category = $_POST['category'];

            $sql = "UPDATE student_scholarship SET total_grade='$total_grade',total_score='$total_score',category='$category' WHERE s_id='$s_id'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('修改成功');//弹出框
            window.location='student_change.php?s_id=({$s_id})'</script>";
            } else {
                echo "<script>alert('修改失败');
            window.location='student_change.php?s_id=({$s_id})'</script>";
            }
            break;

        case "s_com_test":
            //1.获取表单信息
            $s_id = $_POST['s_id'];
            $event = $_POST['event'];
            $event_id = $_POST['event_id'];
            $score = $_POST['score'];

            $sql = "UPDATE s_com_test SET event='$event',event_id='$event_id',score='$score' WHERE s_id='$s_id'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('修改成功');//弹出框
            window.location='student_change.php?s_id=({$s_id})'</script>";
            } else {
                echo "<script>alert('修改失败');
            window.location='student_change.php?s_id=({$s_id})'</script>";
            }
            break;
    }

    ?>
</body>

</html>