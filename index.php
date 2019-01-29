<?php include('db.php'); ?>

<?php include('header.php'); ?>
    <!-- Return $email if the user have Session! -->
    <?php include('auth.php'); ?>

  <div class="wrapper">

    <?php include('sidebar.php'); ?>
    <?php include('models/notes.php'); ?>

    <!-- Page Content Holder -->
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="navbar-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                
          </div>
          <form class="navbar-form" role="search">
              <div class="input-group">
                  <input type="text" class="form-control" placeholder="search" name="q">
                  <div class="input-group-btn">
                      <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                  </div>
              </div>
          </form>    
        </nav>
        
        <div class="container">
            <!-- The Modal -->
          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal">
              <!-- TODO: Form <form> element is missing -->
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <!-- Modal Header -->
                      <!-- TODO: add hidden input for ID -->
                      <!-- TODO: add hidden input for Email: $email -->
                      <!--
                        Example: <input type="hidden" name="mail" value="<?php //echo $email ?>">
                        >>> $_POST['mail'] // user_email
                       -->
                    <div class="modal-header">
                        <input type="text" name="title" placeholder="Title" value="Title">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                
                    <!-- Modal body -->
                    <div class="modal-body">              
                        <textarea name="body" class="form-control .col-xs-12 .col-sm-6 .col-lg-8" placeholder="Note"></textarea>
                        <br>
                        <input type="datetime" name="CreationDate" placeholder="Creation Date" value="Creation Date">
                        <input type="datetime" name="ExpirationDate" placeholder="Expiration Date" value="Expiration Date">
                    </div>
                    <!-- TODO: Submit -->
                      <!-- Modal footer -->
                    <div class="modal-footer">
                        <button id="Save">Save</button>   
                        <button id="Archive">Archive</button> 
                        <button id="Delete">Delete</button> 
                        <button id="SetPriority">Set Priority</button>
                    </div>
                    </div>
                </div>
            </div>
            
          </div>
          
          <div class="notes">
            <ul>
              <li>
                <a href="1" data-toggle="modal" data-target="#myModal" class="note">
                  <h2>Title #1</h2>
                  <p>Text Content #1</p>
                </a>
              </li>
              <li>
                <a href="2" data-toggle="modal" data-target="#myModal" class="note">
                  <h2>Title 2222222222222222</h2>
                  <p>Text Content #1</p>
                </a>
              </li>
              <li>
                <a href="3" data-toggle="modal" data-target="#myModal" class="note">
                  <h2>Title 333333333333333</h2>
                  <p>Text Content #1</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <h2>Title #2</h2>
                  <p>Text Content #2</p>
                </a>
              </li>

              <li>
                <a href="#">
                  <h2>Title #7</h2>
                  <p>Text Content #7</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <h2>Title #8</h2>
                  <p>Text Content #8</p>
                </a>
              </li>
            </ul>
        </div>
    </div>
  </div>
<?php include('footer.php'); ?>