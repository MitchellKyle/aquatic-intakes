<?php

$router->get('', 'controllers/index.php');
$router->get('search', 'controllers/search.php');
$router->get('intake', 'controllers/intake.php');
$router->get('intake-details', 'controllers/details.php');
$router->post('add-intake', 'controller/add-intake.php');