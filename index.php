<?php
include("inc/header.php");
?>

	<div class="container-fluid text-center">
		<div>
			<h1 class="header">Some Institute Aquatic Therapy Program</h1>
		</div>

		<div>
			<h2 class="header">Would you like to...</h2>
		</div>

		<div class="row">
			<div class="col-sm-6">
				<h3 class="header">Add a new intake?</h3>
				<button class="button"><a href="intake.php">Add New</a></button>
			</div>

			<div class="col-sm-6">
				<h3 class="header">Search for an intake?</h3>
				<button class="button"><a href="search.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</a></button>
			</div>
		</div>
	</div>

<?php
include("inc/footer.php");
?>