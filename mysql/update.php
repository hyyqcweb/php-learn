<?php
$server = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'myDB';

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn -> connect_error) {
    die('数据库连接失败');
}

$sql = "update myguests set email='3@qq.com' where firstname='john' and lastname='Doe'";

if ($conn -> query($sql)) {
    echo '更新成功!';
} else {
    echo $conn -> error;
}