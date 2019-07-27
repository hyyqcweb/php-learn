<?php
    // 连接数据库
    $servername = "localhost";
    $username = 'root';
    $password = 'root';

    $conn = new mysqli($servername, $username, $password);
    if ($conn -> connect_error) {
        die("连接失败" . $conn -> connect_error);
    } else {
        echo '连接成功!';
        $sql = "CREATE DATABASE myDB";
        if ($conn -> query($sql) === TRUE) {
            echo "数据库创建成功";
        } else {
            echo "数据库创建失败";
        }
    }
    $conn -> close();

?>
