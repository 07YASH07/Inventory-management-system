<?php
// Database connection configuration
$servername = "http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=testreg&table=registration"; // Change this to your database server address
$username = "Your username";
$useremail = "user email";
$repeatpassword = "repeat password"; // Change this to your database username
$password = "Your password"; // Change this to your database password
$dbname = "your_database"; // Change this to your database name

// Create a database connection
$conn = new mysqli($localhost, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If the connection is successful, you can perform database operations here.
// For example, you can execute SQL queries using $conn->query() method.

// Example: Retrieving data from a table named 'users'
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Process the data (e.g., fetch data, display results)
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . ", Name: " . $row["name"] . ", Email: " . $row["email"] . "<br>";
    }
} else {
    echo "No records found";
}

// Close the database connection after performing database operations
$conn->close();
?>