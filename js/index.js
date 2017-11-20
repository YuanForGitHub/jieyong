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
            alert(user);
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
                            var content = "理由:"+str.reason+"<br>"+"借用人:"+str.user+"<br>"+"场地:"+str.room+"<br>"+"时间:"+str.hours/2+"个小时";

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
                            content = "理由:"+str[$i].reason+"<br>"+"借用人:"+str[$i].user+"<br>"+"场地:"+str[$i].room+"<br>"+"时间:"+str[$i].hours/2+"个小时";
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
            $(document).on("click", ".lucky", function(){
                $.post("friend.php", function(data, status){
                    alert(data);
                });
            })
            if("<?php echo $user; ?>" === 'root'){
                $(".lucky").hide();
            }
            else{
                $(".edit").hide();
            }
        })