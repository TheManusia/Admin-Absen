<?php 

class Home extends CI_Controller {
    public function index() {

        $data['judul'] = "Dashboard";
        $this->load->view('inc/header', $data);
        $this->load->view('home/index');
        $this->load->view('inc/footer');
    }
}