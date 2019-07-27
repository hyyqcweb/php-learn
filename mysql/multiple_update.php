<?php
// 多条插入数据
$server = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn -> connect_error) {
    die("连接失败: " . $conn -> connect_error);
}

$sql = "insert into MyGuests (firstname, lastname, email) values ('john', 'Doe', 'john@example.com');";
$sql .= "insert into MyGuests (firstname, lastname, email, reg_date) values ('iphone', 'x', '1@qq.com', '2019-07-27');";
$sql .= "insert into MyGuests (firstname, lastname, email, reg_date) values ('iphone', 'xs', '2@qq.com', '2019-09-29');";

if ($conn -> multi_query($sql) === true) {
    echo "新纪录插入成功";
} else {
    echo $conn -> error;
}

$conn -> close();
