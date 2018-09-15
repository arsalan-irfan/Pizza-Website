<?php
$servername = "localhost";
$username = "id5568154_arsalan_dba";
$password = "03222334560";
$dbname="id5568154_customer";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

//Check connection

if ($conn->connect_error) {
    die("Connection failed: <br> " . $conn->connect_error);
} 
// echo "Connected successfully";

  
  //$conn->close();
  ?>
