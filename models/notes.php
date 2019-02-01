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
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $title = test_input($_POST["title"]);
            $body = test_input($_POST["body"]);
            }  

    $title = test_input($_POST["title"]);
    $body = test_input($_POST["body"]);
    $expired = $_POST["expired"];
    $noteId = $_POST["id"];
    $created = date("Y-m-d");
    $email = $_POST["users_email"];

        if (!empty($_POST)) {
            $expired = $_POST["expired"];
            $noteId = $_POST["id"];
            //$created = $_POST["created"];
            $email = $_POST["users_email"];
     
        
        if ($noteId !== "new_note"){
            $sql = "UPDATE `notes` SET `title`='$title',`body`='$body',`expired`='$expired' WHERE `id`= $noteId";

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


    if ($noteId !== "new_note"){
        $sql = "UPDATE `notes` SET `title`='$title',`body`='$body',`created`='$created',`expired`='$expired' WHERE `id`= $noteId";
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
    }

    
