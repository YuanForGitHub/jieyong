<?php
include 'conn.php';

if(!isset($_SESSION['user']) || !isset($_SESSION['user_id'])){
    header("Location: login.html");
    exit();
}

$user = $_SESSION['user'];
$user_id = $_SESSION['user_id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>课室借用</title>
</head>

<body>
    <div class="cover"></div>

    <div class="container">
        <!-- header -->
        <div id="header" class="header">
            <p>
                <?php echo $user;?>
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span></p>
            <p>欢迎登录</p>
        </div>
        <!-- middle -->
        <div class="row" style="margin-top: 1%">
            <!-- time -->
            <div class="col-xs-4 time">
                <?php echo date("Y-m-d");?>
            </div>
            <!-- classroom -->
            <div class="col-xs-1">
                <h4>课室：</h4>
            </div>
            <div class="col-xs-4 dropdown" style="padding-left: 0%;">
                <button type="button" class="btn btn-default dropdown-toggle list selected" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 90%;">请选择课室<span class="caret"></span></button>
                <ul class="dropdown-menu" aria-labelledby="dLabel">
                    <li><a href="#" data-per="1">教四101</a></li>
                    <li><a href="#" data-per="1">教四202</a></li>
                    <li><a href="#" data-per="1">教四303</a></li>
                    <li><a href="#" data-per="1">教四404</a></li>
                    <li><a href="#" data-per="1">教四505</a></li>
                    <li><a href="#" data-per="0">教四606</a></li>
                    <li><a href="#" data-per="0">教四707</a></li>
                </ul>
            </div>
            <!-- week -->
            <div class="wrap-btn col-xs-3 text-center">
                <div class="btn-group" role="group" aria-label="...">
                    <a id="left" href="#">
                        <button type="button" class="btn btn-info dayLight" style="width:47%;">
                            <span class="" aria-hidden="true">白天模式</span>
                        </button>
                    </a>
                    <a id="right" href="#">
                        <button type="button" class="btn btn-primary nightLight" style="width:47%;">
                            <span class="" aria-hidden="true">夜间模式</span>
                        </button>
                    </a>
                </div>
            </div>

        </div>


        <div class="body" style="margin-top: 1%">
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
            <table class=<?php echo date("Y-m-d D"); ?>>
                <tr style="background-color: #CDE2F6;"><td><?php echo date("m-d D"); ?></td></tr>
                <tr class="1 active"><td></td></tr>
                <tr class="2 active"><td></td></tr>
                <tr class="3 active"><td></td></tr>
                <tr class="4 active"><td></td></tr>
                <tr class="5 active"><td></td></tr>
                <tr class="6 active"><td></td></tr>
                <tr class="7 active"><td></td></tr>
                <tr class="8 active"><td></td></tr>
                <tr class="9 active"><td></td></tr>
                <tr class="10 active"><td></td></tr>
                <tr class="11 active"><td></td></tr>
                <tr class="12 active"><td></td></tr>
                <tr class="13 active"><td></td></tr>
                <tr class="14 active"><td></td></tr>
                <tr class="15 active"><td></td></tr>
                <tr class="16 active"><td></td></tr>
                <tr class="17 active"><td></td></tr>
                <tr class="18 active"><td></td></tr>
                <tr class="19 active"><td></td></tr>
                <tr class="20 active"><td></td></tr>
                <tr class="21 active"><td></td></tr>
                <tr class="22 active"><td></td></tr>
                <tr class="23 active"><td></td></tr>
                <tr class="24 active"><td></td></tr>
                <tr class="25 active"><td></td></tr>
                <tr class="26 active"><td></td></tr>
                <tr class="27 active"><td></td></tr>
                <tr class="28 active"><td></td></tr>
                <tr class="29 active"><td></td></tr>
                <tr class="30 active"><td></td></tr>
                <tr class="31 active"><td></td></tr>
                <tr class="32 active"><td></td></tr>
            </table>
            <table class=<?php echo date("Y-m-d D", strtotime("+1 day")); ?>>
                <tr style="background-color: #CDE2F6;"><td><?php echo date("m-d D", strtotime("+1 day")); ?></td></tr>
                <tr class="1 active"><td></td></tr>
                <tr class="2 active"><td></td></tr>
                <tr class="3 active"><td></td></tr>
                <tr class="4 active"><td></td></tr>
                <tr class="5 active"><td></td></tr>
                <tr class="6 active"><td></td></tr>
                <tr class="7 active"><td></td></tr>
                <tr class="8 active"><td></td></tr>
                <tr class="9 active"><td></td></tr>
                <tr class="10 active"><td></td></tr>
                <tr class="11 active"><td></td></tr>
                <tr class="12 active"><td></td></tr>
                <tr class="13 active"><td></td></tr>
                <tr class="14 active"><td></td></tr>
                <tr class="15 active"><td></td></tr>
                <tr class="16 active"><td></td></tr>
                <tr class="17 active"><td></td></tr>
                <tr class="18 active"><td></td></tr>
                <tr class="19 active"><td></td></tr>
                <tr class="20 active"><td></td></tr>
                <tr class="21 active"><td></td></tr>
                <tr class="22 active"><td></td></tr>
                <tr class="23 active"><td></td></tr>
                <tr class="24 active"><td></td></tr>
                <tr class="25 active"><td></td></tr>
                <tr class="26 active"><td></td></tr>
                <tr class="27 active"><td></td></tr>
                <tr class="28 active"><td></td></tr>
                <tr class="29 active"><td></td></tr>
                <tr class="30 active"><td></td></tr>
                <tr class="31 active"><td></td></tr>
                <tr class="32 active"><td></td></tr>
            </table>
            <table class=<?php echo date("Y-m-d D", strtotime("+2 day")); ?>>
                <tr style="background-color: #CDE2F6;"><td><?php echo date("m-d D", strtotime("+2 day")); ?></td></tr>
                <tr class="1 active"><td></td></tr>
                <tr class="2 active"><td></td></tr>
                <tr class="3 active"><td></td></tr>
                <tr class="4 active"><td></td></tr>
                <tr class="5 active"><td></td></tr>
                <tr class="6 active"><td></td></tr>
                <tr class="7 active"><td></td></tr>
                <tr class="8 active"><td></td></tr>
                <tr class="9 active"><td></td></tr>
                <tr class="10 active"><td></td></tr>
                <tr class="11 active"><td></td></tr>
                <tr class="12 active"><td></td></tr>
                <tr class="13 active"><td></td></tr>
                <tr class="14 active"><td></td></tr>
                <tr class="15 active"><td></td></tr>
                <tr class="16 active"><td></td></tr>
                <tr class="17 active"><td></td></tr>
                <tr class="18 active"><td></td></tr>
                <tr class="19 active"><td></td></tr>
                <tr class="20 active"><td></td></tr>
                <tr class="21 active"><td></td></tr>
                <tr class="22 active"><td></td></tr>
                <tr class="23 active"><td></td></tr>
                <tr class="24 active"><td></td></tr>
                <tr class="25 active"><td></td></tr>
                <tr class="26 active"><td></td></tr>
                <tr class="27 active"><td></td></tr>
                <tr class="28 active"><td></td></tr>
                <tr class="29 active"><td></td></tr>
                <tr class="30 active"><td></td></tr>
                <tr class="31 active"><td></td></tr>
                <tr class="32 active"><td></td></tr>
            </table>
            <table class=<?php echo date("Y-m-d D", strtotime("+3 day")); ?>>
                <tr style="background-color: #CDE2F6;"><td><?php echo date("m-d D", strtotime("+3 day")); ?></td></tr>
                <tr class="1 active"><td></td></tr>
                <tr class="2 active"><td></td></tr>
                <tr class="3 active"><td></td></tr>
                <tr class="4 active"><td></td></tr>
                <tr class="5 active"><td></td></tr>
                <tr class="6 active"><td></td></tr>
                <tr class="7 active"><td></td></tr>
                <tr class="8 active"><td></td></tr>
                <tr class="9 active"><td></td></tr>
                <tr class="10 active"><td></td></tr>
                <tr class="11 active"><td></td></tr>
                <tr class="12 active"><td></td></tr>
                <tr class="13 active"><td></td></tr>
                <tr class="14 active"><td></td></tr>
                <tr class="15 active"><td></td></tr>
                <tr class="16 active"><td></td></tr>
                <tr class="17 active"><td></td></tr>
                <tr class="18 active"><td></td></tr>
                <tr class="19 active"><td></td></tr>
                <tr class="20 active"><td></td></tr>
                <tr class="21 active"><td></td></tr>
                <tr class="22 active"><td></td></tr>
                <tr class="23 active"><td></td></tr>
                <tr class="24 active"><td></td></tr>
                <tr class="25 active"><td></td></tr>
                <tr class="26 active"><td></td></tr>
                <tr class="27 active"><td></td></tr>
                <tr class="28 active"><td></td></tr>
                <tr class="29 active"><td></td></tr>
                <tr class="30 active"><td></td></tr>
                <tr class="31 active"><td></td></tr>
                <tr class="32 active"><td></td></tr>
            </table>
            <table class=<?php echo date("Y-m-d D", strtotime("+4 day")); ?>>
                <tr style="background-color: #CDE2F6;"><td><?php echo date("m-d D", strtotime("+4 day")); ?></td></tr>
                <tr class="1 active"><td></td></tr>
                <tr class="2 active"><td></td></tr>
                <tr class="3 active"><td></td></tr>
                <tr class="4 active"><td></td></tr>
                <tr class="5 active"><td></td></tr>
                <tr class="6 active"><td></td></tr>
                <tr class="7 active"><td></td></tr>
                <tr class="8 active"><td></td></tr>
                <tr class="9 active"><td></td></tr>
                <tr class="10 active"><td></td></tr>
                <tr class="11 active"><td></td></tr>
                <tr class="12 active"><td></td></tr>
                <tr class="13 active"><td></td></tr>
                <tr class="14 active"><td></td></tr>
                <tr class="15 active"><td></td></tr>
                <tr class="16 active"><td></td></tr>
                <tr class="17 active"><td></td></tr>
                <tr class="18 active"><td></td></tr>
                <tr class="19 active"><td></td></tr>
                <tr class="20 active"><td></td></tr>
                <tr class="21 active"><td></td></tr>
                <tr class="22 active"><td></td></tr>
                <tr class="23 active"><td></td></tr>
                <tr class="24 active"><td></td></tr>
                <tr class="25 active"><td></td></tr>
                <tr class="26 active"><td></td></tr>
                <tr class="27 active"><td></td></tr>
                <tr class="28 active"><td></td></tr>
                <tr class="29 active"><td></td></tr>
                <tr class="30 active"><td></td></tr>
                <tr class="31 active"><td></td></tr>
                <tr class="32 active"><td></td></tr>
            </table>
            <table class=<?php echo date("Y-m-d D", strtotime("+5 day")); ?>>
                <tr style="background-color: #CDE2F6;"><td><?php echo date("m-d D", strtotime("+5 day")); ?></td></tr>
                <tr class="1 active"><td></td></tr>
                <tr class="2 active"><td></td></tr>
                <tr class="3 active"><td></td></tr>
                <tr class="4 active"><td></td></tr>
                <tr class="5 active"><td></td></tr>
                <tr class="6 active"><td></td></tr>
                <tr class="7 active"><td></td></tr>
                <tr class="8 active"><td></td></tr>
                <tr class="9 active"><td></td></tr>
                <tr class="10 active"><td></td></tr>
                <tr class="11 active"><td></td></tr>
                <tr class="12 active"><td></td></tr>
                <tr class="13 active"><td></td></tr>
                <tr class="14 active"><td></td></tr>
                <tr class="15 active"><td></td></tr>
                <tr class="16 active"><td></td></tr>
                <tr class="17 active"><td></td></tr>
                <tr class="18 active"><td></td></tr>
                <tr class="19 active"><td></td></tr>
                <tr class="20 active"><td></td></tr>
                <tr class="21 active"><td></td></tr>
                <tr class="22 active"><td></td></tr>
                <tr class="23 active"><td></td></tr>
                <tr class="24 active"><td></td></tr>
                <tr class="25 active"><td></td></tr>
                <tr class="26 active"><td></td></tr>
                <tr class="27 active"><td></td></tr>
                <tr class="28 active"><td></td></tr>
                <tr class="29 active"><td></td></tr>
                <tr class="30 active"><td></td></tr>
                <tr class="31 active"><td></td></tr>
                <tr class="32 active"><td></td></tr>
            </table>
            <table class=<?php echo date("Y-m-d D", strtotime("+6 day")); ?>>
                <tr style="background-color: #CDE2F6;"><td><?php echo date("m-d D", strtotime("+6 day")); ?></td></tr>
                <tr class="1 active"><td></td></tr>
                <tr class="2 active"><td></td></tr>
                <tr class="3 active"><td></td></tr>
                <tr class="4 active"><td></td></tr>
                <tr class="5 active"><td></td></tr>
                <tr class="6 active"><td></td></tr>
                <tr class="7 active"><td></td></tr>
                <tr class="8 active"><td></td></tr>
                <tr class="9 active"><td></td></tr>
                <tr class="10 active"><td></td></tr>
                <tr class="11 active"><td></td></tr>
                <tr class="12 active"><td></td></tr>
                <tr class="13 active"><td></td></tr>
                <tr class="14 active"><td></td></tr>
                <tr class="15 active"><td></td></tr>
                <tr class="16 active"><td></td></tr>
                <tr class="17 active"><td></td></tr>
                <tr class="18 active"><td></td></tr>
                <tr class="19 active"><td></td></tr>
                <tr class="20 active"><td></td></tr>
                <tr class="21 active"><td></td></tr>
                <tr class="22 active"><td></td></tr>
                <tr class="23 active"><td></td></tr>
                <tr class="24 active"><td></td></tr>
                <tr class="25 active"><td></td></tr>
                <tr class="26 active"><td></td></tr>
                <tr class="27 active"><td></td></tr>
                <tr class="28 active"><td></td></tr>
                <tr class="29 active"><td></td></tr>
                <tr class="30 active"><td></td></tr>
                <tr class="31 active"><td></td></tr>
                <tr class="32 active"><td></td></tr>
            </table>
        </div>
    </div>

    <!-- nav-left -->
    <div class="nav-left">
        <div class="nav-content text-center" style="border-radius: 0px 30px 0px 0px">
            <a href="logOut.php">退出登录</a>
        </div>
        <div class="nav-content text-center">
            <a href="pswChange.php">修改密码</a>
        </div>
        <div class="nav-content text-center lucky" style="border-radius: 0px 0px 10px 0px">
            <a href="#">小幸运</a>
        </div>
        <div class="nav-content text-center edit">
            <a href="editUser.php" target="_blank">编辑用户</a>
        </div>
    </div>

    <!-- modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">open</button> -->
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModallLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="exampleModalLabel">NewMessage</h4>
                </div>
                <div class="modal-body">
                    <form class="form">
                        <textarea class="form-control reason" rows="" cols=""></textarea>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default Close" data-dismiss="modal">Close</button>
                    <button tupe="button" class="btn btn-primary send">SendMessage</button>
                </div>
            </div>
        </div>
    </div>

    </button>
    <script>
        var user = "<?php echo $_SESSION['user']; ?>"; //用来判断是否是自己的预定，而且含有PHP语句，不能放到js里面
    </script>
    <script src="js/index.js"></script>
    
</body>

</html>