<?php 

class Address {

   private $logradouro;
   private $number;
   private $city;

   public function __construct($a, $b, $c)
   {
      $this->logradouro = $a;
      $this->number = $b;
      $this->city = $c;
   }

   public function __destruct()
   {
      // var_dump("DESTRUCT");
   }

   public function __toString()
   {
      return $this->logradouro.", ".$this->number.", ".$this->city;
   }

}

$myAddress = new Address("Rua Moisés Marx", "702", "São Paulo");

// print_r($myAddress);

// unset($myAddress);

echo $myAddress;

?>