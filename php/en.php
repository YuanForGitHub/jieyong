
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
        }
        table td{
            border: 1px solid green;
            width: 30%;
            height: 30px;
        }
        .nav-left{
            border: 1px solid red;
            position: absolute;
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
    <div>
        en
    </div>
    <div>
        test
    </div>
    <table class="tab">
        <tr class="tr">
            <td class="yes no" style="background-color: yellow;">yes</td>
            <td>yes-three</td>
        </tr>
        <tr>
            <td>yew-two</td>
            <td>yew-four</td>
        </tr>
    </table>

    <script>
        $(function(){
            var num = 0;
            $("td").mousedown(function(){   
                $("body").append('<div class="add" style="position:absolute; z-index:+1; background-color:green; width: 30%;">20:31</div>');
                var pos = $(this).position("top");
                var td = $("td");
                $(".add").css({"left":pos.left, "top":pos.top, "width":td.css("width"), "height":td.css("height")});
                // $("body").mousemove(function(e){
                //     // var height = split(".", td.css("height"));
                //     // num = (e.pageY-pos.top)/td.css("height");
                //     alert(td.css("height"));
                // })
            })
        })
    </script>
</body>

</html>