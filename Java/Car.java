public class Car extends Vehicle {
    private double fuelEfficiency;

    public Car(String vehicleId, String model, double fuelLevel, double fuelEfficiency) {
        super(vehicleId, model, fuelLevel);
        this.fuelEfficiency = fuelEfficiency;
    }

    public double getFuelEfficiency() {
        return fuelEfficiency;
    }

    public void setFuelEfficiency(double fuelEfficiency) {
        this.fuelEfficiency = fuelEfficiency;
    }

    public double calculateRange() {
        return fuelEfficiency * getFuelLevel();
    }
}