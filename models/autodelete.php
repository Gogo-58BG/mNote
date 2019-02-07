<?php 
include('../db.php');
include('../auth.php');
$sql = "SELECT * FROM notes WHERE users_email = '$email' AND expired < NOW() AND deleted = '0'";
$result = mysqli_query($db, $sql);
$count = mysqli_num_rows($result);
if ($count !== 0) {
    $sql = "UPDATE notes SET deleted = '1' WHERE users_email = '$email' AND expired < NOW()";
    $result = mysqli_query($db, $sql);
    if ($result) {
        $validate = [
            'status' => true,
            'message' => '',
        ];
        $validate['message'] = "All expired notes were moved to trash!";
        header("location: ../index.php?success=" . $validate['message']);
    }
} else {
    header("location: ../index.php");
}