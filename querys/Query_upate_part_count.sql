UPDATE carparts
SET `Count` = 0;
UPDATE carparts, warehouse
SET carparts.`Count` = carparts.`Count` + warehouse.`Count`
WHERE carparts.id = warehouse.Car_part;