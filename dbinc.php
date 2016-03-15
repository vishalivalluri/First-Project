<?php
$servername = "localhost";
$username = "root";
//$password = "password";
$dbname = "library";
 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>