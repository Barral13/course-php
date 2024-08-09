<?php

function treatName($name)
{

   if (!$name) {
      throw new Exception("Nome não informado <br>", 1);
   }

   echo ucfirst($name) . "<br>";
}

try {

   treatName("Dhanglerson");
   treatName("");
} catch (Exception $e) {
   echo $e->getMessage();
} finally {

   echo "Bloco Try executado!";
}
