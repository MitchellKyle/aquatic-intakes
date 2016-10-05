<?php
// Variables declared to be used in the creation of the PDO object
$user = 'root';
$password = '';
$db = 'aquatic_intakes';
$host = '127.0.0.1';


// Tries to connect to the server
try {
	// Instantiation of the PDO object using mysql
	$dbh = new PDO("mysql:host=$host;dbname=$db",$user,$password);
	// Following line ensures the database will throw an exception if an error occurs
	$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	echo "Unable to connect";
	echo $e->getMessage();
	exit;
}