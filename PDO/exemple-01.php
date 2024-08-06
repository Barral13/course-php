<?php 

// SQLSERVER

// Database configuration (Type_DB:database;server\DB, "user", "password").
$conn = new PDO("sqlsrv:Database=db_php;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "");

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