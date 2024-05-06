<?php
require 'config.php';

function db_connect() {
    try {
        $connectionString = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME;
        $pdo = new PDO($connectionString, DBUSER, DBPASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        error_log("Connection failed: " . $e->getMessage());
        die("Connection failed: " . $e->getMessage()); // Consider a more user-friendly message in production
    }
}

function submit_post($pdo) {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Collect and sanitize input data using alternative methods
      $firstname = htmlspecialchars($_POST['firstname']); // Use htmlspecialchars to prevent XSS
      $lastname = htmlspecialchars($_POST['lastname']);
      $gender = htmlspecialchars($_POST['gender']);
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
      $dob = htmlspecialchars($_POST['dob']);
      $contactNo = htmlspecialchars($_POST['contactNo']);
      $insuranceNo = filter_input(INPUT_POST, 'insuranceNo', FILTER_SANITIZE_NUMBER_INT);
      $address = htmlspecialchars($_POST['address']);

      try {
          $sql = 'INSERT INTO patient (firstname, lastname, gender, email, dob, contactNo, insuranceNo, address) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
          $stmt = $pdo->prepare($sql);
          $stmt->execute([$firstname, $lastname, $gender, $email, $dob, $contactNo, $insuranceNo, $address]);
          if ($stmt->rowCount() > 0) {
              echo 'Patient added successfully!';
          } else {
              echo 'No data inserted.';
          }
      } catch (PDOException $e) {
          error_log("Insert failed: " . $e->getMessage());
          echo "Insert failed: " . $e->getMessage(); // Consider a more user-friendly message in production
      }
  }
}

?>


<!-- // Get all comments from database and store in $comments
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


// } -->
