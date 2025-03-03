<?php
class TransportationManager{
    public function operateVehicle(Vehicle $vehicle) {
        echo "Operating Vehicle: {$vehicle->calculateRange()} km estimated range.";
    }


}
?>