<?php

class User extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index(){
        $data['judul'] = "User";
        $data['data'] = $this->User_model->getAllData();
        $this->load->view('inc/header', $data);
        $this->load->view('user/index');
        $this->load->view('inc/footer');
    }

    public function edit() {
        $data['judul'] = "Edit";
        $this->load->view('inc/header', $data);
        $this->load->view('user/edit');
        $this->load->view('inc/footer');
    }

    public function account() {
        $data['judul'] = "Account";
        $this->load->view('inc/header', $data);
        $this->load->view('user/account');
        $this->load->view('inc/footer');
    }
}
