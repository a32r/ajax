<?php

require_once('functions.php');
require_once('db_connect.php');

$query = "SELECT * FROM comments";
$arr = $db->query($query)->fetchAll();

?>
