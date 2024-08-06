<?php 

// MYSQLI

$dbtype = "mysql";
$dbname = "db_php";
$host = "localhost";
$dbuser = "root";
$dbpassword = "";

// Database configuration (Type_DB:database;server, "user", "password").
$conn = new PDO("$dbtype:dbname=$dbname;host=$host", "$dbuser", "$dbpassword");

//READ
$stmt = $conn->prepare("SELECT * FROM tb_users ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
   foreach ($row as $key => $value) {
      echo "<strong>".$key.":</strong> ".$value."<br/>";
   }
   echo "==================================================<br/>";
}

?>