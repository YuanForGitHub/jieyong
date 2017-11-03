<?php
include 'conn.php';

function add($a, $b){
    global $conn;

    $sql_1 = "SELECT * FROM user WHERE id={$a}";
    $sql_2 = "SELECT * FROM user WHERE id={$b}";

    $result_1 = mysqli_query($conn, $sql_1);
    $result_2 = mysqli_query($conn, $sql_2);

    $row_1 = mysqli_fetch_assoc($result_1);
    $row_2 = mysqli_fetch_assoc($result_2);

    if($row_1['ancestor']<$row_2['ancestor']){
        $ancestor = $row_1['ancestor'];
        $id = $row_2['id'];
    }
    else if($row_1['ancestor']>$row_2['ancestor']){
        $ancestor = $row_2['ancestor'];
        $id = $row_1['id'];
    }
    else return;

    mysqli_query($conn, "UPDATE user SET ancestor={$ancestor} WHERE id={$id}");
}

add(1, 2)
?>