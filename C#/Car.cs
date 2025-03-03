using System;

class Car : Vehicle
{
    private float fuelEfficiency;

    public Car(string vehicleId, string model, float fuelLevel, float fuelEfficiency) 
        : base(vehicleId, model, fuelLevel)
    {
        this.fuelEfficiency = fuelEfficiency;
    }

    public float GetFuelEfficiency()
    {
        return fuelEfficiency;
    }

    public void SetFuelEfficiency(float fuelEfficiency)
    {
        this.fuelEfficiency = fuelEfficiency;
    }

    public override string CalculateRange()
    {
        return (fuelEfficiency * FuelLevel).ToString();
    }
}
