<?php
include_once("inc/functions.php");

// $search = null;
// $results = array();

// Checks if there is a search query and filters the input
// if (isset($_GET["q"])) {
// 	$search = filter_input(INPUT_GET, "q", FILTER_SANITIZE_STRING);
// }
if (empty($_GET['q'])) {
	$_GET['q'] = '';
}

require 'partials/header.php';
?>

<div class="container-fluid">
	<div>
		<h1 class="header">Search For An Intake</h1>
		<p class="search-directions container"><b>Search by Name, Medical Records Number or Date of Birth.</b></p>
	</div>
	<!-- Search Form -->
	<div class="form-group container">
		<form method="GET" action="search-query">
			<label for="s">Search:</label>
			<input class="form-control" type="text" name="q" id="s">
			<button class="submit center-block" type="submit">GO</button>
		</form>
	</div>

<?php
	if ($_GET['q'] === '') {
		echo "Please enter something to search.";
	}

	// If search is not empty, run search_intakes() which
	// queries the database and returns an array of $results
	
		

		// Checks for results from the query
		else if (empty($results)) {
			echo "<p>No intakes were found matching your search.</p>";
			echo "<p>Please check for typing errors or search for another intake.</p>";
		}
	else {
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
			<?php foreach ($results as $result) : ?>
				<li style="list-style: none;">
				<?= $result->first_name; ?>
				<?= $result->last_name; ?>
				<?= $result->records_number; ?>
				<?= $result->date_of_birth; ?>
				</li>
			<?php endforeach; ?>
			<?php
				}
			
				?>
	</div>
</div>

<?php
require 'partials/footer.php';
?>