public class CommissionEmployee {
    private String firstName;
    private String lastName;
    private String socialSecurityNumber;
    private double grossSales;
    private double commissionRate;

    public CommissionEmployee(String firstName, String lastName, String socialSecurityNumber, double grossSales, double commissionRate) {
        this.firstName = firstName;
        this.lastName = lastName;
        this.socialSecurityNumber = socialSecurityNumber;
        this.grossSales = grossSales;
        this.commissionRate = commissionRate;
    }

    public String getFirstName() {
        return firstName;
    }

    public String getLastName() {
        return lastName;
    }

    public String getSocialSecurityNumber() {
        return socialSecurityNumber;
    }

    public double getCommissionRate() {
        return commissionRate;
    }

    public double getGrossSales() {
        return grossSales;
    }

    public void setFirstName(String firstName) {
        this.firstName = firstName;
    }

    public void setLastName(String lastName) {
        this.lastName = lastName;
    }

    public void setSocialSecurityNumber(String socialSecurityNumber) {
        this.socialSecurityNumber = socialSecurityNumber;
    }

    public void setCommissionRate(double commissionRate) {
        if (commissionRate >= 0.0 && commissionRate <= 1.0) {
            this.commissionRate = commissionRate;
        } else {
            throw new IllegalArgumentException("Rate should be between 0.0 and 1.0");
        }
    }

    public void setGrossSales(double grossSales) {
        if (grossSales >= 0.0) {
            this.grossSales = grossSales;
        } else {
            throw new IllegalArgumentException("Sales should be greater than 0.0");
        }
    }

    public double earnings() {
        return grossSales * commissionRate;
    }

    public String display() {
        return getFirstName() + " " +
               getLastName() + " | " +
               getSocialSecurityNumber() + " | " +
               getCommissionRate() + " | " +
               getGrossSales();
    }
}
