<?php 

function hello(){

$argumentos = func_get_args();

return $argumentos;

}

var_dump (hello("Good Morning", 10, true));

?>