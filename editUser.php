<?php
require_once 'conn.php';

if(!isset($_SESSION['user'])){
    header("Location: login.html");
    exit();
}
else if(isset($_GET['del'])){
    $sql = "DELETE FROM user WHERE id={$_GET['del']}";
    mysqli_query($conn, $sql);
}
else if(isset($_POST['student_id'])){
$sql = "INSERT INTO user SET student_id='{$_POST['student_id']}', name='{$_POST['name']}', grade='{$_POST['grade']}', major='{$_POST['major']}', class='{$_POST['class']}'";
    mysqli_query($conn, $sql);

    $sql = "SELECT * FROM user WHERE student_id='{$_POST['student_id']}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $sql = "SELECT * FROM user WHERE student_id='{$row['id']}'";
    mysqli_query($conn, $sql);
}
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
    <title>Edit</title>
    <style>
    input[type="text"]{
        width: 51%;
    }
    </style>
</head>

<body>
    <div class="container">
    <hr>
    <table class="table table-striped table-responsive table-bordered table-hover">
        <th>Recent Users</th><th>Recent Rooms</th><th>Reason</th>
        <?php
            require_once 'conn.php';

            $sql = "SELECT * FROM rend ORDER BY id DESC LIMIT 3";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$row['user']."</td><td>".$row['room']."</td><td>".$row['reason']."</td>";
                echo "<tr>";
            }
        ?>
    </table>
    <hr>
        <table class="table table-striped table-responsive table-bordered table-hover">
            <tr>
                <th>id</th><th>grade</th><th>major</th><th>class</th><th>name</th><th>delete</th>
            </tr>
            <tr>
                <div class="container-fluid">
                <form class="form row" action="editUser.php" method="POST" >
                <td><input class="form-control col-xs-3" type="text" name="student_id" placeholder="Id" required></td>
                <td><input class="form-control col-xs-3" type="text" name="grade" placeholder="Grade" required></td>
                <td><input class="form-control col-xs-3" type="text" name="major" placeholder="Major" required></td>
                <td><input class="form-control col-xs-3" type="text" name="class" placeholder="Class" required></td>
                <td><input class="form-control col-xs-3" type="text" name="name" placeholder="Name" required></td>
                <td><input class="btn btn-info" type="submit" value="添加"></td>
                </form>
                </div>
            </tr>
            <?php
                require_once 'conn.php';

                $sql = "SELECT * FROM user";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$row['student_id']."</td><td>".$row['grade']."</td><td>".$row['major']."</td><td>".$row['class']."</td><td>".$row['name']."</td><td>"."<a href='editUser.php?del={$row['id']}' class='btn btn-warning'>删除</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>

</html>