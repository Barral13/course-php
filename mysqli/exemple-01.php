<?php 

// Database configuration (server, user, password, database).
$conn = new mysqli("localhost", "root", "", "db_php");

if ($conn->connect_error) {
   echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_users (deslogin, despassword) VALUES (?, ?)");

$login = "user_test";
$password = "test1";

$stmt->bind_param("ss", $login, $password);

$stmt->execute();

$login = "user_test2";
$password = "test2";

$stmt->execute();

?>