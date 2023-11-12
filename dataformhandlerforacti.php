<?php // test script for
$servername = "localhost";
$username = "id21488732_admin";
$password = "vaginavaginav@gin@vag9avaginaV@G1N@";
$dbname = "id21488732_pathfinderdb";

try{
// // Create connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$nameofacti = $_POST['nameofacti'];
$dateofacti = $_POST['dateofacti'];
$descofacti = $_POST['descofacti'];
$userid = $_POST['userid'];
$conn->beginTransaction();
$conn->exec("INSERT INTO acti_table (nameofacti, dateofacti, descofacti, userid) VALUES ('$nameofacti', '$dateofacti', '$descofacti',  '$userid')");

$conn->commit();
echo "Test";
}catch(PDOException $e) {
   
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>
