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

if (isset($noteId)) {
    $validate = [
        'message' => '',
    ];

$sql = "UPDATE `notes` SET `trash` = '1' WHERE `id`= '$noteId'";

$result = mysqli_query ($db,$sql);
    if($result){
        $validate['message'] = "Note deleted forever!";
        header("location: ../trashIndex.php?success1=" . $validate['message']);
    }
}