<?php

class Car
{

   private $model;
   private $enginer;
   private $yaer;

   public function getModel()
   {

      return $this->model;
   }

   public function setModel($model)
   {
      $this->model = $model;
   }


   public function getEnginer()
   {

      return $this->enginer;
   }

   public function setEnginer($enginer)
   {
      $this->model = $enginer;
   }


   public function getYaer()
   {

      return $this->yaer;
   }

   public function setYaer($yaer)
   {
      $this->yaer = $yaer;
   }


   public function display()
   {
      return array(
         "model" => $this->getModel(),
         "enginer" => $this->getEnginer(),
         "year" => $this->getYaer()
      );
   }
}

$corolla = new Car();
$corolla->setModel("Corolla");
$corolla->setEnginer(2.0);
$corolla->setYaer(2024);

var_dump($corolla->display());
