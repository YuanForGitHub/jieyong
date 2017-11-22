<?php
require_once 'conn.php';

if(!isset($_SESSION['user'])){
    header("Location: login.html");
    exit();
}
else if(isset($_POST['first'])){
    $table = ($_SESSION['user']==='root') ? 'admin' : 'user';
    $id = $_SESSION['user_id'];
    $psw = md5($_POST['first']);
    $sql = "SELECT * FROM {$table} WHERE id={$id} AND psw='{$psw}'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)<1){
        echo '<script>alert("密码错误");</script>';
    }
    else if($_POST['second']!=$_POST['check']){
        echo '<script>alert("请确认要修改的密码");</script>';
    }
    else{
        $psw = md5($_POST['second']);
        $sql = "UPDATE {$table} SET psw='{$psw}' WHERE id={$id}";
        mysqli_query($conn, $sql);
        header("Location: index.php");
        exit();
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>changePassword</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link href="/css/bootstrap.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script type="text/JavaScript" src="js/bootstrap.js"></script>
    <style>
        #Card {
            border: 1px solid white;
            box-shadow: 0px 0px 70px 3px lightgray;
            margin-top: 10%;
            padding: 6% 10%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-3"></div>
            <div class="col-xs-6">
                <div id="Card">

                    <!-- Tab panes user-->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="user">
                            <br><br>
                            <form class="form form-horizontal" action="pswChange.php" method="POST">
                                <div class="form-group">
                                    <div class="col-sm-1"></div>
                                    <label for="uname" class="col-sm-3 control-label">原始密码：</label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" name="first" placeholder="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-1"></div>
                                    <label for="upsd" class="col-sm-3 control-label">新的密码：</label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" name="second" placeholder="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-1"></div>
                                    <label for="upsd" class="col-sm-3 control-label">确认密码：</label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" name="check" placeholder="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4"></div>
                                    <input type="submit" class="btn btn-success col-sm-4" value="提交" name="u_submit">
                                    <div class="col-sm-4"></div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div class="span3"></div>
        </div>
    </div>
</body>

</html>