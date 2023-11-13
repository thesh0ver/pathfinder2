<?php 
$servername = "localhost";
$username = "id21488732_admin";
$password = "vaginavaginav@gin@vag9avaginaV@G1N@";
$dbname = "id21488732_pathfinderdb";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES);

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'Load Activity Data':
            writetable($conn, "acti_table");
            break;
    }
}

function writetable(pdo $conn, string $table){ // begin copied code
     // Make sure that the table exists in the current database!
     $tableNames = $conn->query('SHOW TABLES')->fetchAll(PDO::FETCH_COLUMN);
     if (!in_array($table, $tableNames, true)) {
         throw new UnexpectedValueException('Unknown table name provided!');
     }
     $stmt = $conn->query('SELECT * FROM '.$table);
     $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
     $columnCount = $stmt->columnCount();
     
     echo '<table>';
     // Display table header
     echo '<thead>';
     echo '<tr>';
     for ($i = 0; $i < $columnCount; $i++) {
         echo '<th>'.htmlspecialchars($stmt->getColumnMeta($i)['name']).'</th>';
     }
     echo '</tr>';
     echo '</thead>';
     // If there is data then display each row
     if ($data) {
         foreach ($data as $row) {
             echo '<tr>';
             foreach ($row as $cell) {
                 echo '<td>'.htmlspecialchars($cell).'</td>';
             }
             echo '</tr>';
         }
     } else {
         echo '<tr><td colspan="'.$columnCount.'">No records in the table!</td></tr>';
     }
     echo '</table>';

}


?>