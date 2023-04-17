<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'html'));
        // $this->load->library('form_validation');
        $this->load->database();
        // $this->load->model('Login_data');
        $this->load->library('session');
    }
    public function index()
    {
        $this->load->view('Dashboard/index');
    }
    
    public function error401()
    {
        $this->load->view('Dashboard/401');
    }
    public function error404()
    {
        $this->load->view('Dashboard/404');
    }
    public function error500()
    {
        $this->load->view('Dashboard/500');
    }
    public function charts()
    {
        $this->load->view('Dashboard/charts');
    }
    public function sideNav()
    {
        $this->load->view('Dashboard/layout-sidenav-light');
    }
    public function staticLayout()
    {
        $this->load->view('Dashboard/layout-static');
    }
    public function login()
    {
        $this->load->view('Dashboard/login');
    }
    public function password()
    {
        $this->load->view('Dashboard/password');
    }
    public function register()
    {
        $this->load->view('Dashboard/register');
    }
    public function tables()
    {
        $this->load->view('Dashboard/tables');
    }
}
