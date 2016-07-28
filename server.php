<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');


require_once("connection.php");

$sql = "SELECT name FROM user order by id desc limit 3";
$result = $conn->query($sql);


//echo "data: The server time is: {$time}\n\n";

$arrayName = array();


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $arrayName [] = $row; 
    }
} else {
    echo "data: 0 results";
}

//echo 'data: ' . json_encode($arrayName) . "\n\n";


$conn->close();

flush();
?>