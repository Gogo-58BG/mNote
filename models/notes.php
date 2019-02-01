<?php
    /**
     * On form submit.
     */
<<<<<<< HEAD
=======

>>>>>>> 722b1ed91fb72bd20bda0cf9b0cc396dc159022d
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

        if (!empty($_POST)) {
            $expired = $_POST["expired"];
            $noteId = $_POST["id"];
            //$created = $_POST["created"];
            $email = $_POST["users_email"];
     
        
        if ($noteId !== "new_note"){
            $sql = "UPDATE `notes` SET `title`='$title',`body`='$body',`expired`='$expired' WHERE `id`= $noteId";
<<<<<<< HEAD
=======

    if ($title === "") {
        $validate['status'] = false;
        $validate['message'] = 'Title can not be empty!';
    }

    // TODO title less than 255 chars
    // if ...



    // TODO: body is less than 1000 chars
>>>>>>> 722b1ed91fb72bd20bda0cf9b0cc396dc159022d

        }
        else {
            $sql = "INSERT INTO `notes`(`users_email`, `title`, `body`, `created`, `expired`, `trash`, `archived`) VALUES ('$email', '$title', '$body', '$created', '$expired', '$trash', '$archived');";
            
         }   
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

    
