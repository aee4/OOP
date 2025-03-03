using namespace CommissionEmployee
{
    
public class BasePlusCommissionEmployee : CommissionEmployee {
    private float baseSalary;
    
    public BasePlusCommissionEmployee(string firstName, string lastName, string socialSecurityNumber, float grossSales, float commissionRate, float baseSalary )
        : base(firstName, lastName, socialSecurityNumber, grossSales, commissionRate){
            this.baseSalary = baseSalary;
        }

public float BaseSalary {get; private set;}

 public override float Earnings(){
        return BaseSalary + base.Earnings();
    }

    public void SetBaseSalary(float newSalary){
        BaseSalary = newSalary;
    }

    public override void DisplayEmployeeDetails(){
        base.DisplayEmployeeDetails();
        Console.WriteLine($"Base Salary: {BaseSalary:C}\nTotal Earnings: {Earnings():C}");
    }
}



}
    


