
class Main
{
    static void Main()
    {
        // ENCAPSULATION
    CommissionEmployee employeeOne = new CommissionEmployee("Pops", "Agbetor", "169", 5000, 0.10);
        Console.WriteLine("Commision Employee Details:");
        Console.WriteLine(employeeOne);

        employeeOne.GrossSales = 7000;
        employeeOne.CommissionRate = 0.12;

        Console.WriteLine("Updated Employee Details:");
        Console.WriteLine(employeeOne);

        //INHERITANCE
        CommissionEmployee employeeTwo = new CommissionEmployee("John", "Doe", "123-45-6789", 5000f, 0.10f);
        Console.WriteLine("First Employee Details:");
        employeeTwo.DisplayEmployeeDetails();

        BasePlusCommissionEmployee baseEmployeeThree = new BasePlusCommissionEmployee("Jane", "Smith", "987-65-4321", 6000f, 0.12f, 2000f);
        Console.WriteLine("\nBasePlusCommission Employee Details:");
        baseEmployeeTree.DisplayEmployeeDetails();
    
       //POLYMORPHISM

        Car sedan = new Car("C001", "Sedan", 50, 15);

        sedan.Refuel(20);
        Console.WriteLine($"Fuel Level after refueling: {sedan.FuelLevel} liters");

        TransportationManager manager = new TransportationManager();
        manager.OperateVehicle(sedan);

    }

}   