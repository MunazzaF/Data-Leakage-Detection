<?php
// Get form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Connect to the database
$host = "localhost";
$username_db = "root";
$password_db = "root123";
$dbname = "data_leakage_db";
$conn = mysqli_connect("localhost", "root", "root123", "data_leakage_db");

// Check the connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Insert data into the users table
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
  echo "New user created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
