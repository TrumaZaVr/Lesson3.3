<?php

  abstract class Product
  {
      protected $name;
      protected $price;
      public function __construct($name, $price)
      {
          $this->name = $name;
          $this->price = $price;
      }
      public function getInfo()
      {
          echo $this->name . PHP_EOL;
          echo $this->price . PHP_EOL;
          echo "<br />";
      }

  }