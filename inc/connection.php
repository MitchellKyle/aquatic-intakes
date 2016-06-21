<?php
// Variables declared to be used in the creation of the PDO object
$user = 'root';
$password = 'root';
$db = 'intakes';
$host = 'localhost';
$port = 3306;

// Tries to connect to the server
try {
	// Instantiation of the PDO object using mysql
	$dbh = new PDO("mysql:host=$host;dbname=$db;port=$port",$user,$password);
	// Following line ensures the database will throw an exception if an error occurs
	$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	echo "Unable to connect";
	echo $e->getMessage();
	exit;
}