<?php
 $result = $db->query("SELECT * FROM notes WHERE users_email = '$email'");
  
 $notes = $result->fetch_all();
// TODO: Get all users notes from database;
// var_dump($email); // Email of the user

// TODO: SQL to get all users notes
?>