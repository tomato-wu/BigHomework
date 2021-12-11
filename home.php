<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录界面</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        span {
            color: green;
            font-size: small;
        }
    </style>
</head>

<body>
    <!-- <section> 标签定义文档中的节（section、区段）。比如章节、页眉、页脚或文档中的其他部分。 -->
    <section>
        <div class="container">
            <!-- 学生端登录模块======================================================================================================== -->

            <div class="user singinBx">
                <div class="imgBx"><img src="./img/p1.jpg" alt=""></div>
                <div class="formBx">
                    <!-- 表单 -->
                    <form action="loginUser.php" method="post" target='_blank' name="formBox" onsubmit="return LoginBtn()">
                        <h2>学生端登录</h2>
                        <input type="text" placeholder="账号" name="userName" onblur="checkUserName(this.value)">
                        <span id="txtHint"> </span>
                        <input type="password" placeholder="密码" name="userPass">
                        <input type="submit" name="userSubmit" value="登录">
                        <p class="signup">是否是管理员？<a href="#" onclick="
                            toggleForm();">管理端</a></p>
                        <p class="signup">是否是有账号？<a href="#" onclick="
                            gotoRegister();">去注册</a></p>
                    </form>
                </div>
            </div>

            <!-- 管理员登录模块模块============================================================================================================ -->

            <div class="user singupBx">
                <div class="formBx">
                    <!-- 表单 -->
                    <form action="adminLogin.php" method="post" target="_blank" name="adminFormBox" onsubmit="return adminLoginBtn()">
                        <h2>管理端登录</h2>
                        <input type="text" name="adminName" placeholder="管理员账号">
                        <input type="password" name="adminPassword" placeholder="管理员密码">
                        <input type="submit" name="adminSubmit" value="登录">
                        <p class="signup">是否是学生?<a href="#" onclick="
                            toggleForm();">学生端</a></p>
                    </form>
                </div>
                <div class="imgBx"><img src="./img/p2.jpg" alt=""></div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        function toggleForm() {
            var container = document.querySelector('.container');
            //             这个方法可以给dom元素添加类，消除类。
            // 如下面代码片段，当点击toggle标签时，会给这个标签添加和消除“active”类
            container.classList.toggle('active')
        }

        // 登录表单验证
        function LoginBtn() {
            if ((document.formBox.userName.value != '') && (document.formBox.userPass.value != '')) {
                // 判断用户名格式是否正确
                isNum = /^[0-9]*$/;
                var user = document.formBox.userName.value;
                var result = isNum.test(user);
                if (!result) {
                    alert("用户名格式不正确，只能为数字")
                    return false
                } else {
                    return true
                }
            } else {
                alert("账号密码不能为空")
                return false
            }
        }

        // 管理员登录表单验证
        function adminLoginBtn() {
            if ((document.adminFormBox.adminName.value != '') && (document.adminFormBox.adminPassword.value != '')) {
                // 判断用户名格式是否正确
                isAdminNum = /^[0-9]*$/;
                var adminUser = document.adminFormBox.adminName.value;
                var adminResult = isAdminNum.test(adminUser);
                if (!adminResult) {
                    alert("管理员用户名格式不正确，只能为数字")
                    return false
                } else {
                    return true
                }
            } else {
                alert("管理员账号密码不能为空")
                return false
            }
        }

        function gotoRegister() {
            window.location.href = "./StudentRegister/index.php";
        }

        // ajax验证登录的账号是否已经存在
        function checkUserName(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            }
            if (window.XMLHttpRequest) {
                // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
                xmlhttp = new XMLHttpRequest();
            } else {
                // IE6, IE5 浏览器执行代码
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "checkUserName.php?q=" + str + "&t=" + Math.random(), true);
            xmlhttp.send();
        }
    </script>
</body>

</html>