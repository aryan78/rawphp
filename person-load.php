<?php
    require 'dbconn.php'; 
    
    $name_file = fopen('person-name.txt', 'r') or die("Unable to open file!");
    while (!feof($name_file)) {
       $name = stream_get_line ( $name_file , 100 , "\n");
       if ($name != "") {
           $sql = "INSERT INTO person VALUES ('$name')";
           if ($conn->query($sql) === TRUE) {
               echo "Record updated successfully\n";
           } else {
               echo "Error updating record: " . $conn->error;
           }
       }
    }

    $conn->close();

/* 
 * Return:
 *
 * True if string is empty
 * False if string is not empty
 */
function checkEmptyString($str)
{
  $flag = True;

  // Test code here

  return $flag;
}

