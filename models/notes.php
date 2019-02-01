<?php
/**
 * On form submit.
 */
include_once('../db.php');

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (!empty($_POST)) {
    $validate = [
        'status' => true,
        'message' => '',
    ];

    $title = test_input($_POST["title"]);
    $body = test_input($_POST["body"]);
    $expired = $_POST["expired"];
    $noteId = $_POST["id"];
    //$created = $_POST["created"];
    $email = $_POST["users_email"];

    /**
     * TODO: Validation title, body, date
     * title - not empty, 255 chars max
     * body - 1000 max
     * date - valid date
     */
    if ($title === "") {
        $validate['status'] = false;
        $validate['message'] = 'Title can not be empty!';
    }

    // TODO title less than 255 chars
    // if ...


    // TODO: body is less than 1000 chars


    if (checkdate($month, $day, $year) === false) {
        $validate['status'] = false;
        $validate['message'] = 'Please enter correct date!';
    }
    

    if ($noteId !== "new_note"){
        $sql = "UPDATE `notes` SET `title`='$title',`body`='$body',`expired`='$expired' WHERE `id`= $noteId";
    } else {
        $sql = "INSERT INTO `notes`(`users_email`, `title`, `body`, `created`, `expired`, `trash`, `archived`) VALUES ('$email', '$title', '$body', '$created', '$expired', '$trash', '$archived');";
    }
    
    if ($validate['status']) {
        $resultNote = mysqli_query($db, $sql);
        
        if($resultNote) {
            header("location: ../index.php");
        } else {
            header("location: ../index.php");
            echo "Error: ";
            echo '<pre>';
            var_dump($resultNote);
            die();
        }
    } else {
        header("location: ../index.php?error=" . $validate['message']);
    }

}