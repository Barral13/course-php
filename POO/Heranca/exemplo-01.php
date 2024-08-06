<?php

class Document
{

   private $number;

   public function getNumber()
   {

      return $this->number;
   }

   public function setNumber($n)
   {
      $this->number = $n;
   }
}

class CPF extends Document
{

   public function validate(): bool
   {
      // $numberCPF = $this->getNumber();

      return true;
   }
}

$doc = new CPF();

$doc->setNumber("34516147");

var_dump($doc->validate());

echo "<br/>";
echo $doc->getNumber();
