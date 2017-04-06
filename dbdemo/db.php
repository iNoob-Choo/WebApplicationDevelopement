<?php

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'uecs2094_sample');

function initDb() {
	$db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
	if ($db->connect_errno) {
		echo 'Failed to connect to MySQL: (' . $db->connect_errno . ') ' . $db->connect_error;
	}
	return $db;
}