<!-- The Modal -->
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal">
    <!-- TODO: Form <form> element is missing -->
    <form action="models/notes.php" method="POST" id="form">
        <div class="modal-dialog" role="document">
                <div id="created" class="created">Created: <?php echo date("Y-m-d")?></div>
            <div class="modal-content">
                <!-- Modal Header -->
                    <input type="hidden" name="users_email" value="<?php echo $email ?>">
                    <input type="hidden" name="id" value="" id="noteId">
                <div class="modal-header">
                    <input type="text" name="title" placeholder="Title" value="Title" class="form-control" required readonly>
                    <button type="button" class="close1" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <textarea name="body" class="form-control .col-xs-12 .col-sm-6 .col-lg-8" placeholder="Note" required rows="3" style="min-height: 100px;" readonly></textarea>
                    <input type="datetime" id="datepicker1" class="form-control" placeholder="Expiration" name="expired" readonly>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <div class="col-md-6">
                        <a href="" id="trashNote" class="btn btn-danger" style="background-color: #e64e5c;">Clear</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
	</form>