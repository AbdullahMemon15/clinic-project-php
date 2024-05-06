<?php
$url = parse_url(getenv("JAWSDB_URL"));

define('DBHOST', $url['host']);
define('DBUSER', $url['user']);
define('DBPASS', $url['pass']);
define('DBNAME', substr($url["path"], 1)); // Removing leading '/' from database name
?>
