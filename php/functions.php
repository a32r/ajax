<?php

function debug($arr) {
	echo "<pre>";
		print_r($arr);
		/* var_dump($arr); */
	echo "</pre>";
}

function sanitize($str) {
	echo filter_var($str, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}

?>
