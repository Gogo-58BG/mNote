<!-- TODO: confirm password -->

<?php include('header.php'); ?>
<div class="bg-img">
  <form action="models/registration.php" class="container" method="post">
  <h2 class="logo">mNote</h2>
    <h1>Register</h1>
</br>
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>

    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" id="pass" required>

    <label for="pass"><b>Confirm password</b></label>
    <input type="password1" placeholder="Confirm Password" name="pass1" id="pass1" required>

    <button type="submit" class="btn">Register</button>
  </form>
</div>
<?php include('footer.php'); ?>
