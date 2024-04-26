<?php
$servername = "localhost:3310";
$username = "root";
$password = "";
$dbname = "bistrodb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// // sql to create table
// $sql = "CREATE TABLE bistro (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// addy VARCHAR(30) NOT NULL,
// city VARCHAR(30) NOT NULL,
// region VARCHAR(30) NOT NULL,
// zip INT(30) NOT NULL,
// pnum INT(30) NOT NULL,
// cake VARCHAR(30) NOT NULL,
// rawcake VARCHAR(30) NOT NULL,
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

?>