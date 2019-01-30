<?php
    //echo '<pre>';
    //var_dump($db);
    //die();

    $result = $db->query("SELECT * FROM notes WHERE users_email = '$email'");
    $notes = $result->fetch_all();
