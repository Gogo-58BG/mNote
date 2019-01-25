<?php
//var_dump($_POST);
if (!empty($_POST)) {
$name = $_POST["name"];
$mail = $_POST["mail"];
}
//Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "mnotes";


$db = mysqli_connect($servername, $username, $password, $database);

//Check connection
if (!$db){

    die ("Connection failed:" . mysqli_connect_error() );
}
echo "Connected successfully";

//result

$result = mysqli_query ($db, "INSERT INTO users (name, mail) VALUES ('$name', '$mail');");
 //var_dump($result);
?>
