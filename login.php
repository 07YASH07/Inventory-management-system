<?php
// Database connection configuration
$servername = "localhost"; // Change this to your database server address
$username = "your_username"; // Change this to your database username
$password = "your_password"; // Change this to your database password
$dbname = "your_database"; // Change this to your database name

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["pswrd"];

    // Validate the credentials (replace with your own validation logic)
    // Example: Check if the username and password match a user in the database
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Successful login
        // Redirect to the dashboard or another page
        header("Location: dashboard.php");
        exit;
    } else {
        $errorMessage = "Invalid username or password";
    }
}
?>