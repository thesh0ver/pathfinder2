<?php // test script for
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$servername = "localhost";
$username = "id21488732_admin";
$password = "vaginavaginav@gin@vag9avaginaV@G1N@";
$dbname = "pathfinderdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// to resolve potential issues
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    $username = "admin";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "<script>console.log("+"Connection failed: " + $conn->connect_error+")</script>";
    }
}
// SQL statement to insert data in database, table name is plaholder
$sql ="INSERT INTO overdest_table (nameofdest, typeofdest, releweblink, dateofarri, dateofdept, userlocation, userid) VALUES (?, ?, ?, ?, ?, ?, ?)";
// Prepare the query, 
//Bind the parameters to the query ,
//and Execute the query.
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "sssssss", $_POST["nameofdest"], $_POST["typeofdest"], $_POST["releweblink"], $_POST["dateofarri"], $_POST["dateofdept"], $_POST["userlocation"], $_POST["userid"]);
mysqli_stmt_execute($stmt);

// if 
// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
//   } else { // if statement fails
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }
  
$conn->close();

?>