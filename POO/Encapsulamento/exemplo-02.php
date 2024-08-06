<?php

class Person
{

   public $name = "Rasmus Lerdof";
   protected $age = 48;
   private $password = "123456";

   public function viewData()
   {
      echo get_class($this) . "<br/>";

      echo $this->name . "<br/>";
      echo $this->age . "<br/>";
      echo $this->password . "<br/>";
   }
}

class Programmer extends Person {

   public function viewData()
   {
      echo get_class($this) . "<br/>";

      echo $this->name . "<br/>";
      echo $this->age . "<br/>";
      // echo $this->password . "<br/>"; Não tem acesso aqui.
   }

}

$object = new Person();
$object->viewData();

echo "<br/>";

$object = new Programmer();
$object->viewData();