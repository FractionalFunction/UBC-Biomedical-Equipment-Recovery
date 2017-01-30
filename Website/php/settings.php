<?php

/*
 * Settings for the UBC Biomedical Equipment Recovery Website
 * 
 * This file may contain sensitive information!
 */

// Debug status
// Don't forget to turn this off in production!
define("DEBUG", true);

// Database connection
define("DB_SERVER", "localhost");
define("DB_USERNAME", "username");
define("DB_PASSWORD", "password");

include_once("database.php");

// Contact information
$contactInformation = array(
	"email" => "ubcequipmentrecovery@gmail.com",
);