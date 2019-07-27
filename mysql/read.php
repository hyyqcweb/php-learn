<?php
// 读取数据库数据
$server = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'myDB';

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn -> connect_error) {
    die('连接失败');
}

//$sql = "select id, firstname, lastname, reg_date from myGuests;"; // 字段查询
$sql = "select * from myguests"; // 全部查询
$result = $conn-> query($sql);

if ($result -> num_rows > 0) {
    while ($row = $result -> fetch_assoc()) {
        echo "id: " . $row['id'];
        echo '<br/>';
        echo "first name: " . $row['firstname'];
        echo '<br/>';
        echo "last name: " . $row['lastname'];
        echo '<br/>';
        echo "reg data: " . $row["reg_date"];
        echo '<br/>';
    }
} else {
    echo "结果为0";
}

$conn -> close();