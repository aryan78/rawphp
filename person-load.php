<?php
require 'dbconn.php'; 
?>
<?php
    $name_file = fopen('person-name.txt', 'r') or die("Unable to open file!");
    while (!feof($name_file)) {
       $name = fgets($name_file);
       echo $name;
       $sql = "INSERT INTO person VALUES ('$name')";
       echo "$sql";
       if ($conn->query($sql) === TRUE) {
           echo "Record updated successfully";
       } else {
           echo "Error updating record: " . $conn->error;
       }
    }
    
    $conn->close();

