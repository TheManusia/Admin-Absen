<?php

class Setting extends CI_Controller {
    public function index() {
        $data['judul'] = "Setting";
        $this->load->view('inc/header', $data);
        $this->load->view('setting/index');
        $this->load->view('inc/footer');
    }
}