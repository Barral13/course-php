<?php

class Person
{

   public $name = "Rasmus Lerdof";
   protected $age = 48;
   private $password = "123456";

   public function viewData()
   {

      echo $this->name . "<br/>";
      echo $this->age . "<br/>";
      echo $this->password . "<br/>";
   }
}

$object = new Person();

echo $object->name . "<br/><br/>";
// echo $object->age . "<br/>"; Error
// echo $object->password . "<br/>"; Error

$object->viewData();