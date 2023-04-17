<?php
class Car_properties extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function saveData($data)
    {

        $active = 1;


        $query = $this->db->query("INSERT INTO " . $data['name'] . " (" . $data['name'] . ", `status`) VALUES ('" . $data['value'] . "', '1');");

        return true;
    }
    public function getData()
    {
        $data = array();
        $vehicleType = $this->db->query("SELECT * FROM `VehicleType`;")->result_array();
        $make = $this->db->query("SELECT * FROM `Make`;")->result_array();
        $model = $this->db->query("SELECT * FROM `Model`;")->result_array();
        $mileage = $this->db->query("SELECT * FROM `Mileage`;")->result_array();
        $engineSize = $this->db->query("SELECT * FROM `EngineSize`;")->result_array();
        $power = $this->db->query("SELECT * FROM `Power`;")->result_array();
        $fuelType = $this->db->query("SELECT * FROM `FuelType`;")->result_array();
        $gearBox = $this->db->query("SELECT * FROM `GearBox`;")->result_array();
        $seat = $this->db->query("SELECT * FROM `Seats`;")->result_array();
        $price = $this->db->query("SELECT * FROM `price`;")->result_array();
        $year = $this->db->query("SELECT * FROM `year_of_purchase`;")->result_array();
        $kilometer = $this->db->query("SELECT * FROM `kilometer`;")->result_array();

        $data = array(
            'vehicleType' => $vehicleType,
            'make' => $make,
            'model' => $model,
            'mileage' => $mileage,
            'engineSize' => $engineSize,
            'power' => $power,
            'fuelType' => $fuelType,
            'gearBox' => $gearBox,
            'seat' => $seat,
            'price' => $price,
            'year' => $year,
            'kilometer' => $kilometer

        );

        return $data;
    }

    public function saveCarDetails()
    {
        $query = $this->db->query("INSERT INTO `carDetails` (`vehicle_type`, `make`, `model`, `mileage`, `engine_size`, `power`, `fuel_type`, `gear_box`, `seats`,`price`,`year_of_purchase`,`kilometer`, `status`)
        VALUES (" . $_POST['vehiclType'] . "," . $_POST['make'] . "," . $_POST['model'] . "," . $_POST['mileage'] . "," . $_POST['engineSize'] . "," . $_POST['power'] . "," . $_POST['fuel'] . "," . $_POST['gear'] . "," . $_POST['seat'] . "," . $_POST['price'] . "," . $_POST['year'] . "," . $_POST['kilometer'] . ",'1');");


        return $query;
    }

    public function fetchCarDetails()
    {
        $data = array();
        $query = $this->db->query("SELECT carDetails.id as car_id, Model.Model AS car_name,Make.Make AS car_make,VehicleType.VehicleType AS used_type,Mileage.Mileage AS car_mileage,EngineSize.EngineSize AS car_engine_size,Power.Power AS car_power,FuelType.FuelType AS car_fuel_type,GearBox.GearBox AS car_gear,Seats.Seats AS car_seats,price.price AS car_price,year_of_purchase.year_of_purchase AS car_year, kilometer.kilometer AS car_kilometer                                                                                                                                   
        FROM carDetails 
        INNER JOIN VehicleType ON VehicleType.id = carDetails.vehicle_type
        INNER JOIN Make ON Make.id = carDetails.make
        INNER JOIN Model ON Model.id = carDetails.model
        INNER JOIN Mileage ON Mileage.id = carDetails.mileage
        INNER JOIN EngineSize ON EngineSize.id = carDetails.engine_size
        INNER JOIN Power ON Power.id = carDetails.power
        INNER JOIN FuelType ON FuelType.id = carDetails.fuel_type
        INNER JOIN GearBox ON GearBox.id = carDetails.gear_box
        INNER JOIN Seats ON Seats.id = carDetails.seats
        INNER JOIN price ON price.id = carDetails.price
        INNER JOIN year_of_purchase ON year_of_purchase.id = carDetails.year_of_purchase
        INNER JOIN kilometer ON kilometer.id = carDetails.kilometer;")->result_array();
        $data = array(
            'data' => $query
        );

        return $data;
    }

    public function getDataById($id)
    {
        $data = array();
        $query = $this->db->query("SELECT Model.id AS car_name,Make.id AS car_make,VehicleType.id AS used_type,Mileage.id AS car_mileage,EngineSize.id AS car_engine_size,Power.id AS car_power,FuelType.id AS car_fuel_type,GearBox.id AS car_gear,Seats.id AS car_seats,price.id AS car_price,year_of_purchase.id AS car_year, kilometer.id AS car_kilometer                                                                                                                                   
        FROM carDetails 
        INNER JOIN VehicleType ON VehicleType.id = carDetails.vehicle_type
        INNER JOIN Make ON Make.id = carDetails.make
        INNER JOIN Model ON Model.id = carDetails.model
        INNER JOIN Mileage ON Mileage.id = carDetails.mileage
        INNER JOIN EngineSize ON EngineSize.id = carDetails.engine_size
        INNER JOIN Power ON Power.id = carDetails.power
        INNER JOIN FuelType ON FuelType.id = carDetails.fuel_type
        INNER JOIN GearBox ON GearBox.id = carDetails.gear_box
        INNER JOIN Seats ON Seats.id = carDetails.seats
        INNER JOIN price ON price.id = carDetails.price
        INNER JOIN year_of_purchase ON year_of_purchase.id = carDetails.year_of_purchase
        INNER JOIN kilometer ON kilometer.id = carDetails.kilometer
        where carDetails.id = " . $id . "  ;")->result_array();
        $data = array(
            'data' => $query
        );

        return $query;
    }

    public function updateDataById($id)
    {

        $query = $this->db->query("UPDATE carDetails SET vehicle_type= '" . $_POST['vehicleType'] . "',make = '" . $_POST['company'] . "', model = '" . $_POST['carName'] . "', mileage = '" . $_POST['mileage'] . "',
                                  engine_size = '" . $_POST['engineSize'] . "',power= '" . $_POST['power'] . "',fuel_type= '" . $_POST['fuelType'] . "',gear_box='" . $_POST['gear'] . "',seats = '" . $_POST['seat'] . "',price= '" . $_POST['price'] . "', year_of_purchase = '" . $_POST['yearOfPurchase'] . "',kilometer = '" . $_POST['kilometerDriven'] . "' WHERE id = '" . $id . "';");

        return $query;
    }

    public function deleteCustomerDataById($id)
    {
        $query = $this->db->query("DELETE FROM carDetails WHERE id = " . $id . ";");
        return $query;
    }
}
