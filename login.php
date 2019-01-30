<?php include('header.php'); ?>

<?php
	if (isset($_GET['login']) && $_GET['login'] === 'false') {
		?>
			<div class="alert alert-danger" role="alert">
			"User Created Successfully."
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

<div class="bg-img">
  <form action="models/checklogin.php" method="post" class="container-login">
  <h2 class="logo">mNote</h2>
    <h1>Login</h1>
	</br>
	    <label for="email"><b>Email</b></label>
	    <input type="text" placeholder="Enter Email" name="email" id="email" required>

	    <label for="pass"><b>Password</b></label>
	    <input type="password" placeholder="Enter Password" name="pass" id="pass" required>

	    <button type="submit" class="btn">Login</button>
	    <h3>Get started for<a href="register.php"> FREE</a></h3>
	</br>
	</br>
  </form>
</div>
<?php include('footer.php'); ?>