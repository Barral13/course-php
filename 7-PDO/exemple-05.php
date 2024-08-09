<?php 

$dbtype = "mysql";
$dbname = "db_php";
$host = "localhost";
$dbuser = "root";
$dbpassword = "";

$conn = new PDO("$dbtype:dbname=$dbname;host=$host", "$dbuser", "$dbpassword");

//DELETE
$stmt = $conn->prepare("DELETE FROM tb_users WHERE iduser = :ID");

$id = 4; // Id dos dados a serem excluidos

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados excluidos com sucesso!";

?>