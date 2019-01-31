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

        if (!empty($_POST)) {
            $expired = $_POST["date"];
            $noteId = $_POST["id"];
            //$created = $_POST["created"];
            $email = $_POST["users_email"];
     
        
        if ($noteId !== "new_note"){
            $sql = "UPDATE `notes` SET `title`='$title',`body`='$body',`expired`='$expired' WHERE `id`= $noteId";

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

    
