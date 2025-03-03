from Employee import Employee

class FullTimeEmployee(Employee):
    def __init__(self, name: str, employee_id: str, salary: float):
        super().__init__(name, employee_id)
        self._salary = salary  
        
    def get_salary(self) -> float:
        return self._salary

    def set_salary(self, salary: float) -> None:
        self._salary = salary

    def calculate_pay(self) -> None:
        print(f"FullTimeEmployee Pay: {self._salary}")

    def display(self) -> str:
        return f"{self.get_name()}\n {self.get_employee_id()} \\ {self.get_salary()}"
    

