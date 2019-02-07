<?php
//echo '<pre>';
//var_dump($db);
//die();

// Order by date.
$result = $db->query("SELECT * FROM notes WHERE users_email = '$email' AND `deleted` = '1' AND `trash` = '0' ORDER by `expired`");

$notes = [];

if ($result) {
	$notes = $result->fetch_all();
}