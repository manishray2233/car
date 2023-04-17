<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('Login_data');
        $this->load->library('session');
    }
    public function index()
    {

        $this->load->view('Login/index');
    }
    public function post_validate()
    {
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|min_length[5]|max_length[15]|alpha'
        );
        $this->form_validation->set_rules(
            'pass',
            'Password',
            // 'required|min_length[5]|max_length[15]|regex_match[@#$%^&*0-9]'
            'required|min_length[5]|max_length[15]'
        );
        $this->form_validation->set_error_delimiters('<div class="error" style="color: red;">', '</div>');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('Login/index');
        } else {

            $user_name = $_POST['username'];
            $user_pass = $_POST['pass'];


            $data = array(
                'name' => $user_name,
                'password' => $user_pass
            );

            $return_login_data = $this->Login_data->admin_login($data);

            if ($return_login_data == false) {
                $data['error'] = "Invalid user details !!";
                $this->load->view('Login/index', $data);
            } else {
                $this->session->set_userdata('user_data', $return_login_data);
                
                $this->load->view('Dashboard/index');
            }
        }
    }
}
