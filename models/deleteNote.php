<?php 
if (file_exists('../db.php')) {
    include_once('../db.php');
}

//var_dump($_GET["noteId"]);
//die();

$noteId = $_GET["noteId"];

if (isset($noteId) && is_numeric($noteId) && ($noteId > 0)) {
    $validate = [
        'status' => true,
        'message' => '',
    ];

    $sql = "UPDATE `notes` SET `deleted` = '1' WHERE id = '$noteId'";
    //var_dump($sql);
    //die();

    $result = mysqli_query ($db,$sql);
    if($result){
        $validate['message'] = "Note deleted successfuly!";
        header("location: ../index.php?success=" . $validate['message']);
              
    }

}  else {
    $validate['status'] = false;
    $validate['message'] = "Ne stava!!!";
    header("location: ../index.php?error=" . $validate['message']);
}
// TODO: Execute SQL query to delete the note with <ID>
//$sql = "UPDATE `notes` SET `deleted` = '1' WHERE `id`= 2";



// TODO: Check and send Error if the not is not deleted and send to index.php if its successful
// header("location: ../index.php?error=" . $validate['message']);
