<?php 

if (file_exists('../db.php')) {
    include_once('../db.php');
}
// TODO: Get id from $_GET parameter use var_dump!
// if($_GET('noteId'))

//echo '<pre>';
//var_dump($db);
//die();


$noteId = $_GET["noteId"];

//var_dump($noteId);
//die();

//if (isset($noteId))
//{
$sql = "UPDATE `notes` SET `trash` = '1' WHERE `id`= '$noteId'";
$result = mysqli_query ($db,$sql)
or die ("You couldn’t execute query");
//var_dump($sql);
//die();
header("Location: ../trashIndex.php");