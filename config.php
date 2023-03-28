<?php

// Database configuration
$host     = "localhost";
$username = "root"; // Your MySQL username
$password = "root123"; // Your MySQL password
$dbname   = "data_leakage_db"; // The name of your database

// Create a database connection
$conn = mysqli_connect("localhost", "root", "root123", "data_leakage_db");

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Get the user's input from the form
if(isset($_POST['submit'])){
    $input = $_POST['input'];
    
    // Search the database for the user's input
    $query = "SELECT * FROM users WHERE info='$input'";
    $result = mysqli_query($conn, $query);
    
    // Check if the query returned any results
    if(mysqli_num_rows($result) > 0){
        echo "Your information has been compromised.";
    } else {
        echo "Your information has not been compromised.";
    }
}

?>