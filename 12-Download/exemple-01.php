<!--
// DOWNLOAD FILES
-->
<?php 

$link = "https://www.google.com.br/logos/doodles/2024/paris-games-climbing-day-2-6753651837110565-la202124.gif";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);
?>

<img src="<?=$basename?>"/>