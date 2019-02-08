<!-- TODO: confirm password -->

<?php include('header.php'); ?>
<?php
	if (isset($_GET['pass']) && $_GET['pass'] === 'false') {
		?>
<div class="alert alert-danger" role="alert">
    "Password did not match."
</div>
<?php
	}
 else if (isset($_GET['login']) && $_GET['login'] === 'email') {
	?>
<div class="alert alert-danger" role="alert">
    "Email already exists"
</div>

<?php
 }
?>
<br />
<div class="bg-img">
    <form action="models/registration.php" class="container-login" method="post">
        <br />
        <a href="https://www.motion-software.com" target="_blank">
            <img class="logo" src="css/img/motion-logo.png" alt="Notes in Motion" title="Notes in Motion">
        </a>
        <br /><br />
        <h1>Register</h1>
        <br />
        <input type="email" placeholder="Enter Email" name="email" id="email" required>


        <input class="form-control" type="password" placeholder="Enter Password" name="pass" id="pass"
            data-toggle="password" required>
        <br />
        <input class="form-control" type="password" placeholder="Enter Password" name="pass1" id="pass1"
            data-toggle="password" required>
        <br />
        <button type="submit" class="btn">Register</button>
    </form>
</div>
<?php include('footer.php'); ?>