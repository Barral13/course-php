<?php 

function hello($text = "World", $period = "Good Morning"){

   return "Hello $text! $period<br/>";

}

// Valores obrigatórios devem ficar sempre a esquerda!
echo hello("", "");
echo hello(); // Recebe o padrão do parametro!
echo hello("Dhanglerson", "Good Afternon");
echo hello("Barral", "Goog Nigth");

?>