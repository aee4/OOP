<?php
abstract class Vehicle{
    protected string $vehicleId;
    protected string$model;
     protected float $fuelLevel;

     public function __construct(string $vehicleId, string $model,$fuelLevel){
        $this->vehicleId = $vehicleId;
        $this->model = $model;
        $this->fuelLevel = $fuelLevel;
     }

     public function refuel (float $liters){
        $this->fuelLevel += $liters;
        return $this->fuelLevel;
     }

     abstract public function calculateRange(): string;

















}


























?>