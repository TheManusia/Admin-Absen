<?php

class Log_model extends CI_Model {
    public function getAllLog() {
        return $this->db->get('data_absensi')->result_array();
    }
}