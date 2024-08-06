<?php 

$dbtype = "mysql";
$dbname = "db_php";
$host = "localhost";
$dbuser = "root";
$dbpassword = "";

$conn = new PDO("$dbtype:dbname=$dbname;host=$host", "$dbuser", "$dbpassword");

// TRANSACTIONS
$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_users WHERE iduser = ?");
$id = 1;

$stmt->execute(array($id));

// $conn->rollBack();
$conn->commit();

echo "Delete OK!";

?>