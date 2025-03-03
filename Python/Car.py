from Vehicle import Vehicle


class Car(Vehicle):
    def __init__(self,vehicle_id:str, model:str, fuel_level :float,fuel_efficiency :float):
        super().__init__(vehicle_id, model, fuel_level)
        self.fuel_efficiency = fuel_efficiency

    def calculate_range(self):
        range = self.fuel_level * self.fuel_efficiency
        print(f"Car {self.model} can travel {range} km with current fuel level.")
        return range
    

        
    