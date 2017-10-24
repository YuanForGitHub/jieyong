<?php

include 'conn.php';

if(!isset($_POST['room'])){
    return false;
}
$_SESSION['room'] = $_POST['room'];

$sql = "SELECT * FROM rend";
$result = mysqli_query($conn, $sql);
$i = 0;
while($row = mysqli_fetch_array($result)){
    $data[$i]['id'] = $row['id'];
    $data[$i]['user'] = $row['user'];
    $data[$i]['user_id'] = $row['user_id'];
    $data[$i]['room'] = $row['room'];
    $data[$i]['room_id'] = $row['room_id'];
    $data[$i]['reason'] = $row['reason'];
    $data[$i]['hours'] = $row['hours'];
    $data[$i]['day'] = $row['day'];
    $data[$i]['start'] = $row['start'];
    $data[$i]['pass'] = $row['pass'];
    $i++;
}

echo json_encode($data);

?>