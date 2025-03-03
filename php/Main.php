<?php
include "CommisionEmployee.php"; 
include "BasePlusCommissionEmployee.php";
include "Car.php";
include "TransportationManager.php";
include "FullTimeEmployee.php";

//Encapsulation
$employeeOne = new CommissionEmployee("Emmanuel", "Agbetor", "GH232323", 300, 0.5);

 $employeeOne->setGrossSales(78000); 
 $employeeOne->setCommissionRate(0.5);

echo $employeeOne-> display() ;

echo "  Total Earnings: " . $employeeOne-> earnings();

//Inheritance
$employeeTwo = new BasePlusCommissionEmployee("Emmanuella", "Agbetor","T2NO-21",0.5, 600000, 42000);

echo "  Total Earnings: " . $employeeTwo-> Earnings();
$employeeTwo -> setBaseSalary(47000);
echo "  Updated Total Earnings: " . $employeeTwo-> Earnings();

//Polymorphism 
$myCar = new Car("C001", "Sedan", 50, 15);
$myCar->refuel(200);

$managerOne = new TransportationManager();
$managerOne->operateVehicle($myCar);

//Abstraction
$employeeThree = new FullTimeEmployee("Agbetor", "22206812", 16700.00);
echo $employeeThree->display() ;
echo $employeeThree->calculatePay();

     





























?>