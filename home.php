<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>登陆页面</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <div class="container">
        <div class="wrap">
            <article>
                <section>
                    <aside>
                        <em>
                            <img src="img/user.png">
                        </em>
                        <form action="loginUser.php" method="post" target='_blank' name="formBox" onsubmit="return LoginBtn()">
                            <p class="name"><i style="background-image:url('./img/user2.png')"></i><input type="text" name="userName" class="userName" placeholder="请输入用户名"></p>
                            <p class="password"><i style="background-image:url('./img/password2.png')"></i><input type="password" name="userPass" class="pwd" placeholder="请输入密码"></p>
                            <button type="submit" name="userSubmit" value="登录">登陆</button>
                            <p class="regist"><span>没有账号?</span><a href="./register/register.php">立即注册</a></p>
                            <div class="clear"></div>
                        </form>
                    </aside>
                </section>
            </article>
        </div>
    </div>




    <script>
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
    </script>
</body>

</html>