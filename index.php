<?php

require_once 'Classes/Bike.php';
require_once 'Classes/Car.php';
require_once 'Classes/HighWay.php';
require_once 'Classes/MotorWay.php';
require_once 'Classes/PedestrianWay.php';
require_once 'Classes/ResidentialWay.php';
require_once 'Classes/Skateboard.php';
require_once 'Classes/Vehicle.php';
require_once 'Classes/PickUp.php';
require_once 'Classes/FamilyCar.php';



$bike = new Bike();
$skateboard = new Skateboard();
$familycar = new FamilyCar();
$pickup = new PickUp();

$motor = new MotorWay(4,130);
$pedestrian = new PedestrianWay(1, 10);
$residential = new ResidentialWay(2, 50);

/**
 * TEST MotorWay + ResidentialWay + PedestrianWay = GOOD 
*/
$motor->addVehicle($familycar);
$residential->addVehicle($pickup);
$pedestrian->addVehicle($bike);


echo "===========================".PHP_EOL;

/**
 * TEST MotorWay + ResidentialWay + PedestrianWay = NOT GOOD 
*/
$motor->addVehicle($bike);
/*$residential->addVehicle($bike); Could not test because not a vehicule*/
$pedestrian->addVehicle($familycar);