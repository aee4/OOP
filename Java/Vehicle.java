
abstract class Vehicle {
    protected String vehicleId;
    protected String model;
    protected double fuelLevel;

    public Vehicle(String vehicleId, String model, double fuelLevel) {
        this.vehicleId = vehicleId;
        this.model = model;
        this.fuelLevel = fuelLevel;
    }

    public void refuel(double liters) {
        this.fuelLevel += liters;
    }
}