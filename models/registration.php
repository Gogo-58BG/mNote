<?php

include('../db.php');

$email=$_POST['email'];
$pass=$_POST['pass'];

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$valid=false;

// Validate e-mail
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$valid=true;
} else {
	header("location: ../login.php?login=email");
}

// To protect MySQL injection (more detail about MySQL injection)
$email = stripslashes($email);
$pass = stripslashes($pass);


$encrypted_password=md5($pass);

if (isset($_POST['email']) && isset($_POST['pass']) && $valid){


	$result = mysqli_query($db, $sql);

	if($result){
		$smsg = "User Created Successfully."; 
		session_start();
		$_SESSION['email'] = $email;
		header("location: ../index.php");
	} else {
		$fmsg ="User Registration Failed";
	}
}