<?php
class TV extends SuperObject implements TVinterface
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
        echo $this->colour . PHP_EOL;
        echo $this->type . PHP_EOL;
        echo $this->price . PHP_EOL;
        echo "<br>";
    }
}
echo ' <b>Список теливизоров:</b> <br/>';
$TVOne = new TV('SUMSUNG','UE65KS7500U', 'Black','QLED TV', '35000');
$TVOne-> getInfo ();
$TVTwo = new TV('LG','55LH609V', 'Silver','LED', '29000');
$TVTwo-> getInfo ();
