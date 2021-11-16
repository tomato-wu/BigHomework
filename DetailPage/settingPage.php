<form form action="change_password.php" method="post" target="_blank" class="chance_password">
    <div class="form-group">
        <label for="exampleInputEmail1">用户名</label>
        <input type="text" class="userName" name="userName" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">输入你的登陆用户名</small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">旧密码</label>
        <input type="password" class="userpasso" name="userpasso" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">新密码</label>
        <input type="password" class="userpassn" name='userpassn' id="exampleInputPassword1">
    </div>
    <button type="submit" name='changepass' class="btn btn-primary">确认</button>
</form>