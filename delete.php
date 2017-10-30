<?php
include 'conn.php';

if(!isset($_POST['del'])){
    exit();
}

$data = array(
    "del" => $_POST['del'],
    "user" => $_SESSION['user'],
    "room" => $_SESSION['room'],
    "user_id" => $_SESSION['user_id'],
    "room_id" => $_SESSION['room_id']
);

$sql = "DELETE FROM rend WHERE del='{$data['del']}'";
mysqli_query($conn, $sql);
?>