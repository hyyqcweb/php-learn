<?php
    $serverName = "localhost";
    $userName = 'root';
    $passWord = "root";
    $dbName = 'books';

    $conn = new mysqli($serverName, $userName, $passWord, $dbName);
    if ($conn -> connect_error) die('连接失败!');

    // 初始状态应该是新建表, 然后新建字段
