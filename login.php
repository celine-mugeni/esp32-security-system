<?php
session_start();

$conn = mysqli_connect("localhost","root","","security_system");

$user = $_POST['username'];
$pass = $_POST['password'];

$q = mysqli_query($conn,
"SELECT * FROM users WHERE username='$user' AND password='$pass'");

if(mysqli_num_rows($q)>0){
    $_SESSION['admin']=$user;
    header("Location: dashboard.php");
}else{
    header("Location: index.php?error=1");
}
?>
