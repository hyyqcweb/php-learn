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
<?php
    require ('./conn.php');
    $id = $_GET['id'];
    $arr = array();
    if (empty($_POST)) {
        $sql = "select * from board where id=$id";
        $result = $conn-> query($sql);
        if ($result) {
            while($row = $result -> fetch_assoc()){
                $arr = $row;
            }
        } else {
            echo 1;
        }
    } else {
        $sql = "update board set username='$_POST[username]', password='$_POST[password]', content='$_POST[content]' where id=$id;";
        if ($conn -> query($sql)) {
            echo '数据更新成功';
            require ('./list.php');
        } else {
            echo '数据更新失败';
        }
    }

?>
    <?php
        if (!empty($arr)) {
            ?>
            <h1>更新数据</h1>
            <form action="./update.php?id=<?=$id?>" method="post">
                username: <input type="text" name="username" value="<?=$arr['username']?>"><br><br>
                password: <input type="password" name="password" value="<?=$arr['password']?>"><br><br>
                content: <input type="text" name="content" value="<?=$arr['content']?>"><br><br>
                <input type="submit" value="更新">
            </form>
        <?php
        }
    ?>
</body>
</html>


