<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录界面</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!-- <section> 标签定义文档中的节（section、区段）。比如章节、页眉、页脚或文档中的其他部分。 -->
    <section>
        <div class="container">
            <!-- 登录模块======================================================================================================== -->

            <div class="user singinBx">
                <div class="imgBx"><img src="./img/p1.jpg" alt=""></div>
                <div class="formBx">
                    <!-- 表单 -->
                    <form action="loginUser.php" method="post" target='_blank' name="formBox" onsubmit="return LoginBtn()">
                        <h2>Sign In</h2>
                        <input type="text" placeholder="Username" name="userName">
                        <input type="password" placeholder="Password" name="userPass">
                        <input type="submit" name="userSubmit" value="Login">
                        <p class="signup">Don't have an account ?<a href="#" onclick="
                            toggleForm();">Sign Up.</a></p>
                    </form>
                </div>
            </div>

            <!-- 注册模块============================================================================================================ -->

            <div class="user singupBx">
                <div class="formBx">
                    <!-- 表单 -->
                    <form action="addUser.php" method="post" target="_blank" name="RegisterFormBox" onsubmit="return registerBtn()">
                        <h2>Create an Account</h2>
                        <input type="text" name="RegisterUserName" placeholder="Username">
                        <input type="password" name="userPass1" placeholder="Create Password">
                        <input type="password" name="userPass2" placeholder="Confirm Password">
                        <input type="text" name="name" placeholder="name">
                        <input type="submit" name="RegisterSubmit" value="Sign up">
                        <p class="signup">Already have an account ?<a href="#" onclick="
                            toggleForm();">Sign In.</a></p>
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
    </script>
</body>

</html>