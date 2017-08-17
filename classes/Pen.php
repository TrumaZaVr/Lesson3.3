<?php
class Pen extends Product implements PenInterface

{
    public $brand;
    public $price;
    public function __construct($brand,$name, $colour, $price)
    {
        parent::__construct($name, $colour);
        $this->brand = $brand;
        $this->price = $price;
    }
    public function getInfo ()
    {
        echo $this -> brand . PHP_EOL;
        echo $this -> name . PHP_EOL;
        echo $this -> colour . PHP_EOL;
        echo $this -> price . PHP_EOL;
        echo "<br>";
    }
}
echo ' <b>Список Шариковых ручек:</b> <br/>';
$PenOne = new Pen('Parker','Eleganto','Tactical Grey Green BP', '900');
$PenOne-> getInfo ();
$PenTwo = new Pen('Pilot', 'Pilot MR','Wildness Silver', '1215');
$PenTwo-> getInfo ();