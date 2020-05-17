<?php

class Log_model extends CI_Model {
    public function getAllLog() {
        return $this->db->select('a.id_data, a.tanggal, a.waktu, u.nama')->from('data_absensi a')->join('user u', 'a.username = u.username')->get()->result_array();
    }
}