<!-- 右边导航栏 -->
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">学生信息</a>
        <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">课程安排表</a>
        <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">社会实践</a>
    </div>
</nav>

<div class="tab-content" id="nav-tabContent">

    <!-- //////////////////////////////////////////////////学生信息（主体）//////////////////////////////////////////////////////////////////// -->
    <!-- ========================================================================================================================================================= -->


    <!-- 学生基本信息表 -->
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <!-- 添加 -->
        <button type="button" class="btn btn-primary addBtnStyle" onclick="addStudentBtn()">添加</button>

        <table class="table">
            <thead class="thead-dark">
                <tr>
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
                    echo "<td>{$row['name']}</td>";
                    echo "<td>{$row['gender']}</td>";
                    echo "<td>{$row['class_name']}</td>";
                    echo "<td>{$row['native_place']}</td>";
                    echo "<td>{$row['date_birth']}</td>";
                    echo "<td>{$row['data_enrollment']}</td>";
                    echo "<td>{$row['nationality']}</td>";
                    echo "<td>{$row['home_address']}</td>";
                    echo "<td>
                                <a href='./delete/delete_student.php?s_id=({$row['s_id']})'>删除</a>
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
                    echo "<td>{$row['course_name']}</td>";
                    echo "<td>{$row['semester']}</td>";
                    echo "<td>{$row['year']}</td>";

                    echo "<td>
                                <a href='./delete/delete_course.php?course_id=({$row['course_id']})'>删除</a>
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
                               <a href='./delete/delete_social_practice.php?practice_id=({$row['practice_id']})'>删除</a>
                               <a href='./change/change_social_practice.php?practice_id=({$row['practice_id']})'>修改</a>
                            </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div> <!-- 导航栏结束 -->