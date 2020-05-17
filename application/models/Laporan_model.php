<?php

class Laporan_model extends CI_Model {
    public function getList() {
        return $this->db->select('tanggal')->group_by('tanggal')->get('laporan')->result_array();
    }

    public function getAlpa($tanggal) {
        return $this->db->select('*')->get_where('laporan', ['type' => 'alpa', 'tanggal' => $tanggal])->result_array();
    }

    public function getIzin($tanggal) {
        return $this->db->select('*')->get_where('laporan', ['type' => 'izin', 'tanggal' => $tanggal])->result_array();
    }

    public function getHadir($tanggal) {
        return $this->db->select('*')->get_where('laporan', ['type' => 'hadir', 'tanggal' => $tanggal])->result_array();
    }
}