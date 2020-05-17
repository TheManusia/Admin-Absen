<?php 

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('login'));
        }
        $this->load->model('Home_model');
    }

    public function index() {
        $data['user'] = $this->Home_model->getAllUser();
        $data['status'] = $this->Home_model->getStatus();
        $data['hari'] = $this->Home_model->getDay();
        $data['judul'] = "Dashboard";
        $this->load->view('inc/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('inc/footer');
    }

    public function refresh() {
        $data['user'] = $this->Home_model->getAllUser();
        $data['status'] = $this->Home_model->getStatus();
        $data['judul'] = "Dashboard";
        $data['hari'] = $this->Home_model->getDay();
        $this->load->view('home/status',$data);
    }
}