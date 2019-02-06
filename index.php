<?php include('auth.php'); ?>
<?php include('db.php'); ?>
<?php include('header.php'); ?>

<!-- Return $email if the user have Session! -->

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

            <?php include('models/get_notes.php'); ?>
            <div class="notes">
                <ul>
                    <?php foreach ($notes as $note) { ?>
                    <?php
                        $bell = "";
                        //$class = "";
                        $date = new DateTime($note[5]);
                        $date1=new DateTime();
                        $interval = $date->diff($date1);
                        
                        //var_dump($interval->d);
                        //die();
                        if ($interval->d < 3) {
                            $bell = '<i class="fas fa-bell" style="color:#5bc0de" aria-hidden="true"></i>' . '<font color="#5BC0DE" size="2"> Expiring soon!</font>';    
                        } // TODO: get today
                        // Compare today with $date // DateTime documentation
                        // set class to red if date is today.

                        //$bell = '<i class="fas fa-bell" aria-hidden="true"></i>';
                    ?>
                    <li> 
                        <a href="<?php echo $note[0] ?>" data-toggle="modal" data-target="#myModal" class="note">
                            <div><?php echo $bell ?></div>
                            <h2><?php echo $note[2] ?></h2>
                            <p><?php echo $note[3] ?></p>
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