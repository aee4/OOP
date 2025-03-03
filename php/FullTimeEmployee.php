<?php
include "Employee.php";
class FullTimeEmployee extends Employee{
    private float $salary;
    public function __construct(string $name, string $employeeId, float $salary){
        parent::__construct($name, $employeeId);
     $this->salary = $salary;
    }
    public function getSalary():float{
        return $this->salary;
    }
    public function setSalary(float $salary):void{
        $this->salary = $salary;
    }
    public function calculatePay()  {
        echo "FullTimeEmployee Pay: {$this->salary}";
    }
    public function display(): string {
        return $this->getName() . "\n " . 
               $this->getEmployeeId() . " \ " . 
               $this->getSalary();
    }



    
}




?>