<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'database/database.php';

$pdo = db_connect();

// Process form submission
submit_post($pdo);

// Continue to load the rest of your page or redirect
include 'template/registration.php';
?>
