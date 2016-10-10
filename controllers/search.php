<?php
if (isset($_GET['q'])) {
	$results = App::get('database')->search('intakes', $_GET['q']);
}

require 'views/search.view.php';