<?php
    require ('./conn.php');
    $id = $_GET['id'];
    $sql = "delete from board where id=$id";
    if ($conn ->query($sql)) {
        echo '删除成功';
        require ('./list.php');
    } else {
        echo $conn->error;
    }
