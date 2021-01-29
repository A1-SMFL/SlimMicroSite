<?php
require 'system/config.php';
require 'start-up.php';

//routes
require 'routes/main-pages.php';
require 'routes/admin-pages.php';
$app->run();
	