<?php // test script for
$servername = "localhost";
$username = "id21488732_admin";
$password = "vaginavaginav@gin@vag9avaginaV@G1N@";
$dbname = "id21488732_pathfinderdb";

// // Create connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$testbit=$_POST['testbit'];
$query = $conn -> prepare("INSERT INTO test_table (testbit) VALUES (:testbit)"); //('$testbit')

$query->bindParam(":testbit", $testbit);

$query->execute();
echo "Test";

?>