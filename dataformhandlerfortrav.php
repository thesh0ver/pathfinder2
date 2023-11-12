<?php // test script for
$servername = "localhost";
$username = "id21488732_admin";
$password = "vaginavaginav@gin@vag9avaginaV@G1N@";
$dbname = "id21488732_pathfinderdb";

try{
// // Create connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$typeoftrav=$_POST['typeoftrav'];
$dateofarri=$_POST['dateofarri'];
$startlocation=$_POST['startlocation'];
$dateofdept=$_POST['dateofdept'];
$finallocation=$_POST['finallocation'];
$totaoftrav=$_POST['totaoftrav'];
$userid=$_POST['userid'];
$conn->beginTransaction();
$conn->exec("INSERT INTO trav_table (typeoftrav, dateofarri, startlocation, dateofdept, finallocation, totaoftrav, userid) VALUES ('$typeoftrav', '$dateofarri', '$startlocation', '$dateofdept', '$finallocation', '$totaoftrav', '$userid')"); //('$testbit')
$conn->commit();
echo "Test";
}catch(PDOException $e) {
   
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>