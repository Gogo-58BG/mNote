<?php include('db.php'); ?>

<?php include('header.php'); ?>
<!-- Return $email if the user have Session! -->
<?php include('auth.php'); ?>

<div class="wrapper">
    <?php include('sidebar.php'); ?>
    <?php include('models/notes.php'); ?>

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
            <?php include_once('modal.php') ?>

            <?php include_once('models/get_notes.php'); ?>
            <div class="notes">
                <ul>
                    <?php foreach ($notes as $note) { ?>
                    <li>
                        <a href="<?php echo $note[0] ?>" data-toggle="modal" data-target="#myModal" class="note">
                            <h2><?php echo $note[2] ?></h2>
                            <p><?php echo $note[3] ?></p>
                            <?php 
                            $date = new DateTime($note[5]);
                            ?>
                            <div style="display:none" class="date"><?php echo $date->format('Y-m-d'); ?></div>
                        </a>
                    </li>   
                    <?php 
                } ?>             
                </ul>
            </div>
        </div>
    </div>
</div>     
<?php include('footer.php'); ?>