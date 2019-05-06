<?php

if(!empty($_POST['name'])) {
	$name = htmlspecialchars($_POST['name']);
	$email = $_POST['email'];
	$comment = htmlspecialchars($_POST['comment']);
	$query = "INSERT INTO comments VALUES (NULL, ?, ?, ?)";
	$stmt = $db->prepare($query);
	$stmt->execute([$name, $email, $comment]);
}

?>
