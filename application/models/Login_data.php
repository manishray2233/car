<?php
class Login_data extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function admin_login($data)
    {
        $active = 1;
       
        $query = $this->db->query("select * from users_details where name='" . $data['name'] . "' and password='" . $data['password'] . "' and status='1' ");
        $get_row_data = $query->result_array();

        if (count($get_row_data) > 0) {
            return $get_row_data;
        } else {

            return false;
        }
    }
}
