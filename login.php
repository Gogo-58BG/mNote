<?php include('header.php'); ?>

<?php
if (isset($_GET['login']) && $_GET['login'] === 'false') {
	?>
<div class="alert alert-danger" role="alert">
    "Wrong user email or password."
</div>
<?php
} else if (isset($_GET['login']) && $_GET['login'] === 'email') {
	?>
<div class="alert alert-danger" role="alert">
    "Your email is not valid."
</div>
<?php
}
?>
<br />
<div class="bg-img">
    <form action="models/checklogin.php" method="post" class="container-login">
        <br />
        <a href="https://www.motion-software.com" target="_blank">
            <img class="logo" src="css/img/motion-logo.png" alt="Notes in Motion" title="Notes in Motion">
        </a>
        <br /><br />
        <h1>Login</h1>
        <br />
				<input type="email" placeholder="Enter Email" name="email" id="email" required>
				<br />
				<input class="form-control" type="password" placeholder="Enter Password" name="pass" id="pass" data-toggle="password" required>
				<br />
        <button type="submit" class="btn">Login</button><br /><br />
        <h3>Get started for<a href="register.php"> FREE</a></h3>
        <br />
    </form>
</div>
<?php include('footer.php'); ?>