<?php

include('../db.php');

$email=$_POST['email'];
$pass=$_POST['pass'];

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("$email is a valid email address");
} else {
    echo("$email is not a valid email address");
}

// To protect MySQL injection (more detail about MySQL injection)
$email = stripslashes($email);
$pass = stripslashes($pass);

// TODO: password_hash("admin", PASSWORD_BCRYPT)
$encrypted_password=md5($pass);

if (isset($_POST['email']) && isset($_POST['pass'])){

$sql = "INSERT INTO `users` (email, pass) VALUES ('$email', '$encrypted_password')";
	$result = mysqli_query($db, $sql);
	if($result){
		$smsg = "User Created Successfully.";
	}else{
		$fmsg ="User Registration Failed";
	}
}