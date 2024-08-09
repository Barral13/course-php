<?php 

$dt = new DateTime();

$periodo = new DateInterval("P13D");

echo $dt->format("d/m/Y - H:i:s");
echo "<br><br>";

$dt->add($periodo);

echo $dt->format("d/m/Y - H:i:s")

?>