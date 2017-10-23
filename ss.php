<?php

// sign in
session_start();

if(!isset($_POST['room'])){
    return false;
}

$data = array(
    "user" => $_SESSION['user'],
    "room" => $_SESSION['room'],
    "user_id" => $_SESSION['user_id'],
    "room_id" => $_SESSION['room']
);

echo json_encode($data);
?>