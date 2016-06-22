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
	$results = search_intakes($search);
}

include("inc/header.php");
?>

<div class="search">
		<form method="get" action="search.php">
			<label for="s">Search:</label>
			<input type="text" name="s" id="s">
			<input type="submit" value="go">
		</form>
	</div>

<?php
	if (!empty($search)) {
	?>

<div class="row">
	<div class="col-md-3">
		<h4>First Name:</h4>
	</div>
	<div class="col-md-3">
		<h4>Last Name:</h4>
	</div>
	<div class="col-md-3">
		<h4>MR Number:</h4>
	</div>
	<div class="col-md-3">
		<h4>Date Of Birth:</h4>
	</div>
</div>
<div class="row">
<?php
		echo search_results_html($results);
	}
	?>
</div>
	

</div>