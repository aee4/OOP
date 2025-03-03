<?php
class CommissionEmployee {
    private string $firstName;
    private string $lastName;
    private string $socialSecurityNumber;
    private float $grossSales;
    private float $commissionRate;

    public function __construct(string $firstName, string $lastName, string $socialSecurityNumber, float $grossSales, float $commissionRate) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->socialSecurityNumber = $socialSecurityNumber;
        $this->grossSales = $grossSales;
        $this->commissionRate = $commissionRate;
    }

    public function getFirstName(): string {
        return $this->firstName;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function getSocialSecurityNumber(): string {
        return $this->socialSecurityNumber;
    }

    public function getCommissionRate(): float {
        return $this->commissionRate;
    }

    public function getGrossSales(): float {
        return $this->grossSales;
    }

    public function setFirstName(string $firstName): void {
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName): void {
        $this->lastName = $lastName;
    }

    public function setSocialSecurityNumber(string $socialSecurityNumber): void {
        $this->socialSecurityNumber = $socialSecurityNumber;
    }

    public function setCommissionRate(float $commissionRate): void {
        if ($commissionRate >= 0.0 && $commissionRate <= 1.0) {
            $this->commissionRate = $commissionRate;
        } else {
            throw new InvalidArgumentException("Rate should be between 0.0 and 1.0");
        }
    }

    public function setGrossSales(float $grossSales): void {
        if ($grossSales >= 0.0) {
            $this->grossSales = $grossSales;
        } else {
            throw new InvalidArgumentException("Sales should be greater than 0.0");
        }
    }

    public function earnings(): float {
        return $this->grossSales * $this->commissionRate;
    }

    public function display(): string {
        return $this->getFirstName() . " " . 
               $this->getLastName() . " | " . 
               $this->getSocialSecurityNumber() . " | " . 
               $this->getCommissionRate() . " | " . 
               $this->getGrossSales() ;
    }
}
?>
