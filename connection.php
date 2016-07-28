
<?php 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "server_sent_event";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



?>