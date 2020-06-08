<?php

class Log extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('status') != 'login') {
            redirect(base_url('login'));
        }
        $this->load->model('Log_model');
    }
    public function index(){

        $data['judul'] = "Log";
        $data['log'] = $this->Log_model->getLogByDate();
        $this->load->view('inc/header', $data);
        $this->load->view('log/index', $data);
        $this->load->view('inc/footer');
    }

    public function view($tanggal) {
        $data['judul'] = "Log";
        $data['log'] = $this->Log_model->getAllLog($tanggal);
        $data['tanggal'] = $tanggal;

        $this->load->view('inc/header', $data);
        $this->load->view('log/detail', $data);
        $this->load->view('inc/footer');
    }
}