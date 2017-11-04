<?php

session_start();
$_SESSION['user'] = 'root';
$_SESSION['room']='403';
$_SESSION['user_id']=1;
$_SESSION['room_id']=1;

$user = $_SESSION['user'];
$user_id = $_SESSION['user_id'] ;
$room = $_SESSION['room'];
$room_id = $_SESSION['room_id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
    </style>
    <title>Document</title>
</head>

<body>
    <script>
        $(function(){
            $.post("friend.php", function(data){
                alert(data);
            })
        })
    </script>
</body>

</html>