<?php

if(!isset($_POST['room'])){
    return false;
}
$_SESSION['room'] = $_POST['room'];
echo $_SESSION['room'];
?>