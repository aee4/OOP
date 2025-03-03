using System;

abstract class Vehicle
{
    protected string VehicleId { get; set; }
    protected string Model { get; set; }
    protected float FuelLevel { get; set; }

    protected Vehicle(string vehicleId, string model, float fuelLevel)
    {
        VehicleId = vehicleId;
        Model = model;
        FuelLevel = fuelLevel;
    }

    public float Refuel(float liters)
    {
        FuelLevel += liters;
        return FuelLevel;
    }

    public abstract string CalculateRange();
}
