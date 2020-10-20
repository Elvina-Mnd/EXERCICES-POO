<?php

require_once 'HighWay.php';

final Class PedestrianWay extends HighWay
{
    public function __construct()
    {
        $this->nbLane = 1;
        $this->maxSpeed = 10;
    }
    
    public function addVehicle(object $vehicle)
    {
        $currentVehicles = [];
        if ($vehicle instanceof Skateboard || $vehicle instanceof Bicycle) {
            $this->currentVehicles[] = array_push($currentVehicles, $vehicle);
        }
    } 
}