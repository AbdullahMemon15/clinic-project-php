<?php
require 'config.php';

function db_connect() {
    try {
        $connectionString = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME;
        $pdo = new PDO($connectionString, DBUSER, DBPASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        // Log the error and stop the script
        error_log("Connection failed: " . $e->getMessage());
        die("Connection issue. Please try again later."); // User-friendly message
    }
}

function submit_post($pdo) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize and prepare input data
        $firstname = htmlspecialchars($_POST['firstname']);
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
            $success = $stmt->execute([$firstname, $lastname, $gender, $email, $dob, $contactNo, $insuranceNo, $address]);

            if ($success) {
                return "Patient added successfully!";
            } else {
                return "Failed to add patient.";
            }
        } catch (PDOException $e) {
            error_log("Insert failed: " . $e->getMessage());
            return "Error processing your request. Please try again later."; // User-friendly message
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
