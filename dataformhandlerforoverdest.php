<?php // test script for
$servername = "localhost";
$username = "id21488732_admin";
$password = "vaginavaginav@gin@vag9avaginaV@G1N@";
$dbname = "id21488732_pathfinderdb";

try{
// // Create connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$nameofdest=$_POST["nameofdest"]; 
$typeofdest=$_POST["typeofdest"];
$releweblink=$_POST["releweblink"]; 
$dateofarri=$_POST["dateofarri"]; 
$dateofdept=$_POST["dateofdept"]; 
$userlocation=$_POST["userlocation"];
$userid=$_POST["userid"];
$conn->beginTransaction();
$conn->exec("INSERT INTO overdest_table (nameofdest, typeofdest, releweblink, dateofarri, dateofdept, userlocation, userid) VALUES ('$nameofdest', '$typeofdest', '$releweblink', '$dateofarri', '$dateofdept', '$userlocation', '$userid')"); //('$testbit')
$conn->commit();
echo "Test";
}catch(PDOException $e) {
   
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>