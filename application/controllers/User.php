<?php

class User extends CI_Controller
{
    public function index(){
        $data['judul'] = "User";
        $this->load->view('inc/header', $data);
        $this->load->view('user/index');
        $this->load->view('inc/footer');
    }
}
