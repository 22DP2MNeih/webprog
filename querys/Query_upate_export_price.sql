UPDATE exporting, companies, warehouse
SET exporting.Price = ROUND (warehouse.Price + warehouse.Price * companies.Export_tax, 2)
WHERE exporting.Company = companies.id AND exporting.Part = warehouse.Car_part AND exporting.Company = warehouse.Company;