<?php

class Laporan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Laporan_model');
        if ($this->session->userdata('status') != 'login') {
            redirect(base_url('login'));
        }
    }

    public function index() {
        $data['judul'] = "Laporan";
        $data['tanggal'] = $this->Laporan_model->getList();
        $this->load->view('inc/header', $data);
        $this->load->view('laporan/index', $data);
        $this->load->view('inc/footer');
    }

    public function view($tanggal) {
        $data['judul'] = "Laporan";
        $data['hadir'] = $this->Laporan_model->getHadir($tanggal);
        $data['alpa'] = $this->Laporan_model->getAlpa($tanggal);
        $data['izin'] = $this->Laporan_model->getIzin($tanggal);
        $this->load->view('inc/header', $data);
        $this->load->view('laporan/view', $data);
        $this->load->view('inc/footer');
    }
}