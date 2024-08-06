<?php 

$dbtype = "mysql";
$dbname = "db_php";
$host = "localhost";
$dbuser = "root";
$dbpassword = "";

$conn = new PDO("$dbtype:dbname=$dbname;host=$host", "$dbuser", "$dbpassword");

//CREATE
$stmt = $conn->prepare("UPDATE tb_users SET deslogin = :LOGIN, despassword = :PASSWORD WHERE iduser = :ID");

$login = "Excluir";
$password = "test4";
$id = 3;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados atualizados com sucesso!";

?>