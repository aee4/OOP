
<?php
include "Vehicle.php";
class Car extends Vehicle{
    private float $fuelEfficiency;

    public function __construct(string $vehicleId, string $model,$fuelLevel,$fuelEfficiency){
        parent::__construct($vehicleId, $model,$fuelLevel);
        $this->fuelEfficiency = $fuelEfficiency;
    }
public function getEfuelEfficiency() :float {
    return $this->fuelEfficiency;
    }
public function setEfuelEfficiency($fuelEfficiency) : void {
        $this->fuelEfficiency = $fuelEfficiency;
    }

public function calculateRange(): string {
        return $this->fuelEfficiency * $this-> fuelLevel;      
}
}
























?>