<?php

require "config.php";

$dsn = "mysql:host=$host;dbname=$db;port:3306";

try {
	$pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
	echo $e->getMessage();
}

?>