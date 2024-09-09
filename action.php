<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "story";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $story = $_POST['story'];
    $image = $_FILES['image']['tmp_name'];

    $imgContent = addslashes(file_get_contents($image));

 
    $sql = "INSERT INTO images (username, story, image_data) VALUES ('$username', '$story', '$imgContent')";
    if($conn->query($sql) === TRUE){
        echo "Story uploaded successfully.";
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
