<?php 

class Account extends CI_Controller {
    public function index() {
        $data['judul'] = "Account";
        $this->load->view('inc/header', $data);
        $this->load->view('user/account');
        $this->load->view('inc/footer');
    }
}