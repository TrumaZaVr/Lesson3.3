<?php

class Car extends Product implements CarInterface
{
    public $brand;
    public $type;
    public $price;

    public function __construct($brand, $name, $colour, $type, $price)
    {
        parent::__construct($name, $colour);
        $this->brand = $brand;
        $this->type = $type;
        $this->price = $price;
    }
    public function getInfo()
    {
        echo $this->brand . PHP_EOL;
        echo $this->name . PHP_EOL;
        echo $this->type . PHP_EOL;
        echo $this->price . PHP_EOL;
        echo "<br />";
    }

}
echo ' <b>Список автомобилей:</b> <br/>';
$carOne = new Car('BMW','324', 'черный', 'купэ', 3500);
$carOne-> getInfo ();

$carTwo = new Car('Mercedes','320', 'белый', 'седан', 4000);
$carTwo-> getInfo ();
