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
    $imageName = $_FILES['image']['name'];
    $imageTmpName = $_FILES['image']['tmp_name'];
    $imagePath = "C:/wamp64/www/uploads/" . $imageName;

    move_uploaded_file($imageTmpName, $imagePath);

    $sql = "INSERT INTO images (username, story, image_data) VALUES ('$username', '$story', '$imagePath')";
    if($conn->query($sql) === TRUE){
        echo "Story uploaded successfully.";
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
header("location:share_your_story.php");
?>
