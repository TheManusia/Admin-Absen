<?php

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Login_model');
    }

    public function index() {

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->session->userdata('status') != 'login') {
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('login/index');
            } else {
                $this->Login_model->login();
            }
        }
    }

    public function logout() {
        //$this->Login_model->logout();

        session_destroy();
        redirect(base_url('login'));
    }
}