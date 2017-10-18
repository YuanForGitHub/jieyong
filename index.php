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

        .header p {
            margin-left: 90%;
            border: 1px solid red;
        }
        .body{
            border: 1px solid blue;
        }
        table {
            float: left;
            width: 12.5%;
        }
        table td{
            border: 1px solid green;
            height: 30px;
        }
        table>tr>td {
            background-color: yellow;
        }
        .nav-left{
            border: 1px solid red;
            position: fixed;
            width: 10%;
            height: 30%;
            left: -8%;
            top: 35%;
            transition: 1s;
        }
        .nav-left:hover {
            left: -2%;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <!-- header -->
        <div id="header" class="header">
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


        <div class="body">
            <table class="hours">
                <tr><td></td></tr>
                <tr><td>7:00</td></tr>
                <tr><td>7:30</td></tr>
                <tr><td>8:00</td></tr>
                <tr><td>8:30</td></tr>
                <tr><td>9:00</td></tr>
                <tr><td>9:30</td></tr>
                <tr><td>10:00</td></tr>
                <tr><td>10:30</td></tr>
                <tr><td>11:00</td></tr>
                <tr><td>11:30</td></tr>
                <tr><td>12:00</td></tr>
                <tr><td>12:30</td></tr>
                <tr><td>13:00</td></tr>
                <tr><td>13:30</td></tr>
                <tr><td>14:00</td></tr>
                <tr><td>14:30</td></tr>
                <tr><td>15:00</td></tr>
                <tr><td>15:30</td></tr>
                <tr><td>16:00</td></tr>
                <tr><td>16:30</td></tr>
                <tr><td>17:00</td></tr>
                <tr><td>17:30</td></tr>
                <tr><td>18:00</td></tr>
                <tr><td>18:30</td></tr>
                <tr><td>19:00</td></tr>
                <tr><td>19:30</td></tr>
                <tr><td>20:00</td></tr>
                <tr><td>20:30</td></tr>
                <tr><td>21:00</td></tr>
                <tr><td>21:30</td></tr>
                <tr><td>22:00</td></tr>
                <tr><td>22:30</td></tr>
            </table>
            <table class="weekdays">
                <tr><td><?php echo date("Y-m-d D"); ?></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
            </table>
            <table class=<?php echo date("Y-m-d D", strtotime("+1 day")); ?>>
                <tr><td><?php echo date("Y-m-d D", strtotime("+1 day")); ?></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
            </table>
            <table class=<?php echo date("Y-m-d D", strtotime("+2 day")); ?>>
                <tr><td><?php echo date("Y-m-d D", strtotime("+2 day")); ?></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
            </table>
            <table class=<?php echo date("Y-m-d D", strtotime("+3 day")); ?>>
                <tr><td><?php echo date("Y-m-d D", strtotime("+3 day")); ?></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
            </table>
            <table class=<?php echo date("Y-m-d D", strtotime("+4 day")); ?>>
                <tr><td><?php echo date("Y-m-d D", strtotime("+4 day")); ?></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
            </table>
            <table class=<?php echo date("Y-m-d D", strtotime("+5 day")); ?>>
                <tr><td><?php echo date("Y-m-d D", strtotime("+5 day")); ?></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
            </table>
            <table class=<?php echo date("Y-m-d D", strtotime("+6 day")); ?>>
                <tr><td><?php echo date("Y-m-d D", strtotime("+6 day")); ?></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
            </table>
        </div>
    </div>

    <!-- nav-left -->
    <div class="nav-left">
    <p>one</p>
    <p>two</p>
    <p>three</p>
    </div>

    <script>
        $(function(){
            $("td").click(function(){
                var Parent = $(this).parent();
                var Grand_par = Parent.parent();
                // Grand_par.css("color", "red");
                alert(Grand_par.attr("class"));
            })
        })
    </script>
</body>

</html>