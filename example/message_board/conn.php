<?php
    $serverName = "localhost";
    $userName = 'root';
    $passWord = "root";
    $dbName = 'books';

    $conn = new mysqli($serverName, $userName, $passWord, $dbName);
    if ($conn -> connect_error) die('连接失败!');

    $sql = "CREATE TABLE board (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                username VARCHAR(30) NOT NULL,
                password VARCHAR(30) NOT NULL,
                content VARCHAR(50)
            )";
    if ($conn -> query($sql) === TRUE) {
        echo "数据库创建成功";
    } else {
        echo "数据库创建失败";
    }

$conn -> close();


