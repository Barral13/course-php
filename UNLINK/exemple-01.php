<?php 

// EXLUINDO DIRETORIOS
$file = fopen("test.txt", "w+");
fclose($file);

unlink("test.txt");

echo "Arquivo removido com sucesso!";

?>