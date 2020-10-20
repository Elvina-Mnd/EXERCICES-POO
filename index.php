<?php

require 'Bicycle.php';
require 'Car.php';
require 'Truck.php';
require 'Skateboard.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';



/*$bicycle = new Bicycle ('red', 1, 'fuel');
echo $bicycle->forward();
var_dump($bicycle);*/

/*$bike = new Bicycle('blue');

$bike->setCurrentSpeed= 20;

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();*/


// Instanciation d'un nouvel objet $rockrider
/*$rockrider = new Bicycle();
$rockrider->setColor = 'yellow';

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle();
$tornado->setColor = 'black';*/

/*$doLorean = new Car('red', 4, 'plutonium');
$doLorean->setCurrentSpeed= 25;

echo $doLorean->start();
echo $doLorean->forward();
echo '<br> Vitesse de la voiture : ' . $doLorean->getCurrentSpeed() . ' km/h' . '<br>';
echo $doLorean->brake();
echo '<br> Vitesse de la voiture : ' . $doLorean->getCurrentSpeed() . ' km/h' . '<br>';
echo $doLorean->brake();*/

/*$doLorean = new Car('yellow', 4, "extraplutonium", 5);
echo $doLorean->forward();
echo '<br> Vitesse de la voiture : ' . $doLorean->getCurrentSpeed() . ' km/h' . '<br>';
echo $doLorean->brake();
echo '<br> Vitesse de la voiture : ' . $doLorean->getCurrentSpeed() . ' km/h' . '<br>';
echo $doLorean->brake();*/


/*var_dump(Car::ALLOWED_ENERGIES);*/




/*echo $Wanda->isLoading();

echo $Wanda->forward();
echo $Wanda->forward();
echo '<br> Vitesse du camion : ' . $Wanda->getCurrentSpeed() . ' km/h' . '<br>';
echo $Wanda->brake();
echo '<br> Vitesse du camion : ' . $Wanda->getCurrentSpeed() . ' km/h' . '<br>';
echo $Wanda->brake();*/


$autoroute = new MotorWay();
$route = new ResidentialWay();
$pieton = new PedestrianWay();


$doLorean = new Car('red', 1, 'fuel');
$autoroute->addVehicle($doLorean);
var_dump($autoroute);

$Wanda = new Truck('red', 1, 'fuel', 5);
$autoroute->addVehicle($Wanda);
var_dump($autoroute);

$skate = new Skateboard('black', 1, 'electric');
$route->addVehicle($skate);
var_dump($route);

$velo = new Bicycle ('yellow', 2, 'wind');
$pieton->addvehicle($velo);
$pieton->addvehicle($skate);
var_dump($pieton);





