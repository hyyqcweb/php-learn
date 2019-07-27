<?php
// 删除数据库表
$server = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'myDB';

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) die('数据库连接失败!');

$sql = "delete from myguests where lastname='Doe'";

if ($conn ->query($sql)) {
    echo '删除成功!';
} else {
    echo $conn->error;
}

