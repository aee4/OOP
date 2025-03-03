<?php
class BasePlusCommissionEmployee extends CommissionEmployee {
     private float $baseSalary;
     public function __construct(string $firstName, string $lastName, string $socialSecurityNumber,  float $commissionRate, float $grossSales, float $baseSalary) {
      parent::__construct($firstName, $lastName, $socialSecurityNumber, $commissionRate, $grossSales); 
        
     $this->baseSalary = $baseSalary;

    } 
    public function getBaseSalary():float {
        return $this->baseSalary;
        }
    public function setBaseSalary($baseSalary): void {
        $this->baseSalary = $baseSalary;
        }

    public function earnings(): float{
        return parent::earnings() + $this->baseSalary;
    }
    public function display(): string {
        return $this->getFirstName() . " " . 
               $this->getLastName() . " | " . 
               $this->getSocialSecurityNumber() . " | " . 
               $this->getCommissionRate() . " | " . 
               $this->getGrossSales() . " | " . 
               $this->getBaseSalary();
    }

    }