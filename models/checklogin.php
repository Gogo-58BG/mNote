<?php

include('../db.php');

// username and password sent from form 
$email=$_POST['email']; 
$pass=$_POST['pass'];

// To protect MySQL injection (more detail about MySQL injection)
$email = stripslashes($email);
$pass = stripslashes($pass);
//$email = mysql_real_escape_string($email);
//$pass = mysql_real_escape_string($pass);

// TODO: change to password_hash
$encrypted_password=md5($pass);
$sql="SELECT * FROM $tbl_name WHERE email='$email' and pass='$encrypted_password'"; //$encrypted_password

if (mysqli_query($db, $sql)) {
	$result = mysqli_query($db, $sql);
} else {
	$error = mysqli_error($db);
	if (strpos("Table 'mnotes.", $error) !== false) {
		$table = str_replace("Table 'mnotes.", "", $error);
		$table = str_replace("' doesn't exist", "", $table);
		// Create Users rable - Nice to have
		//var_dump($table);
		//die();
	}
}

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $email and $pass, table row must be 1 row
if($count==1) {
	session_start();
    $_SESSION['email'] = $email;
} else {
	//If the login credentials doesn't match, he will be shown with an error message.
	header("location: ../login.php?login=false");
}

if (isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    header("location: ../index.php");
}
else {
	header("location: ../login.php?login=false");
	echo "Wrong Username or Password";
}
?>