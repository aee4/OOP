using System;

public class CommissionEmployee
{

    private string firstName;
    private string lastName;
    private string socialSecurityNumber;
    private float grossSales;
    private float commissionRate;

    public CommissionEmployee(string firstName, string lastName, string socialSecurityNumber, float grossSales, float commissionRate) {
        FirstName = firstName;
        LastName = lastName;
        SocialSecurityNumber = socialSecurityNumber;
        GrossSales = grossSales;
        CommissionRate = commissionRate;
    }
    public string FirstName {get; set;}
    public string LastName {get; set;}
    public string SocialSecurityNumber {get; set;}
    public float GrossSales {get; private set;}
    public float CommissionRate {get; private set;}

    public void SetGrossSales(float grossSales)
    {
        if (grossSales < 0.0)
        {
            throw new ArgumentException("Gross sales must be greater than 0.0");
        }
        GrossSales = grossSales;
    }

    public void SetCommissionRate(float commissionRate)
    {
        if (commissionRate <= 0 || commissionRate >= 1)
        {
            throw new ArgumentException("Commission rate must be between 0 and 1");
        }
        CommissionRate = commissionRate;
    }

   
    public double Earnings()
    {
        return GrossSales * CommissionRate;
    }

    public override string ToString()
    {
        return string.Format("Commission Employee: {0} {1}\nSocial Security Number: {2}\nGross Sales: {3:F2}\nCommission Rate: {4:F2}", 
                              FirstName, LastName, SocialSecurityNumber, GrossSales, CommissionRate);
    }
}
