<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Submission</title>
<script>
    function submitForm() {
        // Get form data
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var message = document.getElementById("message").value;

        // Here you can process the form data (e.g., send it to a server, store it in a database, etc.)

        // Display success message
        alert("Your details have been recorded");

        // Prevent default form submission
        return false;
    }
</script>
</head>
<body>

<h2>Form Submission</h2>

<form onsubmit="return submitForm()">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>

    <label for="message">Message:</label><br>
    <textarea id="message" name="message"></textarea><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
