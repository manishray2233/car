<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SaveData extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('car_properties');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('Data/getCarProperties');
    }

    public function carData()
    {
        $data = $this->car_properties->getData();

        $this->load->view('Data/carData', $data);
    }

    public function post_validate()
    {
        $name = $_GET['name'];


        $this->form_validation->set_rules(
            $name,
            $name,
            'required'
        );

        $this->form_validation->set_error_delimiters('<div class="error" style="color: red;">', '</div>');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('Data/getCarProperties');
        } else {
            $table_name = $name;
            $value = $_POST[$table_name];


            $data = array(
                'name' => $table_name,
                'value' => $value
            );

            $return_login_data = $this->car_properties->saveData($data);
            $this->load->view('Data/getCarProperties');
        }
    }

    public function validateCarDetails()
    {
        $this->form_validation->set_rules(
            'vehiclType',
            'Vehicle Type',
            'required'
        );
        $this->form_validation->set_rules(
            'make',
            'Make',
            'required'
        );
        $this->form_validation->set_rules(
            'model',
            'Model',
            'required'
        );
        $this->form_validation->set_rules(
            'mileage',
            'Mileage',
            'required'
        );
        $this->form_validation->set_rules(
            'engineSize',
            'Engine Size',
            'required'
        );
        $this->form_validation->set_rules(
            'power',
            'Power',
            'required'
        );
        $this->form_validation->set_rules(
            'fuel',
            'Fuel Type',
            'required'
        );
        $this->form_validation->set_rules(
            'gear',
            'Gear',
            'required'
        );
        $this->form_validation->set_rules(
            'seat',
            'Seats',
            'required'
        );
        $this->form_validation->set_rules(
            'price',
            'Price',
            'required'
        );
        $this->form_validation->set_rules(
            'year',
            'Year',
            'required'
        );
        $this->form_validation->set_rules(
            'kilometer',
            'Kilometer',
            'required'
        );

        $this->form_validation->set_error_delimiters('<div class="error" style="color: red;">', '</div>');

        if ($this->form_validation->run() === FALSE) {
            $data = $this->car_properties->getData();

            $this->load->view('Data/carData', $data);
        } else {
            $this->saveCarDetails();
        }
    }

    public function saveCarDetails()
    {
        $data2 = $this->car_properties->saveCarDetails();


        $data = $this->car_properties->getData();
        $this->load->view('Data/carData', $data);
    }

    public function showData()
    {
        $result1 = $this->car_properties->fetchCarDetails();
        $result2 = $this->car_properties->getData();
        $data = array(
            'carDetails' => $result1,
            'carProperties' => $result2
        );

        $this->load->view('Data/showData', $data);
    }

    public function getDataById()
    {

        $id = $_GET['id'];
        $result = $this->car_properties->getDataById($id);

        echo json_encode($result);
    }

    public function updateDataById()
    {
        $id = $_GET['id'];
        $data = $this->car_properties->updateDataById($id);
        echo json_encode($data);
    }

    public function deleteCustomerDataById()
    {
        $id = $_GET['id'];
        $result = $this->car_properties->deleteCustomerDataById($id);
        echo json_encode($result);
    }
}
