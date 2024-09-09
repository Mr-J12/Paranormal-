<?php
$username=$_POST['username'];
$password=$_POST['password'];

$conn=new mysqli("localhost","root","","website");

if ($conn->connect_error){
die("Failed Connection:".$conn->connect_error);}

else{
	$statement=$conn->prepare("select * from people where username = ? ");
   
    $statement->bind_param("s",$username);
	$statement->execute();
	$stmt_res=$statement->get_result();
}
if ($stmt_res->num_rows>0){
    $data=$stmt_res->fetch_assoc();

if($data['password']===$password)
{echo "<h2> successfully logged in </h2>";
header ("location:home_page.php");
}

else 
{ echo"<h2> invalid username or password</h2>";
header ("location:loggin.php");}	
}
else 
{echo "<h2> invalid username or password</h2>";
	header ("location:loggin.php");
}
?>