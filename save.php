<?php
include 'conn.php';
// sign in
session_start();

if(!isset($_POST['room'])){
    return false;
}

$data = array(
    "user" => $_SESSION['user'],
    "room" => $_SESSION['room'],
    "user_id" => $_SESSION['user_id'],
    "room_id" => $_SESSION['room_id'],
    "hours" => $_POST['hours'],
    "reason" => $_POST['reason']
);

// 存入数据库
$sql = "INSERT INTO rend(user, user_id, room, room_id, hours, reason) VALUES(
    '{$data['user']}', 
    {$data['user_id']}, 
    '{$data['room']}', 
    {$data['room_id']}, 
    {$data['hours']}, 
    '{$data['reason']}'
    )";
$result = mysqli_query($conn, $sql);

echo json_encode($data);
?>