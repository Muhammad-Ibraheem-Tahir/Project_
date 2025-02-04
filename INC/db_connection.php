<?php
// Database connection details
$servername = "localhost";
// defualt name
$username = "root";
// defualt username
$password = "";
// defualt password
$database = "sennn";
// database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// read from there
$query = "SELECT * FROM contact_messages";
// final result 
$result = mysqli_query($conn, $query);
?>