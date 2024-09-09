<?php
$dsn = 'mysql:host=db;dbname=portfolio';
$username = "user";
$password = "password";

// Create connection
try {
  $pdo = new PDO($dsn, $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected succesfully";
} catch (PDOException $e) {
  echo "Connection failed: " . $e.getMessage();
}

?>
