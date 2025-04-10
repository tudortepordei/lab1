<?php
$host = "localhost";
$user = "root";
$pass = "root"; 
$dbname = "utilizatori";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
  die("Conexiunea a eșuat: " . $conn->connect_error);
}
?>
