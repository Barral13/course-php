<?php 

session_id('3at3eegivqvb31hqvm8c62g32f');

require_once("./config.php");   

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>