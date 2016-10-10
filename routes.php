<?php

$router->get('', 'controllers/index.php');
$router->get('search', 'controllers/search.php');
$router->get('intake', 'controllers/intake.php');
$router->get('details', 'controllers/details.php');
$router->post('add-intake', 'controllers/add-intake.php');
$router->get('search-query', 'controllers/search.php');