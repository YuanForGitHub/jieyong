<?php
include 'conn.php';
$name = "";
$index = 0;
$name_arr = array("李","智","文", "等","量","线", "黄","海","成", "李","烁","新", "本","人", "温","冰","洁", "也","上","线", "攀","枝","花");
$major_arr = array("计机","软工","统计","信科","信管","网工");
$grade_arr = array("14","15","16","17");
for($i=0; $i<3; $i++){
    $index = rand(0,22);
    $name.=$name_arr[$index];
}
$index = rand(0, 5);
$major = $major_arr[$index];
$index = rand(0, 3);
$grade = $grade_arr[$index];
$class = rand(1, 9);

$sql = "INSERT INTO user SET name=?, major=?, grade=?, class=?, psw=1";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt,"ssss",$name, $major, $grade, $class);
mysqli_stmt_execute($stmt);

mysqli_stmt_close($stmt);
?>