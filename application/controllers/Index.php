<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('car_properties');
    }
    public function index()
    {
        $data = $this->getData();

        $this->load->view('index', $data);
    }
    public function logOut()
    {
        $this->session->sess_destroy();
        $this->index();
    }

    /*-------Controller functions for page redirections--------*/
    public function car()
    {
        $data1 = $this->getData();
        $data2 = $this->car_properties->getData();
        $data = array(
            'data' => $data2,
            'data1' => $data1
        );
        $this->load->view('cars', $data);
      
    }
    public function carDetails()
    {
        $data = $this->getData();
        $this->load->view('car-details', $data);
    }
    public function about()
    {

        $this->load->view('about-us');
    }
    public function blog()
    {

        $this->load->view('blog');
    }
    public function blogDetails()
    {

        $this->load->view('blog-details');
    }
    public function contact()
    {

        $this->load->view('contact');
    }
    public function team()
    {

        $this->load->view('team');
    }
    public function testimonials()
    {

        $this->load->view('testimonials');
    }
    public function faq()
    {

        $this->load->view('faq');
    }
    public function terms()
    {

        $this->load->view('terms');
    }
    /*--------------------Over------------------*/



    /*--------------Controllers for load data from the database and show it;----------*/
    public function getData()
    {
        $data = $this->car_properties->fetchCarDetails();
        return $data;
    }
}
