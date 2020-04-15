<?php

class Edit extends CI_Controller {
    public function index()
    {
        $data['judul'] = "Edit";
        $this->load->view('inc/header', $data);
        $this->load->view('user/edit');
        $this->load->view('inc/footer');
    }
}