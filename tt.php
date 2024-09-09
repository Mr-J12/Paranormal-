
<!DOCTYPE html>
<html>
<head>
    <title>Submit Story</title>
</head>
<body>
    <h2>Submit Your Story</h2>
    <form action="action.php" method="post" enctype="multipart/form-data">
        Username: <input type="text" name="username" required><br><br>
        Story: <textarea name="story" required></textarea><br><br>
        Image: <input type="file" name="image" id="image" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
