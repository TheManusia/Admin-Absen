<?php

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
        if ($this->session->userdata('status') != 'login') {
            redirect(base_url('login'));
        }
    }

    public function index(){
        $data['judul'] = "Admin";
        $data['data'] = $this->Admin_model->getAdmin();

        $this->load->view('inc/header', $data);
        $this->load->view('admin/index',$data);
        $this->load->view('inc/footer');
    }

    public function detail($id){
        $data['judul'] = "Detail Admin";
        $data['data'] = $this->Admin_model->getAdminDetailById($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('inc/header', $data);
            $this->load->view('admin/detail', $data);
            $this->load->view('inc/footer');
        } else {
            $this->Admin_model->updateAdmin();

            redirect('admin');
        }
    }

    public function resetPass($id) {
        $this->Admin_model->resetPass($id);
        
        redirect('admin/detail/'.$id);
    }
}