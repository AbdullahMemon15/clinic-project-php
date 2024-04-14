<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$hello = [];
// array of unique commenter email addresses
$patients = [];
// array of posts, fetched from database

require_once 'database/database2.php';
// require_once 'template/functions/template_functions.php';

//connect to database: PHP Data object representing Database connection
$pdo = db_connect();

// submit comment to database
submit_post();

// get posts from database
get_posts();

// get commenters from database
get_commenters();

// include the template to display the page
include 'template/walk.php';

 ?>