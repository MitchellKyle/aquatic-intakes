<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set("html_errors", 1);
include("inc/functions.php");

$search = null;

if (isset($_GET["s"])) {
	$search = filter_input(INPUT_GET, "s", FILTER_SANITIZE_STRING);
}

if (!empty($search)) {
	$intake = search_intakes($search);
	var_dump($intake);
}


?>

<div class="search">
		<form method="get" action="search.php">
			<label for="s">Search:</label>
			<input type="text" name="s" id="s">
			<input type="submit" value="go">
		</form>
	</div>
