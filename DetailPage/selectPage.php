<!-- 查询上边的导航条 -->
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="pills-searchhome-tab" data-toggle="pill" href="#pills-searchhome" role="tab" aria-controls="pills-home" aria-selected="true">学生信息查询</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-searchprofile-tab" data-toggle="pill" href="#pills-searchprofile" role="tab" aria-controls="pills-searchprofile" aria-selected="false">课程信息查询</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-searchcontact-tab" data-toggle="pill" href="#pills-searchcontact" role="tab" aria-controls="pills-searchcontact" aria-selected="false">实践活动信息查询</a>
    </li>
</ul>

<div class="tab-content" id="pills-tabContent">
    <!-- 学生信息查询=============================================================================================================================== -->
    <div class="tab-pane fade show active" id="pills-searchhome" role="tabpanel" aria-labelledby="pills-searchhome-tab">
        <!-- 查询框 -->
        <form method="post" action="./search/search_student.php">
            <div class="input-group mb-3 search_ox">
                <input type="text" class="form-control" placeholder="请输入s_id查询" aria-label="Recipient's username" aria-describedby="button-addon2" name="search">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit" id="button-addon2">查询</button>
                </div>
            </div>
        </form>

        <!-- 查询出来的表格 -->
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
                $sql = "SELECT * FROM student";
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
                      <a href='javascript:del_sure({$row['s_id']})'>删除</a>
                      <a href='student_change.php?s_id=({$row['s_id']})'>修改</a>
                        </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>



    <!-- 课程信息查询========================================================================================================================== -->
    <div class="tab-pane fade" id="pills-searchprofile" role="tabpanel" aria-labelledby="pills-searchprofile-tab">
    <form method="post" action="./search/search_course.php">
        <!-- 查询框 -->
        <div class="input-group mb-3 search_ox">
            <input type="text" class="form-control" placeholder="请输入课程编号查询" aria-label="Recipient's username" aria-describedby="button-addon2" name="search1">
            <div class="input-group-append">
                <button class="btn btn-secondary" type="submit" id="button-addon2">查询</button>
            </div>
        </div>
            </form>
        <!-- 查询出来的表格 -->
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
                  <a href='javascript:del_sure({$row['course_id']})'>删除</a>
                  <a href='course_change.php?course_id=({$row['course_id']})'>修改</a>
                        </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- 社会实践信息查询========================================================================================================================= -->
    <div class="tab-pane fade" id="pills-searchcontact" role="tabpanel" aria-labelledby="pills-searchcontact-tab">
        <!-- 查询框 -->
        <div class="input-group mb-3 search_ox">
            <input type="text" class="form-control" placeholder="请输入实践活动名称查询" aria-label="Recipient's username" aria-describedby="button-addon3">
            <div class="input-group-append">
                <button class="btn btn-secondary" type="button" id="button-addon3">查询</button>
            </div>
        </div>

        <!-- 社会实践 -->
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
                      <a href='javascript:del_sure({$row['practice_id']})'>删除</a>
                      <a href='student_change.php?s_id=({$row['practice_id']})'>修改</a>
                        </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>