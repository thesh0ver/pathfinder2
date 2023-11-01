<?php
$servername = "localhost";
$username = "admin";
$password = "vaginavaginav@gin@vag9avaginaV@G1N@";
$dbname = "pfdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    $username = "root";
    $conn = new mysqli($servername, $username, $password, $dbname);
}
// SQL statement to insert data in database
$sql ="";

?>