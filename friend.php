<?php
include 'conn.php';

// 登录验证代码
$_SESSION['user_id']=1; // 之后删除
if(!isset($_SESSION['user_id'])){
    exit();
}

$user_id = $_SESSION['user_id'];

// 添加朋友并合并祖先并返回现在的祖先和被改变祖先
function add($a, $b){
    global $conn;

    $sql_1 = "SELECT * FROM user WHERE id={$a}";
    $sql_2 = "SELECT * FROM user WHERE id={$b}";

    $result_1 = mysqli_query($conn, $sql_1);
    $result_2 = mysqli_query($conn, $sql_2);

    $row_1 = mysqli_fetch_assoc($result_1);
    $row_2 = mysqli_fetch_assoc($result_2);

    if($row_1['ancestor']<$row_2['ancestor']){
        $ancestor = $row_1['ancestor'];
        $id = $row_2['id'];
    }
    else if($row_1['ancestor']>$row_2['ancestor']){
        $ancestor = $row_2['ancestor'];
        $id = $row_1['id'];
    }
    else return;

    mysqli_query($conn, "UPDATE user SET ancestor={$ancestor} WHERE id={$id}");
    $change = $id;
    $data = array(
        "ancestor" => $ancestor,
        "change" => $change
    );
    return $data;
}

// 查找不同祖先的朋友并返回朋友id
function find($a){
    global $conn;

    $sql = "SELECT * FROM user WHERE id={$a}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $ancestor = $row['ancestor'];

    $sql = "SELECT * FROM user WHERE ancestor!={$ancestor}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo "找到你的有缘人~~";
    echo $row['grade']."---".$row['major']."---".$row['class']."---".$row['name'];
    return $row['id'];
}

function union($ancestor, $change){
    global $conn;
    
    $sql = "UPDATE user SET ancestor={$ancestor} WHERE ancestor={$change}";
    $result = mysqli_query($conn, $sql);
}

$friend_id = find($user_id);
$arr = add($user_id, $friend_id);
union($arr['ancestor'], $arr['change']);

?>