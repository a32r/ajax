<?php

$query = "SELECT * FROM comments";
$arr = $db->query($query);
$table = $arr->fetchAll();
debug($table);
/* debug($_SERVER); */

?>
