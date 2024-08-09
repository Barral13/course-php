<?php 

$data = array(
   "company"=>"Barral Dev"
);

setcookie("NAME_COOKIE", json_encode($data), time() + 3600);

echo "OK";

?>