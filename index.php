<?php
include 'conn.php';
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
        div {
            /* border: 1px solid red; */
        }
    
        .header{
            background-color: #89FBF4;
        }
        .header p {
            font-size: 1.2em;
            color: gray;
            margin-left: 90%;
        }
        .time{
            color: #FFCC00;
        }
        .body{
            border: 1px solid purple;
        }
        table {
            float: left;
            width: 12.5%;
        }
        table tr{
            border: 1px solid #DDD;
            height: 30px;
        }
        table td{
            padding-left: 10%;
        }
        table>tr>td {
            background-color: yellow;
        }
        .nav-left{
            border: 1px solid red;
            border-radius: 0px 30px 10px 0px;
            background-color: #FFFF99;
            opacity: 0.8;
            position: fixed;
            width: 10%;
            height: 40%;
            left: -8%;
            top: 35%;
            transition: 1s;
        }
        .nav-left:hover {
            left: -2%;
        }
        .add{
            padding: 1%;
            font-size: 1.1em;
            border-radius: 8px;
            opacity: 0.8;
            overflow: hidden;
            background-color: #FDCAD3;
            position: absolute;
            z-index: +3;
        }
        .added{
            padding: 1%;
            font-size: 1.1em;
            border-radius: 8px;
            opacity: 0.8;
            overflow: hidden;
            background-color: #FDCAD3;
            position: absolute;
            z-index: +3;
        }
        .added:hover{
            overflow: visible;
        }
        .mine{
            background-color: #FDDA81;
        }
        .nav-content{
            display: block;
            width: 100%;
            height: 33%;
            padding-top: 28%;
        }
        .cover{
            display: none;
            position: fixed;
            top: 0px;
            left: 0px;
            outline: 5000px solid rgba(0,0,0,0.3);
            z-index: 10;
        }
    </style>
    <title>Document</title>
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
                <h4>
                    <?php echo date("Y-m-d");?>
                </h4>
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
                <tr><td><?php echo date("Y-m-d D"); ?></td></tr>
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
                <tr><td><?php echo date("Y-m-d D", strtotime("+1 day")); ?></td></tr>
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
                <tr><td><?php echo date("Y-m-d D", strtotime("+2 day")); ?></td></tr>
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
                <tr><td><?php echo date("Y-m-d D", strtotime("+3 day")); ?></td></tr>
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
                <tr><td><?php echo date("Y-m-d D", strtotime("+4 day")); ?></td></tr>
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
                <tr><td><?php echo date("Y-m-d D", strtotime("+5 day")); ?></td></tr>
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
                <tr><td><?php echo date("Y-m-d D", strtotime("+6 day")); ?></td></tr>
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
            <a href="loginOut.php">退出登录</a>
        </div>
        <div class="nav-content text-center">
            <a href="pswChange.php">修改密码</a>
        </div>
        <div class="nav-content text-center" style="border-radius: 0px 0px 10px 0px">
            <a href="friend.php">小幸运</a>
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
        $(function(){
            var num = 0;
            var width = $("td").css("width");
            var height = $("td").css("height");
            var pos;//被点击的单元格位置
            var $parent;//被点击的单元格父元素(array)
            var tbody; //从数据库查询添加的table所属的tbody
            var tr; //定位的tr
            var flag=false;//用来判断是否是点击tr
            var start;//开始的位置
            var data; //ajax传递来的数值
            var del; //delete数据属性，因为delete是保留字，所以只能用del当变量
            var $itself;
            var $div;// 创建$('<div class="add"></div>')
            var user = "<?php echo $_SESSION['user']; ?>"; //用来判断是否是自己的预定
            $(".active").mousedown(function(){
                $("body").append('<div class="add">拖住选择</div>');
                
                pos = $(this).position();
                $(".add").css({"top":pos.top, "left":pos.left, "width":width, "height":height });
                $("body").mousemove(function(e){
                    num = parseInt((e.pageY-pos.top)/parseInt(height))+1;
                    num = (num>0)?num : 1;//防止只选择了一个，却没有覆盖
                    $(".add").css("height", num*parseInt(height)+"px");
                    event.stopPropagation(); 
                })

                $itself = $(this);
                $parent = $(this).parent().parent();//找到table
                flag = true;
            })
            $(document).mouseup(function(){
                if(!flag) return;
                else flag = false;

                $("body").unbind();

                // trigger modal dialog
                $("#Modal").modal(function(){
                    show: true;
                })
            })
            $(".close, .Close").click(function(){
                $(".add").remove();
            })
            $(".send").click(function(){
                // Send Message
                var data;
                del = $itself.attr("class")+'-'+$parent.attr("class");
                $.post("save.php",
                    {
                        reason: $(".reason").val(),
                        hours: num,
                        room: $(".list").text(),
                        day: $parent.attr("class"),
                        start: parseInt($itself.attr("class")),
                        del: del
                    },
                    function(data,status){
                        if(status === 'success'){
                            alert("预约成功！"+$parent.attr("class")+$itself.attr("class"));

                            var str = JSON.parse(data);
                            var content = "理由:"+str.reason+"<br>"+"借用人:"+str.user+"<br>"+"场地:"+str.room+"<br>"+"时间:"+str.hours+"个小时";

                            // change ClassName
                            $(".add").html(content);
                            $(".add").addClass("added");
                            $(".add").attr("del", str.del);
                            $(".add").addClass("mine");
                            $(".added").removeClass("add");

                            // close itself
                            $(".close").trigger("click");
                        }
                    });
            })
            $("li a").click(function(){
                var btn_content = $(this).text()+'<span class="caret"></span>';
                $(".list").html(btn_content);
                // 移除原来的数据
                $(".added").remove();
                // ajax从数据库中读取数据
                $.post("changeRoom.php",
                    {
                        room: $(".list").text()
                    },
                    function(data, status){
                        var str = JSON.parse(data);
                        var $i=0;
                        var content;
                        while($i<str.length && status==='success'){
                            content = "理由:"+str[$i].reason+"<br>"+"借用人:"+str[$i].user+"<br>"+"场地:"+str[$i].room+"<br>"+"时间:"+str[$i].hours+"个小时";
                            var check = $("html").find("."+str[$i].day);
                            if(check.length<1){
                                $i++;
                                continue; // 对象长度小于1，表示没有数据
                            }
                            tbody = $("."+str[$i].day).children();
                            tr = tbody.children();
                            pos = tr.eq(str[$i].start).position();
                            $div = $('<div class="add"></div>');//重置div
                            $div.html(content);
                            $("body").append($div);
                            $(".add").css({"left":pos.left, "top":pos.top, "width": width, "height":parseInt(height)*str[$i].hours+"px"});
                            $(".add").addClass("added");
                            $(".add").attr("del", str[$i].del);
                            if(user==str[$i].user) $(".add").addClass("mine");
                            $(".added").removeClass("add");
                            $i++;
                        }
                    });
            })
            $(document).on("click", ".mine", function(){
                if(user=='root') return false; //防止管理员登录删除自己的时候弹出两次
                var s = confirm("确定删除?");
                if(s===true){
                    del = $(this).attr("del");
                    $.post("delete.php",
                    {
                        del: del
                    })
                    $(this).remove();
                    alert("删除成功！");
                }
            })
            $(document).on("click", ".added", function(){
                if(user=='root'){
                    var s = confirm("确定删除?");
                    if(s===true){
                    del = $(this).attr("del");
                    $.post("delete.php",
                    {
                        del: del
                    })
                    $(this).remove();
                    alert("删除成功！");
                }
                }
            })
            $(document).on("click", ".dayLight", function(){
                // $(".cover").css("display", "none");
                $(".cover").hide();
            })
            $(document).on("click", ".nightLight", function(){
                // $(".cover").css("display", "true");
                $(".cover").show();
            })
        })
    </script>
</body>

</html>