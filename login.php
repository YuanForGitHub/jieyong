<?php
require 'conn.php';

if(isset($_POST['u_submit'])){
    $sql = "SELECT * FROM user WHERE name='{$_POST['uname']}' AND psw='{$_POST['upsd']}'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num>0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user'] = $row['name'];
        header("Location: index.php");
    }
    else{
        echo "密码错误";
        header("Refresh: 1; url=login.html");
    }
}
else if(isset($_POST['a_submit'])){
    $sql = "SELECT * FROM admin WHERE name='{$_POST['aname']}' AND psw='{$_POST['apsd']}'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num>0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user'] = $row['name'];
        header("Location: index.php");
    }
    else{
        echo "密码错误";
        header("Refresh: 1; url=login.html");
    }
}
else{
    header("Location: login.html");
}