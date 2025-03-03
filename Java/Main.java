public class Main {
    public static void main(String[] args) {
        CommissionEmployee employeeOne = new CommissionEmployee("Emmanuel", "Agbetor", "GH232323", 300, 0.5);
        employeeOne.setGrossSales(78000);
        employeeOne.setCommissionRate(0.5);
        System.out.println(employeeOne.display());
        System.out.println("Total Earnings: " + employeeOne.earnings());

        BasePlusCommissionEmployee employeeTwo = new BasePlusCommissionEmployee("Emmanuella", "Agbetor", "T2NO-21", 0.5, 600000, 42000);
        System.out.println("Total Earnings: " + employeeTwo.earnings());
        employeeTwo.setBaseSalary(47000);
        System.out.println("Updated Total Earnings: " + employeeTwo.earnings());

        Car myCar = new Car("C001", "Sedan", 50, 15);
        myCar.refuel(200);

        TransportationManager managerOne = new TransportationManager();
        managerOne.operateVehicle(myCar);

        FullTimeEmployee employeeThree = new FullTimeEmployee("Agbetor", "22206812", 16700.00);
        System.out.println(employeeThree.display());
        System.out.println(employeeThree.calculatePay());
    }
}
