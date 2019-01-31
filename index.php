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
            <!-- The Modal -->
          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal">
              <!-- TODO: Form <form> element is missing -->
              <form action="models/notes.php" method="POST" id="form">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <input type="hidden" name="users_email" value="<?php echo $email ?>">
                        <input type="hidden" name="id" value="<?php echo $noteId ?>" id="noteId">
                      <div class="modal-header">

                         Title: <input type="text" name="title" placeholder="Title" value="Title" required>

                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                  
                      <!-- Modal body -->
                      <div class="modal-body">              
                          Note:<textarea name="body" class="form-control .col-xs-12 .col-sm-6 .col-lg-8" placeholder="Note" required></textarea>
                          <br>
                          <input type="datetime" id="datepicker" placeholder="Expiration date" name="expired">
                      </div>
                        <!-- Modal footer -->
                      <div class="modal-footer">
                        <input type="submit" value="Save"> 
                      </div>
                      </div>
                  </div>
              </form>

            </div>
            
          </div>
          <?php include_once('models/get_notes.php'); ?>
          <div class="notes">
          
            <ul>
              <?php foreach ($notes as $note){ ?>
                <li>
                  <a href="<?php echo $note[0]?>" data-toggle="modal" data-target="#myModal" class="note">    
                    <h2><?php echo $note[2]?></h2>

                    <p><?php echo $note[3]?></p>

                    <div style="display:none" class="date"><?php echo $note[5]?></div>
                  </a>
                </li>
              <?php } ?>             
            </ul>
        </div>
    </div>
  </div>
<?php include('footer.php'); ?>