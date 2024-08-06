<?php 

function sum(float...$values):float {

   return array_sum(($values));

}

echo sum(2, 2);
echo "<br/>";

echo sum(17, 13);
echo "<br/>";

echo sum(1.5, 3.7);
echo "<br/>";

?>