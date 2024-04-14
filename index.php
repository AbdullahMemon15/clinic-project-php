<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// array of posts, fetched from database
$posts = [];
// array of unique commenter email addresses
// $commenters = [];

require_once 'database/database.php';
// require_once 'template/functions/template_functions.php';

//connect to database: PHP Data object representing Database connection
$pdo = db_connect();

// include the template to display the page
include 'template/index.php';
 ?>