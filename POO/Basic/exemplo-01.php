<?php 

class Person {

   public $name;

   public function speak(){

      return "My name is ".$this->name;

   }
}

$barral = new Person();
$barral->name = "Dhanglerson Barral";
echo $barral->speak();

?>