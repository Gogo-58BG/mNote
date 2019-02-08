<?php 
include('db.php');
include('auth.php');
include('header.php');
?>
<div class="wrapper">
    <?php include('trashSidebar.php'); ?>

    <!-- Page Content Holder -->
    <div id="content">
        <?php include('php/success.php'); ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="navbar-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </nav>
        <div class="container">

            <div class="col-md-6">
                <fieldset
                    style="background-color: #FFFFCC; padding: 50px; border:1px solid #5BC0DE; border-radius:8px;	box-shadow:0 0 20px #666;">
                    <form action="models/changePass.php" method="POST" id="form1">
                        <input type="text" name="email" id="email" value="<?php echo $email ?>" readonly><br /><br />

                        <input class="form-control" type="password" placeholder="Enter Password" name="pass" id="pass"
                            data-toggle="password" required>
                        <br />
                        <input class="form-control" type="password" placeholder="Enter Password" name="pass1" id="pass1"
                            data-toggle="password" required>
                        <br />

                        <button type="submit" class="btn">Change Password</button>

                    </form>
                </fieldset>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>