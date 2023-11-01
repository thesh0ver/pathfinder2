<?php // test script for
$servername = "localhost";
$username = "admin";
$password = "vaginavaginav@gin@vag9avaginaV@G1N@";
$dbname = "pfdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// to resolve potential issues
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    $username = "root";
    $conn = new mysqli($servername, $username, $password, $dbname);
}
// SQL statement to insert data in database
$sql ="INSERT INTO table_name (nameofdest, typeofdest, releweblink, userlocation) VALUES (?, ?, ?, ?)";
// Prepare the query, 
//Bind the parameters to the query ,
//and Execute the query.
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ssss", $_POST["nameofdest"], $_POST["typeofdest"], $_POST["releweblink"], $_POST["location"]);
mysqli_stmt_execute($stmt);

// if 
// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
//   } else { // if statement fails
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }
  
$conn->close();

?>