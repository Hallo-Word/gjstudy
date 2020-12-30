<?php

//define a car class

class Car{

const WHEELS = 4; 

var $seats;
var $doors;
var $engine;
var $brand;

public function __construct($a, $b=4, $c=1, $d=5){

	$this->seats = $d; 
	$this->doors = $b;
	$this->engine = $c;
	$this->brand = $a;

}

public function getBrand(){

	return $this->brand;
}

public function setBrand($brand){

	$this->brand = $brand;
}

public function drive(){

echo 'car is driving';

}

public function stop(){

echo 'car is stopped';

}

}

$car = new Car('VW');

var_dump($car->doors);
var_dump($car->brand);
var_dump($car->getBrand());

$car->drive();
$car->stop();

//$car = new Car();
//
//var_dump(Car::WHEELS);
//$car->setBrand('大众');
//echo '<br/>';
//var_dump($car->getBrand());
//echo '<br/>';
//$car->drive();
//
//echo '<br/>';
//
//
//
//if(class_exists('Car')){
//
//echo "class Car exists.".PHP_EOL;
//
//		}else{
//
//echo "class Car doesn't exist.".PHP_EOL;
//
//}
//

?>


