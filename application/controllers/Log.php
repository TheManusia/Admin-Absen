<?php

class Log extends CI_Controller {
    public function index(){

        $this->load->model('Log_model');

        $data['judul'] = "Log";
        $data['log'] = $this->Log_model->getAllLog();
        $this->load->view('inc/header', $data);
        $this->load->view('log/index', $data);
        $this->load->view('inc/footer');
    }
}