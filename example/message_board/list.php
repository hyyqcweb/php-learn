<?php
    require ('./conn.php');
    $sql = "select * from board";
    $result = $conn-> query($sql);
    $data = array();
    if ($result) {
        while($row = $result -> fetch_assoc()){
            $data[] = $row;
        }
    } else {
        echo '这是一个空数组';
    }
//    echo "<pre>";
//    print_r ($data);
    require("./details.php");