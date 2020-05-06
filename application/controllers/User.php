<?php

class User extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
        if ($this->session->userdata('status') != 'login') {
            redirect(base_url('login'));
        }
    }

    public function index(){
        $data['judul'] = "User";
        $data['data'] = $this->User_model->getAllData();
        $this->load->view('inc/header', $data);
        $this->load->view('user/index');
        $this->load->view('inc/footer');
    }

    public function edit($id) {
        $data['judul'] = "Edit";
        $data['absen'] = $this->User_model->getAbsenById($id);
        $data['user'] = $this->User_model->getUserById($id);

        $this->form_validation->set_rules('alpa', 'Alpa', 'required|integer|is_natural');
        $this->form_validation->set_rules('izin', 'Izin', 'required|integer|is_natural');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('inc/header', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('inc/footer');
        } else {
            $this->User_model->updateAbsen();
            
            redirect('User');
        }
    }

    public function account($id) {
        $data['judul'] = "Account";

        $this->form_validation->set_rules('nama', 'Nama', 'required');

        $data['user'] = $this->User_model->getUserById($id);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('inc/header', $data);
            $this->load->view('user/account', $data);
            $this->load->view('inc/footer');
        } else {
            $this->User_model->updateUser();
            
            redirect('user');
        }
    }

    public function resetPass($id) {
        $this->User_model->resetPass($id);
        
        redirect('user/account/'.$id);
    }
}
