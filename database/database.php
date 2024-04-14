<?php
require 'config.php';
// Should return a PDO
function db_connect()
{

  try {
    // try to open database connection using constants set in config.php
    $connectionString = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME;
    $user = DBUSER;
    $pass = DBPASS;
    // MAKE CONNECTION AND SET UP ERROR STUFF
    $pdo = new PDO($connectionString, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  } catch (PDOException $e) {
    die($e->getMessage());
  }
}

// Handle form submission
function submit_post()
{
  global $pdo;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // GO THROUGH AND BIND EACH VALUE
    if ( isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['gender'])&&
    isset($_POST['email']) && isset($_POST['dob']) && isset($_POST['contactNo']) &&
    isset($_POST['insuranceNo']) && isset($_POST['address']) ) {
      //PREPARED statement
      $sql = 'INSERT INTO patient (firstname, lastname, gender, email, dob, contactNo, insuranceNo, address)
  VALUES (:firstname,:lastname,:gender,:email,:dob, :contactNo, :insuranceNo,:address)';
      $statement = $pdo->prepare($sql);

      $statement->bindValue(':firstname', $_POST['firstname']);
      $statement->bindValue(':lastname', $_POST['lastname']);
      $statement->bindValue(':gender', $_POST['gender']);
      $statement->bindValue(':email', $_POST['email']);
      $statement->bindValue(':dob', date('Y-m-d'));
      $statement->bindValue(':contactNo', $_POST['contactNo']);
      $statement->bindValue(':insuranceNo', $_POST['insuranceNo']);
      $statement->bindValue(':address', $_POST['address']);

      $statement->execute();
    }
  }
}

// Get all comments from database and store in $comments
// function get_posts()
// {
//   global $pdo;
//   global $posts;

//   $sql = "SELECT * FROM comments ORDER BY ID DESC";
//   $result = $pdo->query($sql);
//   // fetch a record from result set into an associative array
//   while ($row = $result->fetch()) {
//     $posts[]=$row;
//   }
// }

// Get unique email addresses and store in $commenters
// function get_commenters()
// {
//   global $pdo;
//   global $commenters;

//   $sql = "SELECT DISTINCT email FROM comments ORDER BY ID DESC";
//   $result = $pdo->query($sql);
//   // fetch a record from result set into an associative array
//   while ($row = $result->fetch()) {
//     $commenters[]=$row;

//   }


// }
