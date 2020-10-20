<?php

require_once 'HighWay.php';

final Class ResidentialWay extends HighWay
{
    public function __construct()
    {
        $this->nbLane = 2;
        $this->maxSpeed = 50;
    }
    
    public function addVehicle(object $vehicle)
    {
        $currentVehicles = [];
        if ($vehicle instanceof Car || $vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            $this->currentVehicles[] = array_push($currentVehicles, $vehicle);
        }
    } 
}