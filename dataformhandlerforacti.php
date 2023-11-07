<?php // test script for
$servername = "localhost";
$username = "id21488732_admin";
$password = "vaginavaginav@gin@vag9avaginaV@G1N@"; //id21488732_admin
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
$sql ="INSERT INTO acti_table (nameofacti, dateofacti, descofacti, userid) VALUES (?, ?, ?, ?)";
// Prepare the query, 
//Bind the parameters to the query ,
//and Execute the query.
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ssss", $_POST["nameofacti"], $_POST["dateofacti"], $_POST["descofacti"], $_POST["userid"]);
mysqli_stmt_execute($stmt);

// if 
// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
//   } else { // if statement fails
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }
  
$conn->close();

?>