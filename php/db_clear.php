<?php

require_once('functions.php');
require_once('db_connect.php');

if(!empty($_POST['clear'])) {
	$query = "DELETE FROM comments";
	$db->query($query);
}

?>
