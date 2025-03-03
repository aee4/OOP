using System;

class TransportationManager
{
    public void OperateVehicle(Vehicle vehicle)
    {
        Console.WriteLine($"Operating Vehicle: {vehicle.CalculateRange()} km estimated range.");
    }
}
