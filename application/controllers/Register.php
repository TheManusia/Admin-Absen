<?php

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Register_model');
        if ($this->session->userdata('status') != 'login') {
            redirect(base_url('login'));
        }
    }

    public function index(){
        $data['judul'] = "Register";

        $this->form_validation->set_rules('nama', 'Nama', 'required|alpha');
        $this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');

        if ($this->form_validation->run() == FALSE) {   
            $this->load->view('inc/header', $data);
            $this->load->view('register/index');
            $this->load->view('inc/footer');
        } else {
            $this->Register_model->register();
            redirect('register');
        }
    }
}