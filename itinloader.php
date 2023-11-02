<?php //This code is to go through the various databases and write the data onto the page via a table
            $currentrowtowrite = array();
            function tablerowwriter($array){
                for ($x = 0; $x <= sizeof($array); $x++) {
                    echo "<tr>" +$array[$x]+"</tr>";
                }
                echo "<br/>";
            }
            function dataloader($table){
                $servername = "localhost";
                $username = "id21488732_admin";
                $password = "Penispenis@@123";
                $dbname = "pathfinderdb";
                try{// Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }
                    $sqlquery = "SELECT * FROM" + $table +"";
                }
                catch(Exception $e){
                    echo 'Caught exception: ',  $e->getMessage(), "\n";
                }
            }?>