<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    // public function __construct()
    // {
    //    parent::__construct();
    //   if_login();
    // }

    public function index()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        // $this->load->view('templates/header', $data);
        //$this->load->view('templates/topbar', $data);
        $this->load->view('home/index', $data);
        //$this->load->view('templates/footer');
    }
}
