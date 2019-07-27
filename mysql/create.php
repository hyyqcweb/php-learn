<?php
// 连接数据库
$servername = "localhost";
$username = 'root';
$password = 'root';
$dbname = 'myDB';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn -> connect_error) {
    die("连接失败" . $conn -> connect_error);
} else {
    echo '连接成功!';
    $sql = "CREATE TABLE MyGuests (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP
        )";
    if ($conn -> query($sql) === TRUE) {
        echo "数据库创建成功";
    } else {
        echo "数据库创建失败";
    }
}
$conn -> close();

?>
