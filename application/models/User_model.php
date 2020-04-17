<?php

class User_model extends CI_Model
{

    public function getAllData() {
        return $this->db->get('detail_absensi')->result_array();
    }
}
