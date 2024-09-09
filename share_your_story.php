
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>share Your Story</title>
    <style>
        .gallery img {
            width: 300px;
            height: 300px;
            object-fit: cover;
            margin: 5px;
			margin-left:10%;
           
        }
        h2{
            text-align: center;
           
        }
        body{
            background-color: blueviolet;
        }
        button{
            margin-left: 90%;
        }
    </style>
</head>
<body>
<h2>Stories Collection</h2>
<button><a href="sahee.php">Share Your Story</a></button>
    <div class="gallery">
        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "story";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM images";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                echo "<p><strong>Username:</strong> " . $row["username"]. "</p>";
                echo "<p><strong>Story:</strong> " . $row["story"]. "</p>";
                echo '<img src="'.$row['C:/wamp64/www/uploads'].'" />';
                echo "<hr>";
            }
            
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>