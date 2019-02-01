<?php
	if (isset($_GET['login']) && $_GET['login'] === 'true') {
		?>
			<div class="alert alert-success" role="alert">
			"User Created Successfully."
			</div>
		<?php
	} else if (isset($_GET['login']) && $_GET['login'] === 'false') {
		?>
			<div class="alert alert-danger" role="alert">
			"User registration failed."
			</div>
		<?php
	}

	if (isset($_GET['error'])) {
		?>
			<div class="alert alert-danger" role="alert">
				<?php echo $_GET['error']; ?>
			</div>
		<?php
	}
?>