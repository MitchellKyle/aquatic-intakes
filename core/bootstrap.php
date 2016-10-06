<?php

$config = require 'config.php';

require 'Router.php';
require 'Request.php';
require 'core/database/QueryBuilder.php';
require 'core/database/Connection.php';

$query = new QueryBuilder(
	Connection::make($config['database'])
);