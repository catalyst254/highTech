<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "hightech_quantum"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect-error){
    die("Connection failed: ". $conn->connect_error);
}
echo "successfully"
?>