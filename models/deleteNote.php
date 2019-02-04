
<?php 

if (file_exists('../db.php')) {
    include_once('../db.php');
}
// TODO: Get id from $_GET parameter use var_dump!
// if($_GET('noteId'))


if ($_GET["noteId"]) {
    $validate = [
        'status' => true,
        'message' => '',
    ];

	$noteId = $_GET["noteId"];

	// TODO: Execute SQL query to delete the note with <ID>
	// UPDATE `mnotes`.`notes` SET `deleted` = '1' WHERE (`id` = '7');
	$sql = "UPDATE `notes` SET `deleted` = '1' WHERE `id`= '$noteId'";
    $resultNote = mysqli_query($db, $sql);
    
	// TODO: Check and send Error if the not is not deleted and send to index.php if its successful
	// header("location: ../index.php?error=" . $validate['message']);
    if($resultNote) {
        header("location: ../index.php");
    } else {
        $validate['status'] = false;
        $validate['message'] = mysqli_error($db);
    }

    if (!$validate['status']) {
    	header("location: ../index.php?error=" . $validate['message']);
    }
}
