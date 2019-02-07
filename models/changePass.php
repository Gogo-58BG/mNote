<?php

if (file_exists('../db.php')) {
    include_once('../db.php');
}
include('../auth.php');

$pass = $_POST['pass'];
$pass1 = $_POST['pass1'];

if ($pass !== $pass1) {
    $validate['message'] = "Password did not match!";
    header("location: ../editProfile.php?error2=" . $validate['message']);
    exit;
} else {

    $pass = stripslashes($pass);
    $pass1 = stripslashes($pass1);
    $encrypted_password = md5($pass);
    $sql = "UPDATE `users` SET `pass` = '$encrypted_password' WHERE `email` = '$email'";

    $result = mysqli_query($db, $sql);
    if ($result) {
        $validate['message'] = "Password has been changed successfuly!";
        header("location: ../Index.php?success2=" . $validate['message']);
    }
}