<?php 

$a = 10;

// Passagem de parametro por referencia!
function changeValue(&$b){

   $b += 50;
   return $b;

}

echo "$a <br/>";
echo changeValue($a);

?>