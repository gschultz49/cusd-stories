<?php
// loads in all the entries on the index page in the beginning
include "card-model.php";
require "connection.php";

// all database query
$query = "SELECT * FROM michael";
$table = $conn->query($query);

// print the entire database to the screen
foreach ($table as $row){
  generateCard($row);
}
?>
