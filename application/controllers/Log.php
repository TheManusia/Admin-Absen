<?php

class Log extends CI_Controller {
    public function index(){
        $data['judul'] = "Log";
        $this->load->view('inc/header', $data);
        $this->load->view('log/index');
        $this->load->view('inc/footer');
    }
}