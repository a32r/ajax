<?php

if(!empty($_POST['clear']) && $_POST['clear'] == 1) {
	$query = "DELETE FROM comments";
	$db->query($query);
}

?>
