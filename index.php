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
        div {
            border: 1px solid red;
        }

        .header {
            width: 95%;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <!-- header -->
        <div id="header" class="header text-right">
            <p>
                <?php echo "yes";?>
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span></p>
            <p>欢迎登录</p>
            <p>
                <?php echo "check out";?>
            </p>
        </div>
        <!-- middle -->
        <div class="row">
            <!-- time -->
            <div class="col-xs-4">
                <h4>
                    <?php echo date("Y-m-d");?>
                </h4>
            </div>
            <!-- classroom -->
            <div class="col-xs-1">
                <h4>课室：</h4>
            </div>
            <div class="col-xs-4 dropdown" style="padding-left: 0%;">
                <button type="button" class="btn btn-default dropdown-toggle list" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 90%;">生科院101（容量52人）<span class="caret"></span></button>
                <ul class="dropdown-menu" aria-labelledby="dLabel">
                    <li><a href="#" data-per="1">生科院101（容量52人）</a></li>
                    <li><a href="#" data-per="1">生科院102（容量69人）</a></li>
                    <li><a href="#" data-per="1">生科院103（容量52人）</a></li>
                    <li><a href="#" data-per="1">生科院106（容量75人）</a></li>
                    <li><a href="#" data-per="1">生科院112（容量110人）</a></li>
                    <li><a href="#" data-per="0">会议室213</a></li>
                    <li><a href="#" data-per="0">报告厅119</a></li>
                </ul>
            </div>
            <!-- week -->
            <div class="wrap-btn col-xs-3">
                <div class="btn-group" role="group" aria-label="...">
                    <a id="left" href="index.php?action=left&class=生科院101（容量52人）&p=1">
                        <button type="button" class="btn btn-default" style="width:30%;">
                            <span class="" aria-hidden="true">上周</span>
                        </button>
                    </a>
                    <a id="today" href="index.php?action=today&class=生科院101（容量52人）&p=1">
                        <button type="button" class="btn btn-default" style="width:30%;">
                            <span class="" aria-hidden="true">今周</span>
                        </button>
                    </a>
                    <a id="right" href="index.php?action=right&class=生科院101（容量52人）&p=1">
                        <button type="button" class="btn btn-default" style="width:30%;">
                            <span class="" aria-hidden="true">下周</span>
                        </button>
                    </a>
                </div>
            </div>

        </div>
    </div>
</body>

</html>