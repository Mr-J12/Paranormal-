<!DOCTYPE html>
<html>
<head>
    <title>Upload Story</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background-color: transparent;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #8B0000;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #8B0000;
        }
        input[type="text"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .backvid{
    position: absolute;
    right: 0;
    bottom: 0;
    z-index: -1;
}
@media (min-aspect-ratio: 16/9){
    .backvid{
        width: 100%;
        height: auto;
    }
}
    </style>
</head>
<body>
<video autoplay loop muted class="backvid">
        <source src="gen.mp4" type="video/mp4">
        <source src="gen.webm" type="video/webm">
        <source src="gen.ogg" type="video/ogg"> 
       </video>
    <div class="container">
        <h2>Share Your Story</h2>
        <form action="action3.php" method="post" enctype="multipart/form-data">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">

            <label for="story">Story:</label>
            <textarea id="story" name="story" rows="5" cols="40"></textarea>

            <label for="image">Image:</label>
            <input type="file" id="image" name="image">

            <input type="submit" name="submit" value="Upload">
        </form>
    </div>
</body>
</html>
