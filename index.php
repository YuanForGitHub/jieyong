<?php

//登录验证代码

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
        div{
            border: 1px solid red;
        }
        .header{
            width: 95%;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <!-- header -->
        <div id="header" class="header text-right">
            <p><?php echo "yes"; ?><span class="glyphicon glyphicon-user" aria-hidden="true"></span></p>
            <p>欢迎登录</p>
            <p><?php echo "check out"; ?></p>
        </div>
        <!-- middle -->
        <div class="row">
            <div class="col-xs-3">
                <h4><?php echo date("Y-m-d"); ?></h4>
            </div>
            <div class="col-xs-1">
                <h4>课室：</h4>
            </div>
        </div>
    </div>
</body>
</html>