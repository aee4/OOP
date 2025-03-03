from CommissionEmployee import CommissionEmployee


class BasePlusCommissionEmployee(CommissionEmployee):
    def __init__(self, first_name: str, last_name: str, social_security_number : str, gross_sales: float, commission_rate: float, base_salary: float):
        super().__init__(first_name, last_name, social_security_number, gross_sales, commission_rate)
        self.base_salary = base_salary


    @property
    def base_salary(self) -> float:
        return self._base_salary
    @base_salary.setter
    def base_salary(self,  base_salary: float):
       self._base_salary = base_salary

    def earnings(self) -> float:
     return self._base_salary + super().earnings()
    

    def display_employee_details(self):
        return (f"Name: {self.first_name} {self.last_name}, "
                f"SSN: {self.social_security_number}, "
                f"Gross Sales: {self.gross_sales}, "
                f"Commission Rate: {self.commission_rate}, "
                f"Earnings: {self.earnings()}, "
                f"Base Salary:{self.base_salary:.2f}")




    