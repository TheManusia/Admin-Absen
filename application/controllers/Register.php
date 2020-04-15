<?php

class Register extends CI_Controller {
    public function index(){
        $data['judul'] = "Register";
        $this->load->view('inc/header', $data);
        $this->load->view('register/index');
        $this->load->view('inc/footer');
    }
}