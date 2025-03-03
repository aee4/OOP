from abc import abstractmethod


class Vehicle:
    def __init__(self, vehicle_id:str, model:str, fuel_level :float):
        self.vehicle_id = vehicle_id
        self.model = model
        self.fuel_level = fuel_level

    def refuel(self,liters: float):
        self.fuel_level += liters

    @abstractmethod
    def  calculate_range():
     pass
        