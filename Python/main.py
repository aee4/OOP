from BasePlusCommissionEmployee import BasePlusCommissionEmployee
from Car import Car
from CommissionEmployee import CommissionEmployee
from FullTimeEmployee import FullTimeEmployee
from TransportationManager  import TransportationManager 


#Encapsulation
employee_one = CommissionEmployee("Emmanuel", "Avan", "FR3SHI3", 23000, 0.7)
employee_one.gross_sales = 45000
employee_one.commission_rate = 0.5
print(employee_one.display_employee_details())
print(employee_one.earnings())

#Inheritance
employee_two = BasePlusCommissionEmployee("Emmanuella", "Avanette", "HEI879", 93000, 0.3, 90000)
print(employee_two.display_employee_details())
employee_two.base_salary = 100000
print(employee_two.earnings())

#Polymorphism
my_car = Car("C001", "Sedan", 50, 5)
my_car.refuel(200)  

manager_one = TransportationManager()
manager_one.operate_vehicle(my_car)

#Abstraction
employee_three = FullTimeEmployee("Agbetor", "22206812", 16700.00)
    
print(employee_three.display()) 
print(employee_three.calculate_pay())  
