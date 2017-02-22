<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="attendancrsystem"; // Database name 

// Create connection
$conn = new mysqli($host, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";



$sqli =  "CREATE TABLE `usernamedata` (
  `username` varchar(25) DEFAULT NULL,
  `password` int(10) DEFAULT NULL)"; 

if ($conn->query($sqli) === TRUE) {
    echo "Table usernamedta created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
