<?php

require_once 'Vehicle.php';
class Car extends Vehicle{

    const ALLOWED_ENERGIES = ['fuel', 'electric'];
    
    private $energy;
    private $energyLevel;
    protected $currentSpeed = 5;
    private $hasParkBrake;
    public function __construct(string $color, int $nbSeats, string $energy, bool $hasParkBrake)
    {
        parent::__construct($color,$nbSeats);
        $this->energy = $energy;
        $this->hasParkBrake = $hasParkBrake;
    }

    
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): Car
    {   
        if(in_array($energy,self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    
    public function getHasParkBrake(): bool
    {
    return $this->hasParkBrake;
    }

    public function setHasParkBrake (bool $hasParkBrake) : void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function setParkBrake(){
        $this->hasParkBrake = false;
    }

    public function start(){
        
        try {
            if ($this->getHasParkBrake()===true) {
                throw new Exception("Attention, le frein à main est enclanché.");
            }
        } catch (Exception $e) {
            echo "Exception received: <br>". $e->getMessage();
            return $this->setParkBrake();
        } finally {
            echo "Ma voiture roule comme un donut !";
            
        }

    }

}