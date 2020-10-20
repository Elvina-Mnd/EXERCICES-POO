<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    const STOCKCAPACITY = 50;
    private $load = 0;
    private $energy;
    private $stockCapacity;
    protected $currentSpeed = 10;

    public function __construct(string $color, int $nbSeats, string $energy, int $load)
    {
        parent::__construct($color,$nbSeats, $energy);
        $this->energy = $energy;
        $this->load = $load;
        $this->stockCapacity = self::STOCKCAPACITY;

    }

    public function getStockCapacity(): int
    {
        return $this->stockCapacity;
    }

    public function isLoading()
    {
         
        if($this->load === self::STOCKCAPACITY){
            return 'full';
        }
        else{
            return 'in filling';
        }
    }

    
}