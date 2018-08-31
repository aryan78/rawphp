<?php
    $servername = "localhost";
    $username = "phpcode";
    $password = "aryan1234";
    $dbname = "proj_rawphp";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>

