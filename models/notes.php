<?php
/**
 * On form submit.
 */
if (file_exists('../db.php')) {
    include_once('../db.php');
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function validateDate($date, $format = 'Y-m-d')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
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
    $created = date("Y-m-d H:i:s");
    $email = $_POST["users_email"];

    if ($title === "") {
        $validate['status'] = false;
        $validate['message'] = 'Title cannot be empty!';
    }

    // title less than 255 chars
    if (strlen($title) > 255) {
        $validate['status'] = false;
        $validate['message'] = 'Title cannot be more than 255 symbols!';
    }

    // body is less than 1000 chars
    if (strlen($body) > 1000) {
        $validate['status'] = false;
        $validate['message'] = 'Note cannot be more than 1000 symbols!';
    }

    // Date is in the right format
    if (validateDate($expired) === false) {
        $validate['status'] = false;
        $validate['message'] = 'Please enter valid date!';
    }

    if ($noteId !== "new_note"){
        $sql = "UPDATE `notes` SET `title`='$title',`body`='$body',`created`='$created',`expired`='$expired' WHERE `id`= $noteId";
    } else {
        $sql = "INSERT INTO `notes`(`users_email`, `title`, `body`, `created`, `expired`) VALUES ('$email', '$title', '$body', '$created', '$expired');";
    }
    
    if ($validate['status']) {
        $resultNote = mysqli_query($db, $sql);
        
        if($resultNote) {
            header("location: ../index.php");
        } else {
            $validate['status'] = false;
            $validate['message'] = mysqli_error($db);
        }
    }

    if (!$validate['status']) {
        header("location: ../index.php?error=" . $validate['message']);
    }
}