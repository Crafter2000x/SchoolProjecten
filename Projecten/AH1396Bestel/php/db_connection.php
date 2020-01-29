<?php

$servername = "localhost";
$username = "AHSQLUSER";
$password = "";
$dbname = "db_customerorders";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
}


