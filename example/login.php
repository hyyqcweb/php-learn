<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        username: <input type="text" name="username"><br><br>
        password: <input type="password" name="password"> <br><br>
        <input type="submit" value="提交">
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($_POST['username'] === 'root' && $_POST['password'] === 'root') {
                echo '登录成功!';
                echo '<br/>';
                echo '你好啊, 瓜皮!';
            }
        }
    ?>
</body>
</html>