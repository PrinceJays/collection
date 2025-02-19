<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Register">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        
        // Here, you would normally add code to insert the user data into a database
        // For now, let's just display the input
        echo "<h2>Registration Successful</h2>";
        echo "Username: " . $username . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Password: " . $password . "<br>";
    }
    ?>
</body>
</html>
