<?php 

$dbtype = "mysql";
$dbname = "db_php";
$host = "localhost";
$dbuser = "root";
$dbpassword = "";

$conn = new PDO("$dbtype:dbname=$dbname;host=$host", "$dbuser", "$dbpassword");

//CREATE
$stmt = $conn->prepare("INSERT INTO tb_users (deslogin, despassword) VALUES(:LOGIN, :PASSWORD)");

$login = ""; // Insira o login desejado
$password = ""; // Insira a senha desejada

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Dados inseridos com sucesso!";

?>