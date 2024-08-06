<?php 

$person = array(
   'name'=>'João',
   'idade'=>20
);

foreach ($person as &$value) {
   
   if (gettype($value) === 'integer') $value +=7;

   echo $value."<br/>";

}

print_r($person);

?>