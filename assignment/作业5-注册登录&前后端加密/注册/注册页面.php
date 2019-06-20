<!DOCTYPE html>
<html>
<head>
<title>注册</title>
<meta name="content-type"; charset=UTF-8">
</head>
<body>
    <div class="content" align="center">
        <!--头部-->
        <div class="header">
        <h1>注册页面</h1>
        </div>
        <!--中部-->
        <div class="middle">
            <form action="registeraction.php" method="post">
                <table border="0">
                    <tr>
                        <td>用户名：</td>
                        <td><input type="text" id="id_name" name="username" required="required"></td>
                    </tr>
                    <tr>
                        <td>密&nbsp;&nbsp;&nbsp;码：</td>
                        <td><input type="password" id="password" name="password" required="required"></td>
                    </tr>
                    <tr>
                        <td>重复密码：</td>
                        <td><input type="password" id="re_password" name="re_password" required="required"></td>
                    </tr>
                    <tr>
                        <td>姓&nbsp;&nbsp;&nbsp;名：</td>
                        <td><input type="text" id="name" name="name" required=""></td>
                    </tr>
                    <td>
                            <input type="radio" id="department" name="department" value="院领导">院领导
                            <input type="radio" id="department" name="department" value="部门领导">部门领导
                            <input type="radio" id="department" name="department" value="系领导">系领导
                    </td>
                    <tr>
                        <td>Email：</td>
                        <td><input type="email" id="email" name="email" required="required"></td>
                    </tr>
                    <tr>
                        <td>默认地点：</td>
                        <td><input type="text" id="default_location" name="default_location" required="required"></td>
                    </tr>
                    <tr>
                        <td>默认事项：</td>
                        <td><input type="text" id="default_event" name="default_event" required="required"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" style="color:red;font-size:10px;">
                        <!--提示信息-->
                            <?php
                                $err=isset($_GET["err"])?$_GET["err"]:"";
                                switch($err) {
                                    case 1:
                                    echo "用户名已存在！";
                                    break;
                                    case 2:
                                    echo "密码与重复密码不一致！";
                                    break;
                                    case 3:
                                    echo "注册成功！";
                                    break;
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" id="register" name="register" value="注册">
                            <input type="reset" id="reset" name="reset" value="重置">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            如果已有账号，快去<a href="login.php">登录</a>吧！
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <!--脚部-->
        <div class="footer">
        <small>Copyright &copy; 
        </div>
    </div>
</body>
</html>
