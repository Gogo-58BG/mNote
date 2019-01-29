<?php

include('config/db.php');

//Datebase
$servername = DB_HOST;
$username = DB_USER;
$password = DB_PASSWORD;
$database = DB_NAME;
$tbl_name="users"; // Table name


// Create connection
$db = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

?>