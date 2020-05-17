<?php

class Log_model extends CI_Model {
    public function getAllLog($tanggal) {
        return $this->db->select('a.id_data, a.tanggal, a.waktu, u.nama')->from('data_absensi a')->join('user u', 'a.username = u.username')->where('tanggal', $tanggal)->get()->result_array();
    }

    public function getLogByDate() {
        return $this->db->select('tanggal')->group_by('tanggal')->get('data_absensi')->result_array();
    }
}