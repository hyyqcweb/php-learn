<?php
    $serverName = "localhost";
    $userName = 'root';
    $passWord = "root";
    $dbName = 'books';

    $conn = new mysqli($serverName, $userName, $passWord, $dbName);
    if ($conn -> connect_error) die('连接失败!');

