<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface

{

    protected $currentSpeed = 20;

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function switchOn() :bool
    {
        if($this->currentSpeed >= 10){
            return true;
        } else {
            return false;
        }
    }

    public function switchOff() :bool
    {
        return false;
    }

}