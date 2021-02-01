<?php
session_start();
//Site Variables
define('SITE_URL',      'https://localhost:6969');
define('ASSETS_URL',   SITE_URL . '/assets');
define('TEMPLATES_PATH',      'views');

// Database
define('DB_HOST', 'localhost');
define('DB_NAME', 'bookings-website');
define('DB_USER', 'root');       
define('DB_PASS', '');

include_once("../../vendor/a1phamumeric/class.DBPDO.php");
$DB = new DBPDO();