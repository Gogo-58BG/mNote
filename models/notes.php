<?php
// TODO: Get all users notes from database;
// var_dump($email); // Email of the user

// TODO: SQL to get all users notes
    /**
     * On form submit.
     */
    if (!empty($_POST)) {
        // echo '<pre>';
        // var_dump($_POST);
        // die();
        if (!is_null($_POST["title"])) {
            $title = $db->real_escape_string($_POST["title"]);
        }
        
        $title = $db->real_escqpe_string($_POST["title"]);
        $body = $db->real_escape_string($_POST["body"]);
        $created = now();
        $expired = $_POST["expired"];
        $deleted = $_POST["id"];

        $sql = "    
            INSERT INTO 
                notes (title,body,creted, expired, deleted, arhived) 
            VALUES 
                ('$title', '$body', '$expired');
        ";

        $resultArticle = mysqli_query($db, $sql);

        if($resultArticle) {
            echo "<em>Note added successfully!</em>";
        } else {
            echo "Error: ";
            echo '<pre>';
            var_dump($resultArticle);
            die();
        }
    }
?>