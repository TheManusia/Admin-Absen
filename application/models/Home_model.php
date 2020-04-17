<?php

class Home_model extends CI_Model {
    public function getAllUser() {
        return $this->db->select('username')->get('user')->num_rows();
    }

    public function getStatus() {
        return $this->db->where('tanggal', date('Y-m-d'))->get('data_absensi')->num_rows();
    }
}