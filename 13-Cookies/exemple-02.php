<?php 

if (isset($_COOKIE["NAME_COOKIE"])) {
   
   $obj = json_decode($_COOKIE["NAME_COOKIE"]);

   echo $obj->company;
}

?>