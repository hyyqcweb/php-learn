<?php
    require ('./conn.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $content = $_POST['content'];
        $sql = "insert into board (username, password, content) values ('$username', '$password', '$content');";
        if ($conn -> query($sql) === true) {
            echo "数据插入成功";
            require('./list.php');
        } else {
            echo $conn -> error;
        }
    }
?>
