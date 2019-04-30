<?php

$dbHost = "localhost";
$dbName = "ajax";
$dbUser = "root";
$dbPass = "";

try {
	$db = new PDO("mysql:host=$dbHost;dbname=$dbName", "$dbUser", "$dbPass");
}
catch (PDOException $e) {
	echo "Невозможно установить соединение с базой данных";
}
