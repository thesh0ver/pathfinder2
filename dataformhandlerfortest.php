<?php // test script for
$servername = "localhost";
$username = "id21488732_admin";
$password = "vaginavaginav@gin@vag9avaginaV@G1N@";
$dbname = "id21488732_pathfinderdb";

// // Create connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$testbit=$_POST['testbit'];
//$conn->beginTransaction();
$sqlcode="SELECT * FROM trav_table";
//SELECT * FROM test_table
$stmt = $conn->prepare($sqlcode);
$stmt->execute();//($sqlcode); //('$testbit') //(test) VALUES ('$testbit')
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$data = $stmt->fetchAll();
// $data = $conn->setFetchMode(PDO::FETCH_ASSOC); 
//$conn->commit();
//$data = $conn-> fetchAll(); //["testbit"]
foreach($data as $iii){
    echo  " " . array_pop($iii);
}
//echo implode("",$data);
?>
