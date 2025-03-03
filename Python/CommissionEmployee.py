class CommissionEmployee:
    def __init__(self, first_name: str, last_name: str, social_security_number: str, gross_sales: float, commission_rate: float):
        self.first_name = first_name
        self.last_name = last_name
        self.social_security_number = social_security_number
        self.gross_sales = gross_sales
        self.commission_rate = commission_rate

    @property
    def first_name(self):
        return self._first_name

    @first_name.setter
    def first_name(self, first_name):
        
        self._first_name =first_name

    @property
    def last_name(self):
        return self._last_name

    @last_name.setter
    def last_name(self, last_name):
        self._last_name = last_name

    @property
    def social_security_number(self):
        return self._social_security_number

    @social_security_number.setter
    def social_security_number(self, ssn):
        self._social_security_number =ssn

    @property
    def gross_sales(self):
        return self._gross_sales

    @gross_sales.setter
    def gross_sales(self, sales):
        if sales < 0:
            raise ValueError("Gross sales must be non-negative")
        self._gross_sales = sales

    @property
    def commission_rate(self):
        return self._commission_rate

    @commission_rate.setter
    def commission_rate(self, value):
        if not (0 <= value <= 1):
            raise ValueError("Commission rate must be between 0 and 1")
        self._commission_rate = value

    def earnings(self):
        return self.gross_sales * self.commission_rate

    def display_employee_details(self):
        return (f"Name: {self.first_name} {self.last_name}, "
                f"SSN: {self.social_security_number}, "
                f"Gross Sales: {self.gross_sales}, "
                f"Commission Rate: {self.commission_rate}, "
                f"Earnings: {self.earnings():.2f}")
