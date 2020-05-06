<?php

class Setting extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Setting_model');
        $this->load->library('form_validation');
        if ($this->session->userdata('status') != 'login') {
            redirect(base_url('login'));
        }
    }
    public function index() {
        $data['judul'] = "Setting";

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('newpass', 'New Password', 'required');
        $this->form_validation->set_rules('confirmnewpass', 'Confirm New Password', 'required|matches[newpass]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('inc/header', $data);
            $this->load->view('setting/index');
            $this->load->view('inc/footer');
        } else {
            $this->Setting_model->edit();
            redirect(base_url('setting'));
        }
        
    }
}