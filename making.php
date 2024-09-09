<?php

$name=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];
$pno=$_POST['phoneno'];

$conn= new mysqli("localhost","root","","website");

$query=$conn->prepare("insert into people (username,email,password,phoneno) values (?,?,?,?)");

$query->bind_param ("sssi",$name,$email,$pass,$pno);
$query->execute();
$query->close();
$conn->close();
header("location:home_page.php");
?>