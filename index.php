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
        div {
            border: 1px solid red;
        }

        .header p {
            margin-left: 90%;
            border: 1px solid red;
        }
        .body{
            border: 1px solid purple;
        }
        table {
            float: left;
            width: 12.5%;
        }
        table tr{
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
        .add{
            opacity: 0.7;
            overflow: hidden;
            background-color: yellow;
            position: absolute;
            z-index: +3;
        }
        .added{
            opacity: 0.7;
            overflow: hidden;
            background-color: yellow;
            position: absolute;
            z-index: +3;
        }
        .added:hover{
            overflow: visible;
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
                <button type="button" class="btn btn-default dropdown-toggle list selected" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 90%;">1<span class="caret"></span></button>
                <ul class="dropdown-menu" aria-labelledby="dLabel">
                    <li><a href="#" data-per="1">1</a></li>
                    <li><a href="#" data-per="1">2</a></li>
                    <li><a href="#" data-per="1">3</a></li>
                    <li><a href="#" data-per="1">4</a></li>
                    <li><a href="#" data-per="1">5</a></li>
                    <li><a href="#" data-per="0">6</a></li>
                    <li><a href="#" data-per="0">7</a></li>
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
        <p>one</p>
        <p>two</p>
        <p>three</p>
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
            var $itself;
            var $div;// 创建$('<div class="add"></div>')
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
                $.post("save.php",
                    {
                        reason: $(".reason").val(),
                        hours: num,
                        room: $(".list").text(),
                        day: $parent.attr("class"),
                        start: parseInt($itself.attr("class"))
                    },
                    function(data,status){
                        if(status === 'success'){
                            alert("预约成功！"+$parent.attr("class")+$itself.attr("class"));

                            var str = JSON.parse(data);
                            var content = "借用人:"+str.user+"<br>"+"借用场地:"+str.room+"<br>"+"借用时间:"+str.hours+"个小时"+"<br>"+str.start;

                            // change ClassName
                            $(".add").html(content);
                            $(".add").addClass("added");
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
                            content = "借用人:"+str[$i].user+"<br>"+"借用场地:"+str[$i].room+"<br>"+"借用时间:"+str[$i].hours+"个小时"+"<br>"+str[$i].start;
                            var check = $("html").find("."+str[$i].day);
                            tbody = $("."+str[$i].day).children();
                            tr = tbody.children();
                            pos = tr.eq(str[$i].start).position();
                            $div = $('<div class="add"></div>');//重置div
                            $div.html(content);
                            $("body").append($div);
                            $(".add").css({"left":pos.left, "top":pos.top, "width": width, "height":parseInt(height)*str[$i].hours+"px"});
                            $(".add").addClass("added");
                            $(".added").removeClass("add");
                            $i++;
                        }
                    });
            })
        })
    </script>
</body>

</html>