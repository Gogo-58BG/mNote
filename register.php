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
?>
<div class="bg-img">
  <form action="models/registration.php" class="container-login" method="post">
  <h2 class="logo">mNote</h2>
    <h1>Register</h1>
</br>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>


    <input type="password" placeholder="Enter Password" name="pass" id="pass" required>


    <input type="password" placeholder="Confirm Password" name="pass1" id="pass1" required>

    <button type="submit" class="btn">Register</button>
  </form>
</div>
<?php include('footer.php'); ?>
