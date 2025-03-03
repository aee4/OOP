from abc import  abstractmethod

class Employee():
    def __init__(self, name: str, employee_id: str):
        self._name = name
        self._employee_id = employee_id

    def get_name(self) -> str:
        return self._name

    def get_employee_id(self) -> str:
        return self._employee_id

    @abstractmethod
    def calculate_pay(self):
        pass  
    
