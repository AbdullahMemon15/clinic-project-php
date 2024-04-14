<?php
require 'config2.php';
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
        if (isset($_POST['reason']) && isset($_POST['email']) && isset($_POST['fullName'])) {
            //PREPARED statement
            $sql = 'INSERT INTO walk (date ,fullName, email, reason)
  VALUES (:date, :fullName, :email, :reason)';
            $statement = $pdo->prepare($sql);
            $statement->bindValue(':date', date('Y-m-d'));
            $statement->bindValue(':fullName', $_POST['fullName']);
            $statement->bindValue(':email', $_POST['email']);
            $statement->bindValue(':reason', $_POST['reason']);
            $statement->execute();
        }
    }
}

// Get all comments from database and store in $comments
function get_posts()
{
    global $pdo;
    global $hello;

    $sql = "SELECT * FROM walk ORDER BY ID ASC";
    $result = $pdo->query($sql);
    // fetch a record from result set into an associative array
    while ($row = $result->fetch()) {
        $hello[] = $row;
    }
}

// Get unique email addresses and store in $commenters
function get_commenters()
{
    global $pdo;
    global $patients;

    $sql = "SELECT DISTINCT fullName FROM walk ORDER BY ID ASC";
    $result = $pdo->query($sql);
    // fetch a record from result set into an associative array
    while ($row = $result->fetch()) {
        $patients[] = $row;
    }
}
