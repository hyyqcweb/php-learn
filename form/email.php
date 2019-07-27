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
        <input type="submit" name="submit" value="发射">
    </form>
    <?php
    // 发送邮件
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $to = "junjie_hyyqc@163.com";         // 邮件接收者
            $subject = "我是一个瓜皮";                // 邮件标题
            $message = "皮皮林";  // 邮件正文
            $from = "945845362@qq.com";   // 邮件发送者
            $headers = "From:" . $from;         // 头部信息设置
            mail($to,$subject,$message,$headers);
            echo "邮件已发送";
        }
    ?>
</body>
</html>

