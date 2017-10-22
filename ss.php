<?php

// sign in
session_start();

if(!isset($_POST['room'])){
    return false;
}

echo $_SESSION['user'].$_SESSION['room_id'];
echo 

?>