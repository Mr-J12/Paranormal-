<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
 <style>
    body {
    font-family: 'Arial', sans-serif;
    background-color: #1c1c1c;
    color: #fff;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form-container {
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 20px 5px rgba(0, 0, 0, 0.5);
}

h1 {
    text-align: center;
    color: #ff6666;
    text-shadow: 2px 2px 4px #000;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #ff6666;
    border-radius: 5px;
    background-color: #1c1c1c;
    color: #fff;
    font-size: 16px;
}

input[type="submit"] {
    background-color: #ff6666;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #ff3333;
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
        <source src="stoyyvid.mp4" type="video/mp4">
        <source src="stoyyvid.webm" type="video/webm">
        <source src="stoyyvid.ogg" type="video/ogg"> 
       </video>
    <div class="form-container">
        <h1>Feedback Form</h1>
        <form action="feeedback_check2.php" method="post">
            <label for="name">Userame:</label>
            <input type="text" name="username" required>
            <label for="email">Email:</label>
            <input type="text"  name="email" required>
            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" rows="6" required></textarea>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
