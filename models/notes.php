<?php
    /**
     * On form submit.
     */
    //nclude('./db.php');
    //echo '<pre>';
    //var_dump($db);
    //die();
    
    if (!empty($_POST)) {
        // echo '<pre>';
        //var_dump($_POST);
        // die();
        if (!is_null($_POST["title"])) {
            $title = $db->real_escape_string($_POST["title"]);
        }
        
        //$title = $db->real_escqpe_string($_POST["title"]);
        $body = $db->real_escape_string($_POST["body"]);
        $created = date("Y-m-d H:i:s");;
        $expired = $_POST["expired"];
       // $deleted = $_POST["id"];
        if ($id=true){
            $sql = "    
            UPDATE INTO 
                notes (title, body, expired) 
            VALUES 
                ('$title', '$body', '$expired');
        ";
        }
        else {
        $sql = "    
            INSERT INTO 
                notes (title, body, expired) 
            VALUES 
                ('$title', '$body', '$expired');
        ";
         }   
        $resultNote = mysqli_query($db, $sql);

        if($resultNote) {
            echo "<em>Note added successfully!</em>";
        } else {
            echo "Error: ";
            echo '<pre>';
            var_dump($resultNote);
            die();
        }
    }
