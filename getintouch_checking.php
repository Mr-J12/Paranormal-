<?php

$username=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$conn= new mysqli("localhost","root","","touch");

$query=$conn->prepare("insert into gettouch(username,email,phone,message) values (?,?,?,?)");

$query->bind_param ("isis",$username,$email,$phone, $message);
$query->execute();
$query->close();
$conn->close();
header("location:rl_page.php");
?>
