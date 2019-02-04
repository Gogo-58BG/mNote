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
					<input type="text" name="title" placeholder="Title" value="Title" class="form-control" style="background-color: #cfc;" required>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">              
					<textarea name="body" class="form-control .col-xs-12 .col-sm-6 .col-lg-8" placeholder="Note" required rows="3" style="min-height: 100px;"></textarea>	
						<input type="datetime" id="datepicker" class="form-control" placeholder="Expiration" name="expired">
					</div>
					<!-- Modal footer -->
					<div class="modal-footer">
						<div class="col-md-6">
							<a href="" id="deleteNote" class="btn btn-danger" style="background-color: #e64e5c;">Delete</a>
						</div>
						<div class="col-md-6">
							<input type="submit" value="Save" class="btn btn-success" style="background-color: #49c766"> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>