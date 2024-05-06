
<?php
// Use environment variables for database configuration
define('DBHOST', getenv('DBHOST') ?: 'localhost'); // Fallback to 'localhost' if not set
define('DBNAME', getenv('DBNAME') ?: 'registration');
define('DBUSER', getenv('DBUSER') ?: 'root');
define('DBPASS', getenv('DBPASS') ?: '');
?>
