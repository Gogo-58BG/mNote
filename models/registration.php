<?php

include('../db.php');

$email=$_POST['email'];
$pass=$_POST['pass'];
$pass1=$_POST['pass1'];

if($_POST['pass']!==$_POST['pass1']) {
    header("location: ../register.php?pass=false");
	exit;
}
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
$pass1 = stripslashes($pass1);


$encrypted_password=md5($pass);

if (isset($_POST['email']) && isset($_POST['pass']) && $valid)
$sql = "INSERT INTO `users` (email, pass) VALUES ('$email', '$encrypted_password')";

	$result = mysqli_query($db, $sql);

	if($result){
		//$smsg = "User Created Successfully."; 
		session_start();
		$_SESSION['email'] = $email;
		header("location: ../index.php?login=true");
	} 