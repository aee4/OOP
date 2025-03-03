class FullTimeEmployee extends Employee {
    private double salary;

    public FullTimeEmployee(String name, String employeeId, double salary) {
        super(name, employeeId);
        this.salary = salary;
    }

    public double getSalary() {
        return salary;
    }

    public void setSalary(double salary) {
        this.salary = salary;
    }

    @Override
    public double calculatePay() {
        return salary;
    }

    public String display() {
        return String.format("%s%n%d \\ %.2f", getName(), getEmployeeId(), getSalary());

    }
}
