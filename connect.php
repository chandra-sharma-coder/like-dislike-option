<?php
$servername = "localhost";
$username = "bfriendly_u";
$password = "12345";
$dbname = 'bootstrapfriendly_demo';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
