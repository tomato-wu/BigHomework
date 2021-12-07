<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css.css">
    <title>学生注册界面</title>
</head>

<body>
    <div class="wrap">
        <div class="form">
            <div class="left"><video src="video/video.mp4" muted loop autoplay></video></div>
            <div class="right">

                <div class="right-con">
                    <form action="../addUser.php" method="post" target="_blank" name="RegisterFormBox" onsubmit="return registerBtn()">
                        <h1>学生信息注册</h1>
                        <!-- 账号 =======================================================-->

                        <h3>账号</h3>
                        <input class="text" type="text" name="RegisterUserName" onblur="checkFirstName(this.value)">
                        <span id="txtHint"> </span>
                        <!-- 密码 =======================================================-->

                        <h3>密码</h3>
                        <input class="text" type="password" name="userPass1">
                        <!-- 确认密码 =======================================================-->

                        <h3>确认密码</h3>
                        <input class="text" type="password" name="userPass2" onblur="checkPassword(this.value)">
                        <span id="DoCheckPassword"> </span>

                        <!-- 姓名 =======================================================-->
                        <h3>姓名</h3>
                        <input class="text" type="text" name="name">
                        <!-- 确认按钮 -->
                        <input class="btn" type="submit" value="注册" name="RegisterSubmit">

                    </form>
                    <input class="btn" type="submit" value="返回" onclick="ReturnBack()">
                </div>

            </div>
        </div>
    </div>


    <script>
        function ReturnBack() {
            window.location.href = "../home.php";
        }

        // 注册表单验证
        function registerBtn() {
            if ((document.RegisterFormBox.RegisterUserName.value != '') && (document.RegisterFormBox.userPass1.value != '') && (document.RegisterFormBox
                    .userPass2.value != '') && (document.RegisterFormBox.name.value != '')) {
                // 判断用户名格式是否正确
                isNum = /^[0-9]*$/;
                var user = document.RegisterFormBox.RegisterUserName.value;
                var result = isNum.test(user);
                if (!result) {
                    alert("用户名格式不正确，只能为数字")
                    return false
                } else if (document.RegisterFormBox.userPass1.value != document.RegisterFormBox.userPass2.value) {
                    alert("前后两次密码输入不一致，注册失败！")
                    return false
                } else {
                    return true
                }
            } else {
                alert("注册的账号密码和真实姓名不为空")
                return false
            }
        }

        // ajax验证注册的电话号码是否已经使用
        function checkFirstName(str) {
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
            xmlhttp.open("GET", "checkName.php?q=" + str + "&t=" + Math.random(), true);
            xmlhttp.send();
        }

        // 验证两次密码是否相同
        function checkPassword(password) {
            if (document.RegisterFormBox.userPass1.value != password) {
                document.getElementById("DoCheckPassword").innerHTML = "前后两次密码不一致";
            }
        }
    </script>
</body>

</html>