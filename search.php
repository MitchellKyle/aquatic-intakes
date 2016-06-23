<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set("html_errors", 1);
include("inc/functions.php");

$search = null;
$results = array();

if (isset($_GET["s"])) {
	$search = filter_input(INPUT_GET, "s", FILTER_SANITIZE_STRING);
}

include("inc/header.php");
?>

<div class="container-fluid">
	<div>
		<h1 class="text-center">Search For An Intake</h1>
		<p><b>Search by name, medical records number or date of birth.</b></p>
	</div>
	<div class="search">
		<form method="get" action="search.php">
			<label for="s">Search:</label>
			<input type="text" name="s" id="s">
			<input type="submit" value="GO">
		</form>
	</div>

<?php

	if (!empty($search)) {
		$results = search_intakes($search);

		if (empty($results)) {
			echo "<p>No intakes were found matching <b>" . $search . "</b>.</p>";
			echo "<p>Please check for typing errors or search for another intake.</p>";
		}  else {
	?>

	<div class="row">
		<div class="col-md-4">
			<h4>Name:</h4>
		</div>
		<div class="col-md-4">
			<h4>MR Number:</h4>
		</div>
		<div class="col-md-4">
			<h4>Date Of Birth:</h4>
		</div>
	</div>
	<div class="row">
	<?php
			echo search_results_html($results);
		}
	}
		?>
	</div>
</div>

<?php
include("inc/footer.php");
?>