<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <title>注册页面</title>
    <!-- bootstrap样式文件 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/regist.css">
</head>
<style>
    body {
        background-color: rgb(28, 133, 189);
    }

    .main {
        border-radius: 30px;
        background-color: white;
        width: 400px;
    }
</style>

<body>
    <div class="wrapper">
        <article>
            <div class="main">
                <form action="addUser.php" method="post" target="_blank" class="formBox">

                    <div class="userName">
                        <input type="text" name="userName" placeholder="用户名">
                        <small id="emailHelp" class="form-text text-muted">最多20个字符</small>
                    </div>

                    <div class="userPass1">
                        <input type="password" name="userPass1" placeholder="密码">
                        <small id="emailHelp" class="form-text text-muted">第一次输入密码</small>
                    </div>

                    <div class="userPass2">
                        <input type="password" name="userPass2" placeholder="确认密码">
                        <small id="emailHelp" class="form-text text-muted">请确认输入的密码</small>
                    </div>

                    <div class="name">
                        <input type="text" name="name" placeholder="输入名字">
                        <small id="emailHelp" class="form-text text-muted">请输入真实姓名</small>
                    </div>

                    <button class="btn btn-primary" type="submit" name="userSubmit" value="注册">注册</button>

                    <button class="btn btn-outline-primary" onclick="returnBack()">返回</button>
                </form>
            </div>
        </article>
    </div>



    <script>
        function returnBack() {
            window.location.href = 'home.php'
        }
    </script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>

</html>