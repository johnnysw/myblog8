<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="<?php echo site_url();?>">
    <title>登录</title>
</head>
<body>
<form action="user/check_login" method="post">
    <p>
        用户名：<input type="text" name="username">
    </p>
    <p>
        密码：<input type="password" name="password">
    </p>
    <p>
        <input type="submit" value="登录">
    </p>
</form>
</body>
</html>