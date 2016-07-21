<?php
include_once("inc/functions.php");

$search = null;
$results = array();

// Checks if there is a search query and filters the input
if (isset($_GET["s"])) {
	$search = filter_input(INPUT_GET, "s", FILTER_SANITIZE_STRING);
}

include("inc/header.php");
?>

<div class="container-fluid">
	<div>
		<h1 class="header">Search For An Intake</h1>
		<p class="search-directions container"><b>Search by Name, Medical Records Number or Date of Birth.</b></p>
	</div>
	<!-- Search Form -->
	<div class="form-group container">
		<form method="get" action="search.php">
			<label for="s">Search:</label>
			<input class="form-control" type="text" name="s" id="s">
			<button class="submit center-block" type="submit">GO</button>
		</form>
	</div>

<?php

	// If search is not empty, run search_intakes() which
	// queries the database and returns an array of $results
	if (!empty($search)) {
		$results = search_intakes($search);

		// Checks for results from the query
		if (empty($results)) {
			echo "<p>No intakes were found matching <b>" . $search . "</b>.</p>";
			echo "<p>Please check for typing errors or search for another intake.</p>";
		}  else {
	?>

	<div class="row">
		<div class="col-xs-4">
			<h4>Name:</h4>
		</div>
		<div class="col-xs-4">
			<h4>MR Number:</h4>
		</div>
		<div class="col-xs-4">
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