from Vehicle import Vehicle


class TransportationManager:

     def operate_vehicle(self, vehicle: Vehicle):
        print(f"Operating Vehicle: {vehicle.calculate_range()} km estimated range.")

        