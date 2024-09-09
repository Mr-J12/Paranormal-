<!DOCTYPE html>
<html>
<head>
    <title>Image Gallery</title>
    <style>
        .gallery img {
            width: 300px;
            height: 300px;
            object-fit: cover;
            margin: 5px;
			margin-left:10%;
        }
    </style>
</head>
<body>
    <h2>Image Gallery</h2>
    <div class="gallery">
        <?php
        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "story";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM image";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" /><br>';
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
