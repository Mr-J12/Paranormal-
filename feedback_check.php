<?php

$username=$_POST['username'];
$email=$_POST['email'];
$feedback=$_POST['feedback'];

$conn= new mysqli("localhost","root","","feedback");

$query=$conn->prepare("insert into feed (username,email,feedback) values (?,?,?)");

$query->bind_param ("sss",$username,$email,$feedback);
$query->execute();
$query->close();
$conn->close();
header("location:demo_page.php");
?>