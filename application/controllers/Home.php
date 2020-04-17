<?php 

class Home extends CI_Controller {
    public function index() {
        
        $this->load->model('Home_model');

        $data['user'] = $this->Home_model->getAllUser();
        $data['status'] = $this->Home_model->getStatus();
        $data['judul'] = "Dashboard";
        $this->load->view('inc/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('inc/footer');
    }
}