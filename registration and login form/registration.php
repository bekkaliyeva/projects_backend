<?php

    session_start();

$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'task1');
header('location:index.php');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from registr  where name = '$name' ";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num==1){
    echo "Username already taken";
    
}else{
    $reg = "insert into registr(name, password) values ('$name', '$pass')";
    
    mysqli_query($con, $reg);
    echo"registration successful";
}
    
    
    
    
    ?>
